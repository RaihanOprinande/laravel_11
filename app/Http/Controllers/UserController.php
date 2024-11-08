<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users=User::latest()->paginate(10);
        return view('akademik.user',['usr'=>$users]);
    }

    public function create(){
        return view('dashboard.user.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
        ]);

        // dd($validated);
        User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password'])
            ]
        );
        return redirect('/user')-> with('pesan', 'Data berhasil disimpan');
    }

    public function edit(string $id){
        $user = User::find($id);
        return view('dashboard.user.edit',compact('user'));
    }

    public function update(Request $request, string $id){
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
        ]);
        User::where('id',$id)->update($validated);
        return redirect('user')-> with('pesan', 'Data berhasil diubah');
    }

    public function destroy(string $id){
        User::destroy($id);
        return redirect('user')->with('pesan','Data berhasil dihapus');
    }

    public function show(string $id){
        $user = User::findOrFail($id);
        return view('dashboard.user.show', compact('user'));
    }
}
