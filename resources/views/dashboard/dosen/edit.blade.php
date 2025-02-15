@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data Dosen</h1>
  </div>

  <div class="row">
    <div class="col-6">


<form action="/dsn-index/{{ $dosen->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik" value="{{ old('nik',$dosen->nik)}}" readonly>
        @error('nik')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama', $dosen->nama) }}">
        @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
      </div>
      <div class="mb-3">
        <label for="nama_lengkap" class="form-label">No Telphone</label>
        <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="no_telp" id="no_telp" value="{{ old('no_telp',$dosen->no_telp) }}">
        @error('no_telp')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid

        @enderror" name="email" id="email" value="{{ old('email',$dosen->email) }}">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Prodi</label>
        <select name="prodi_id" class="form-select">
            <option value="">Pilih Prodi</option>
            @foreach ($prodis as $item)
            @if (old('prodi_id',$dosen->prodi_id) == $item->id)
            <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>

            @else

            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endif

            @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Jabatan</label>
        <select name="jabatan_id" class="form-select">
            <option value="">Pilih Jabatan</option>
            @foreach ($jabatans as $item)
            @if (old('prodi_id',$dosen->jabatan_id) == $item->id)
            <option value="{{ $item->id }}" selected>{{ $item->nama_jabatan }}</option>

            @else

            <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
            @endif

            @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control @error('alamat') is-invalid

        @enderror" id="alamat" name="alamat" rows="3"> {{ old('alamat', $dosen->alamat) }}</textarea>
        @error('alamat')
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
