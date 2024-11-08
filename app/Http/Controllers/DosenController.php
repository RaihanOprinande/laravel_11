<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jabatan;
use App\Models\Prodi;
// use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if (! Gate::allows('admin')) {
        //     abort(403);
        // }

        $dosen=Dosen::latest()->paginate(10);
        $jabatan=Jabatan::latest()->paginate(10);
        return view('akademik.dosen',['dsn'=>$dosen, 'jbt'=>$jabatan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = Prodi::all();
        return view('dashboard.dosen.create', ['prodis' => Prodi::all(), 'jabatans'=>Jabatan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:dosens',
            'nama' => 'required|min:3',
            'email' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
            'jabatan_id'=> 'required',
            'alamat' => 'nullable',
        ]);

        // dd($validated);
        Dosen::create($validated);
        return redirect('/dsn-index')-> with('pesan', 'Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $Dosen = Dosen::findOrFail($id);
        return view('dashboard.dosen.show', compact('Dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $prodis = Prodi::all();
        $jabatans = Jabatan::all();
        $dosen = Dosen::find($id);
        return view('dashboard.dosen.edit', compact('prodis', 'dosen', 'jabatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $validated = $request->validate([
            'nik' => 'required|max:10',
            'nama' => 'required|min:3',
            'email' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
            'jabatan_id' => 'required',
            'alamat' => 'nullable',
        ]);
        Dosen::where('id',$id)->update($validated);
        return redirect('/dsn-index')-> with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        Dosen::destroy($id);
        return redirect('/dsn-index')->with('pesan','Data berhasil dihapus');
    }
}
