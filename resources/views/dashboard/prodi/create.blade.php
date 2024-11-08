@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data Dosen</h1>
  </div>

  <div class="row">
    <div class="col-6">


<form action="/prd-index" method="post">
    @csrf
    <div class="mb-3">
        <label for="nama_lengkap" class="form-label">Prodi</label>
        <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}">
        @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
      </div>

        <input type="submit" class="btn btn-primary" name="submit">
      </div>
</form>
</div>
</div>
@endsection