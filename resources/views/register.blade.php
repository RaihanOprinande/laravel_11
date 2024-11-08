@extends('layouts.main')
@section('content')

    <div class="row justify-content-center">
        <div class="col-6">
            <main class="form-signin w-100 m-auto">
                <form method="POST" action="/register">
                    {{-- //csrf untuk validasi form. kalau tidak pakai csrf form tidak bsa di proses --}}
                    @csrf
                  <h1 class="h3 mb-5 fw-normal text-center">Please sign up</h1>

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
                    <input type="password" class="form-control @error('password') is-invalid
                    @enderror" id="floatingPassword" name="password" placeholder="Password" value="{{ old('password') }}">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>

                  <div class="form-floating mb-2">
                    <input type="password" class="form-control @error('password') is-invalid
                    @enderror" id="password-confirm" name="password_confirmation" placeholder="Password" value="{{ old('password') }}">
                    <label for="floatingPassword">Password confirm</label>
                    @error('password')
                    {{ $message }}
                    @enderror
                  </div>

                  <img src="{{ captcha_src() }}" alt="captcha">
                  <div class="mt-2"></div>
                  <input
                      type="text" name="captcha" class="form-control @error('captcha') is-invalid @enderror" placeholder="Please Insert Captch"
                      >
                   @error('captcha')
                   <div class="invalid-feedback">{{ $message }}</div> @enderror

                  <p>haven an account? <a href="/login">Login</a></p>
                  <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
                  {{-- <p class="mt-5 mb-3 text-body-secondary text-center">&copy; 2017–2024</p> --}}
                </form>
              </main>
        </div>
    </div>

@endsection
