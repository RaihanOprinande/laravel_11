@extends('dashboard.layouts.main')

@section('content')
<h1>Detail Dosen</h1>

<div class="container">

        Kode Jabatan = {{ $jabatan->kode_jabatan }} <br>
        Nama Jabatan = {{ $jabatan->nama_jabatan }} <br>
        Keterangan = {{ $jabatan->keterangan }} <br>

        <a href="/jbt-index" class="btn btn-primary mt-5">Back</a>
</div>

@endsection
