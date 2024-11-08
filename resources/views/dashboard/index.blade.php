@extends('dashboard.layouts.main')
@section('content')
    <h1 class="text-center">Hewwo {{ Auth::user()->name }} :3</h1>
    {{-- <h1 class="text-center">Hewwo :3</h1> --}}
@endsection
