    @extends('frontend.master')

    @section('title')
    Log In | SEO Content
    @endsection

    @section('content')
    <main class="section-login">
      <section class="section-login--logo">
        <a href="index.html">
          <img src="{{asset('/')}}frontend/assets/images/logo.png" alt="logo" class="img-fluid" />
        </a>
      </section>
      <section class="section-login--form">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="card">
                <div class="card-title">Sign In</div>
                <div class="card-body">

                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li class="text-center">{{ 'Email address or password is wrong' }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif

                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mt-3">
                      <label for="email" class="form-label">Email</label>
                      <input
                      type="email" class="form-control u-box-shadow-1 @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" autocomplete="email"/>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="mt-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control u-box-shadow-1 @error('password') is-invalid @enderror" name="password"/>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="mt-5">
                      <button type="submit"  class="btn btn-green">Sign In</button>
                    </div>
                  </form>
                  <div class="links">
                    <p>
                      <a href="{{route('register')}}">Need an account?</a>
                      <a href="{{ route('password.request') }}">Forgot Password?</a>
                    </p>
                  </div>
                  <div class="back-button">
                    <a href="index.html">
                      <i class="bi bi-arrow-left-circle"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    @endsection
