@extends('dashboard.layouts.main')

@section('content')
<h1>Detail Mahasiswa</h1>

<div class="container">


        Nama = {{ $user->name }} <br>
        Email = {{ $user->email }} <br>


        <a href="/user" class="btn btn-primary mt-5">Back</a>
</div>

@endsection
