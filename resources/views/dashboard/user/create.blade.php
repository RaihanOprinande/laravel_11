@extends('dashboard.layouts.main')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data User</h1>
  </div>

    <div class="row ">
        <div class="col-6">
            <main class="form-signin w-100 m-auto">
                <form method="POST" action="/user">
                    {{-- //csrf untuk validasi form. kalau tidak pakai csrf form tidak bsa di proses --}}
                    @csrf
                  <div class="form-floating mb-2">
                    <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" id="floatingInput" placeholder="suparjo" value="{{ old('name') }}">
                    <label for="floatingInput">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>

                  <div class="form-floating mb-2">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Password">
                    <label for="floatingPassword">Password confirm</label>
                  </div>
                  <button class="btn btn-primary w-100 py-2" type="submit">Add</button>
                  {{-- <p class="mt-5 mb-3 text-body-secondary text-center">&copy; 2017–2024</p> --}}
                </form>
              </main>
        </div>
    </div>

@endsection
