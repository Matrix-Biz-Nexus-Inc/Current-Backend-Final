@extends('layouts.app')

@section('content')
<div id="app">
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
          alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="text-center">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 185px;" alt="logo">
          <h4 class="mt-1 mb-5 pb-1">Please login to your account</h4>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
              placeholder="Enter a valid email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
            <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
              placeholder="Enter password" />
            <label class="form-label" for="password">{{ __('Password') }}</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
              <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>
                @if (Route::has('password.request'))
                    <a class="btn btn-link text-body" href="{{ route('password.request') }}">
                         {{ __('Forgot Your Password?') }}
                    </a>
                @endif
          </div>

          <div class="text-center text-lg-start mt-4 pt-2 mb-2">
            <button type="submit" class="btn btn-primary btn-lg btn-block"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">{{ __('Sign in with Email') }}
            </button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?
                <a href="{{ route('register') }}" class="link-danger">Register</a></p>
          </div>

          <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="submit">
            <i class="fab fa-google me-2"></i> Sign in with google
          </button>
          <button class="btn btn-lg btn-block btn-primary mb-5" style="background-color: #3b5998;" type="submit">
            <i class="fab fa-facebook-f me-2"></i>Sign in with facebook
          </button>
        </form>
      </div>
    </div>
  </div>
  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. All rights reserved. Matrix Biz Nexus.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
</div>
@endsection
