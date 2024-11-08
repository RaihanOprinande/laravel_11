@extends('layouts.main')

@section('content')


<h1>Users</h1>

{{-- <a href="/user/create" class="btn btn-primary mb-2">Add User</a> --}}

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        {{-- <th>Action</th> --}}
    </tr>
    @foreach ($usr as $user)
    <tr>
        <td>{{ $usr->firstItem()+$loop->index }} </td>
           <td> {{ $user-> name }}</td>
           <td> {{ $user-> email }}</td>
           {{-- <td class="text-nowrap">

                <a href="/user/{{ $user->id }}"  class="btn-success btn btn-sm" title="Detail" ><i class="bi bi-eye"></i></a>

                <a href="/user/{{ $user->id }}/edit" class="btn btn-warning btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>

                <form action="/user/{{ $user->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Yaaaqqqueeennn?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
           </td> --}}

    </tr>
    @endforeach
</table>
{{ $usr->links() }}
@endsection

