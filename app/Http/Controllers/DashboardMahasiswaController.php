<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Prodi;


class DashboardMahasiswaController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
}
