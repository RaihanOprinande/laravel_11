<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $dosen=Dosen::latest()->paginate(10);
        $mahasiswas=Mahasiswa::latest()->paginate(10);
        $prodis=Prodi::latest()->paginate(10);

        return view('akademik.mahasiswa',['mhs'=>$mahasiswas,'dsn'=>$dosen, 'prd'=>$prodis ]);
    }

    public function create(){
        return view('dashboard.mahasiswa.create', ['prodis' => Prodi::all()]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama' => 'required|min:3',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'nullable',
        ]);

        // dd($validated);
        Mahasiswa::create($validated);
        return redirect('/mhs-index')-> with('pesan', 'Data berhasil disimpan');

    }

    public function edit(string $id){
        $mahasiswa = Mahasiswa::find($id);
        $prodis = Prodi::all();
        return view('dashboard.mahasiswa.edit',compact('mahasiswa','prodis'));
    }

    public function cetakpdf(){
        $pdf = Pdf::loadView('dashboard.mahasiswa.cetak_pdf', ['mhs' => Mahasiswa::all(), 'prd' => Prodi::all() ]);
        return $pdf->stream('Laporan Data Mahasiswa.pdf');
    }

    public function update(Request $request, string $id){
        $validated = $request->validate([
            'nim' => 'required',
            'nama' => 'required|min:3',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'nullable',
        ]);
        Mahasiswa::where('id',$id)->update($validated);
        return redirect('mhs-index')-> with('pesan', 'Data berhasil diubah');
    }

    public function destroy(string $id){
        Mahasiswa::destroy($id);
        return redirect('mhs-index')->with('pesan','Data berhasil dihapus');
    }

    public function show(string $id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('dashboard.mahasiswa.show', compact('mahasiswa'));
    }
}
