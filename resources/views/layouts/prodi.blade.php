@extends('layouts.main')

@section('content')
<h1>Prodi</h1>
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

