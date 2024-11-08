@extends('dashboard.layouts.main')

@section('content')
<h1>Detail Dosen</h1>

<div class="container">

        nik = {{ $Dosen->nik }} <br>
        Nama = {{ $Dosen->nama }} <br>
        No Telp = {{ $Dosen->no_telp }} <br>
        Email = {{ $Dosen->email }} <br>
        Prodi = {{ $Dosen->prodi->nama }} <br>
        Prodi = {{ $Dosen->jabatan->nama_jabatan }} <br>
        Alamat = {{ $Dosen->alamat }} <br>


        <a href="/dsn-index" class="btn btn-primary mt-5">Back</a>
</div>

@endsection
