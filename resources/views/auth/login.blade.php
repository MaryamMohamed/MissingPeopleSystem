<title>Login</title>

@extends('layouts.app')

@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="login" class="login section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Sign In</h2>
        </div>

        <div class="row">

            <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">              
                <div class="phone">
                <h2>Welcome Back</h2>
                <br>
                <h4>Lets sign in to your account now.</h4>
                </div>
            </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form method="POST" action="{{ route('login') }}" data-aos="fade-left">
                    @csrf
                        
                    
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" data-rule="required" data-msg="Please enter a valid Password" />
                        <div class="validate"></div>
                    </div>

                    
                    <div class="text-center ">
                        <button type="submit" class="sign-btn">sign In</button>
                        @if (Route::has('password.request'))
                            <a class="btn " href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                        @endif
                    </div>
                </form>

            </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection