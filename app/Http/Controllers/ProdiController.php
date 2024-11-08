<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis=Prodi::latest()->paginate(10);
        return view('akademik.prodi',['prd'=>$prodis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('dashboard.prodi.create',['prodis' => Prodi::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $validated = $request->validate([
            'nama' => 'required|min:3'
        ]);
        Prodi::create($validated);
        return redirect('/prd-index')-> with('pesan', 'Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $prodis = Prodi::find($id);
        return view('dashboard.prodi.edit',compact('prodis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $validated = $request->validate([
            'nama' => 'required|min:3',
        ]);
        Prodi::where('id',$id)->update($validated);
        return redirect('/prd-index')-> with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        Prodi::destroy($id);
        return redirect('prd-index')->with('pesan','Data berhasil dihapus');
    }
}
