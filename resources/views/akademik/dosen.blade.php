@extends('dashboard.layouts.main')
@section('content')
    <h1>Daftar Dosen Jurusan TI</h1>
    <a href="/dsn-index/create" class="btn btn-primary my-3">Add Dosen</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Email</th>
            <th>Nama</th>
            <th>No Telphone</th>
            {{-- <th>Prodi</th> --}}
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
@foreach ($dsn as $dosen)
    <tr>
           <td>{{ $dsn->firstItem()+$loop->index }} </td>
           <td> {{ $dosen-> nik }}</td>
            <td>{{ $dosen-> nama }}</td>
            <td>{{ $dosen-> email }}</td>
            <td>{{ $dosen-> no_telp }}</td>
            {{-- <td>{{ $dosen-> prodi->nama }}</td> --}}
            <td>{{ $dosen-> jabatan->nama_jabatan }}</td>
            <td>{{ $dosen-> alamat }}</td>
            <td class="text-nowrap">
                <a href="/dsn-index/{{ $dosen->id }}"  class="btn-success btn btn-sm" title="Detail" ><i class="bi bi-eye"></i></a>

                <a href="/dsn-index/{{ $dosen->id }}/edit" class="btn btn-warning btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>

                <form action="/dsn-index/{{ $dosen->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Yaaaqqqueeennn?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
    </tr>
@endforeach
    </table>
    {{ $dsn->links() }}
@endsection
