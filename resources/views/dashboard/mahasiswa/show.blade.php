@extends('dashboard.layouts.main')

@section('content')
<h1>Detail Mahasiswa</h1>

<div class="container">

        nim = {{ $mahasiswa->nim }} <br>
        Nama = {{ $mahasiswa->nama }} <br>
        Tempat Lahir = {{ $mahasiswa->tempat_lahir }} <br>
        Tanggal Lahir = {{ $mahasiswa->tgl_lahir }} <br>
        Email = {{ $mahasiswa->email }} <br>
        Prodi = {{ $mahasiswa->prodi->nama }} <br>
        Alamat = {{ $mahasiswa->alamat }} <br>


        <a href="/mhs-index" class="btn btn-primary mt-5">Back</a>
</div>

@endsection
