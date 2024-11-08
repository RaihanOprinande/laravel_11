<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jabatan;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Prodi;
use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('layouts.home');
    }

    public function mahasiswa(){

        $mahasiswas=Mahasiswa::latest();
        if (request('search')) {
            $mahasiswas->where('nama','like', '$' . Request('search') . '%')
                        ->orWhere('email','like','%'. Request('search') . '%');
        }

        // $dosen=Dosen::latest()->paginate(10);
        // $mahasiswas=Mahasiswa::latest()->paginate(10);
        $prodis=Prodi::latest()->paginate(10);

        return view('layouts.mahasiswa',['mhs'=>$mahasiswas->paginate(10), 'prd'=>$prodis ]);
    }



    public function dosen(){
        $dosen=Dosen::latest()->paginate(10);
        $prodis=Prodi::latest()->paginate(10);
        return view('layouts.dosen',['dsn'=>$dosen]);
    }

    public function prodi(){
        $prodis=Prodi::latest()->paginate(10);
        return view('layouts.prodi',['prd'=>$prodis]);
    }

    public function user(){
        $users=User::latest()->paginate(10);
        return view('layouts.user',['usr'=>$users]);
    }

    public function jabatan(){
        $jabatans=Jabatan::latest()->paginate(10);
        return view('layouts.jabatan',['jbt'=>$jabatans]);
    }

}
