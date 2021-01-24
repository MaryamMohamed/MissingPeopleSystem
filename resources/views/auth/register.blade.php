@extends('layouts.app')
<title>Register</title>
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="register" class="register section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Sign Up</h2>
        </div>

        <div class="row">

            <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">              
                <div class="phone">
                <h2>Welcome</h2>
                <br>
                <h4>Lets create a new account and start now.</h4>
                </div>
            </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form method="POST" action="{{ route('register') }}" data-aos="fade-left">
                    @csrf
                        
                    <div class="form-group">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="User Name"  data-rule="required" data-msg="Please enter a valid emailuser name" value="{{ old('name') }}"/>
                        <div class="validate"></div>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Your Name" data-rule="required" data-msg="Please enter your name" value="{{ old('name') }}"/>
                        <div class="validate"></div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">

                        <input type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:10" data-msg="phone number should be 10 difits" value="{{ old('phone') }}" />
                        <div class="validate"></div>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" value="{{ old('email') }}" />
                        <div class="validate"></div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Your Password" data-rule="required" data-msg="Please enter a valid Password" />
                        <div class="validate"></div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" data-rule="required" data-msg="Please enter a valid Password" />
                        <div class="validate"></div>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="sign-btn">sign Up</button>
                    </div>
                </form>

            </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection