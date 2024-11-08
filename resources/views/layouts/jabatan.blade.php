@extends('layouts.main')

@section('content')
<h1>Jabatan</h1>
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
           <td> {{ $jabatan-> nama_jabatan }}</td>
           <td> {{ $jabatan-> keterangan }}</td>

    </tr>
    @endforeach
</table>
{{ $jbt->links() }}
@endsection

