@extends('dashboard.layouts.main')
@section('content')
    <h1>Daftar Mahasiswa Jurusan TI</h1>

    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      @endif
<a href="/mhs-index/create" class="btn btn-primary mb-2">Add Mahasiswa</a>
<a href="/cetak-pdf" class="btn btn-success mb-2">Cetak PDF</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
@foreach ($mhs as $mahasiswa)
    <tr>
           <td>{{ $mhs->firstItem()+$loop->index }} </td>
           <td> {{ $mahasiswa-> nim }}</td>
            <td>{{ $mahasiswa-> nama }}</td>
            <td>{{ $mahasiswa-> alamat }}</td>
            <td>{{ $mahasiswa-> prodi->nama }}</td>
            <td class="text-nowrap">
                <a href="/mhs-index/{{ $mahasiswa->id }}"  class="btn-success btn btn-sm" title="Detail" ><i class="bi bi-eye"></i></a>

                <a href="/mhs-index/{{ $mahasiswa->id }}/edit" class="btn btn-warning btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>

            <form action="/mhs-index/{{ $mahasiswa->id }}" method="post" class="d-inline">
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
    {{ $mhs->links() }}
@endsection
