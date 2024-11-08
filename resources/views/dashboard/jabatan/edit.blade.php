@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data Dosen</h1>
  </div>

  <div class="row">
    <div class="col-6">


<form action="/jbt-index/{{ $jabatans->id }}" method="post">
    @method('PUT')

    @csrf
    <div class="mb-3">
        <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
        <input type="text" class="form-control @error('kode_jabatan') is-invalid @enderror" name="kode_jabatan" id="kode_jabatan" value="{{ old('kode_jabatan',$jabatans->kode_jabatan) }}"readonly>
        @error('kode_jabatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
        <input type="text" class="form-control  @error('nama_jabatan') is-invalid @enderror" name="nama_jabatan" id="nama_jabatan" value="{{ old('nama_jabatan', $jabatans->nama_jabatan) }}">
        @error('nama_jabatan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
      </div>
      <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control  @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" value="{{ old('keterangan',$jabatans->keterangan) }}">
        @error('keterangan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
      </div>

      <div class="mb-3">
        <input type="submit" class="btn btn-primary" name="submit">
      </div>
</form>
</div>
</div>
@endsection
