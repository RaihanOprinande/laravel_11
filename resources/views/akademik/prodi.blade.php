@extends('dashboard.layouts.main')

@section('content')
<h1>Prodi</h1>
@if (session('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  @endif
  <a href="/prd-index/create" class="btn btn-primary mb-2">Add Prodi</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Action</th>

    </tr>
    @foreach ($prd as $prodi)
    <tr>
        <td>{{ $prd->firstItem()+$loop->index }} </td>
        <td> {{ $prodi-> nama }}</td>
        <td>
            <a href="/prd-index/{{ $prodi->id }}/edit" class="btn btn-warning btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>

            <form action="/prd-index/{{ $prodi->id }}" method="post" class="d-inline">
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
{{ $prd->links() }}
@endsection

