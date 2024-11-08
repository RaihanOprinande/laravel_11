<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatans=Jabatan::latest()->paginate(10);
        return view('akademik.jabatan',['jbt'=>$jabatans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('dashboard.jabatan.create',['prodis' => Jabatan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $validated = $request->validate([
            'kode_jabatan' => 'required|unique:jabatans',
            'nama_jabatan' => 'required',
            'keterangan' => 'required',
        ]);
        Jabatan::create($validated);
        return redirect('/jbt-index')-> with('pesan', 'Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $jabatan = Jabatan::findOrFail($id);
        return view('dashboard.jabatan.show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $jabatans = Jabatan::find($id);
        return view('dashboard.jabatan.edit',compact('jabatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $validated = $request->validate([
            // 'kode_jabatan' => 'required|unique:jabatans',
            'nama_jabatan' => 'required',
            'keterangan' => 'required',
        ]);
        Jabatan::where('id',$id)->update($validated);
        return redirect('/jbt-index')-> with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        Jabatan::destroy($id);
        return redirect('jbt-index')->with('pesan','Data berhasil dihapus');
    }

    public function cetakpdf(){
        $pdf = Pdf::loadView('dashboard.jabatan.cetak', ['jbt' => Jabatan::all() ]);
        return $pdf->stream('Laporan Data Jabatan.pdf');
    }
}
