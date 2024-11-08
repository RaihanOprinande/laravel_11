@extends('dashboard.layouts.main')

@section('content')
<a href="{{ url('/dsn-index') }}">
    <h1 class="">Daftar Dosen Jurusan TI</h1>
</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nik</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No Telphone</th>
        <th>Prodi</th>
        <th>Alamat</th>
    </tr>
@foreach ($dsn as $dosen)
<tr>
       <td>{{ $dsn->firstItem()+$loop->index }} </td>
       <td> {{ $dosen-> nik }}</td>
        <td>{{ $dosen-> nama }}</td>
        <td>{{ $dosen-> email }}</td>
        <td>{{ $dosen-> no_telp }}</td>
        <td>{{ $dosen-> prodi_id }}</td>
        <td>{{ $dosen-> alamat }}</td>
</tr>
@endforeach
</table>
{{ $dsn->links() }}
<a href="{{ url('mhs-index') }}">
    <h1>Daftar Mahasiswa Jurusan TI</h1>
</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Alamat</th>
    </tr>
@foreach ($mhs as $mahasiswa)
<tr>
       <td>{{ $mhs->firstItem()+$loop->index }} </td>
       <td> {{ $mahasiswa-> nim }}</td>
        <td>{{ $mahasiswa-> nama }}</td>
        <td>{{ $mahasiswa-> alamat }}</td>
</tr>
@endforeach
</table>
{{ $mhs->links() }}

<a href="{{ url('prd-index') }}">
    <h1>Prodi</h1>
</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>
    @foreach ($prd as $prodi)
    <tr>
        <td>{{ $prd->firstItem()+$loop->index }} </td>
           <td> {{ $prodi-> nama }}</td>

    </tr>
    @endforeach
</table>
{{ $prd->links() }}
@endsection
