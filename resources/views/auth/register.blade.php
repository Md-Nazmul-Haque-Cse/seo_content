    @extends('frontend.master')

    @section('title')
    Sign Up | SEO Content
    @endsection

    @section('content')
    <main class="section-register">
      <section class="section-register--left">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">Benefits of joining:</h1>
            <ul class="card-text">
              <li>Over 6,000 Proven Writers</li>
              <li>Powerful Content Creation Tools</li>
              <li>Easy-to-Use Platform</li>
              <li>Fast Turnaround</li>
              <li>Pay as You Go</li>
              <li>Quality Guaranteed!</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section-register--right">
        <h2 class="heading mb-4 ">Create Your Free Account</h2>
        <p class="heading--sub mb-3 d-inline">
          High-quality content written on demand by the
          <span class="green"> web's best writers. </span>
        </p>
        <p>
          Sign up is easy and free. You don't pay anything until you're ready to
          order content.
        </p>
        <form form method="POST" action="{{ route('register') }}">
         @csrf
         <div class="mt-1">
          <label for="name" class="form-label">First Name</label>
          <input type="text" class="form-control u-box-shadow-1 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" />

          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="mt-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control u-box-shadow-1 @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" />


          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="mt-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control u-box-shadow-1 @error('password') is-invalid @enderror" name="password"
          />

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-blue">Sign Up</button>
        </div>
      </form>
      <p class="privacy-links mt-1">
        I agree to the
        <a href="#"> Terms & Conditions </a>
        and
        <a href="#"> Privacy Policy. </a>
      </p>
      <p class="login-link">
        Already have an account?
        <a href="{{route('login')}}"> Sign in </a>
      </p>
    </section>
  </main>

  @endsection