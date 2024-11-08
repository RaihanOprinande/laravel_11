@extends('layouts.main')
@section('content')
    <h1>Daftar Mahasiswa Jurusan TI</h1>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Prodi</th>
        </tr>
@foreach ($mhs as $mahasiswa)
    <tr>
           <td>{{ $mhs->firstItem()+$loop->index }} </td>
           <td> {{ $mahasiswa-> nim }}</td>
            <td>{{ $mahasiswa-> nama }}</td>
            <td>{{ $mahasiswa-> alamat }}</td>
            <td>{{ $mahasiswa-> prodi->nama }}</td>
    </tr>
@endforeach
    </table>
    {{ $mhs->links() }}
@endsection
