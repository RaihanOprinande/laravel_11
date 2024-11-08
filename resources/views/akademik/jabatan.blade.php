@extends('dashboard.layouts.main')
@section('content')
    <h1>Daftar Jabatan</h1>

    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      @endif
<a href="/jbt-index/create" class="btn btn-primary mb-2">Add Jabatan</a>
<a href="/cetak-jbt" class="btn btn-success mb-2">Cetak PDF</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kode Jabatan</th>
            <th>Nama Jabatan</th>
            <th>Keterangan</th>

        </tr>
@foreach ($jbt as $jabatan)
    <tr>
           <td>{{ $jbt->firstItem()+$loop->index }} </td>
           <td> {{ $jabatan-> kode_jabatan }}</td>
            <td>{{ $jabatan-> nama_jabatan }}</td>
            <td>{{ $jabatan-> keterangan }}</td>
            <td class="text-nowrap">
                <a href="/jbt-index/{{ $jabatan->id }}"  class="btn-success btn btn-sm" title="Detail" ><i class="bi bi-eye"></i></a>

                <a href="/jbt-index/{{ $jabatan->id }}/edit" class="btn btn-warning btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>

            <form action="/jbt-index/{{ $jabatan->id }}" method="post" class="d-inline">
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
    {{ $jbt->links() }}
@endsection
