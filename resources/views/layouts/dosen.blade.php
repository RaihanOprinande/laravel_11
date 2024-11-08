@extends('layouts.main')
@section('content')
    <h1>Daftar Dosen Jurusan TI</h1>
    {{-- <a href="/dsn-index/create" class="btn btn-primary my-3">Add Dosen</a> --}}
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>No Telphone</th>
            <th>Prodi</th>
            {{-- <th>Action</th> --}}
        </tr>
@foreach ($dsn as $dosen)
    <tr>
           <td>{{ $dsn->firstItem()+$loop->index }} </td>
           <td> {{ $dosen-> nik }}</td>
            <td>{{ $dosen-> nama }}</td>
            <td>{{ $dosen-> no_telp }}</td>
            <td>{{ $dosen-> prodi->nama }}</td>
            {{-- <td>
                <a href="/dsn-index/{{ $dosen->id }}/edit" class="btn btn-warning btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>

            </td> --}}
    </tr>
@endforeach
    </table>
    {{ $dsn->links() }}
@endsection
