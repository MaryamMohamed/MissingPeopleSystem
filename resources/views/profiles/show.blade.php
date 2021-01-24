@extends('layouts.app')
@section('content')

    <!-- ======= Testimonials Section ======= -->
    <div class="section-title " data-aos="fade-up">
        <h2></h2>
    </div>
    @if (auth()->user()->is($user))
      <div class="section-title " data-aos="fade-up">
          <h2>My Profile</h2>
      </div>
    
    @else
      <div class="section-title " data-aos="fade-up">
          <h2>Profile</h2>
      </div>
    @endif
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
      

        <div>
          <div class="testimonial-item">
            @if (Route::has('login'))
                @auth
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <!-- <td>
                    <img src="{{$user->avatar}}" width="200" height="200" />
                </td> -->
                <div>
                    <h3> {{ $user->name}} </h3>
                    <h5> Since: {{ $user->created_at->diffForHumans() }} </h5>
                    <h5> E-mail: {{ $user->email }} </h5>
                    <h5> Phone Number: 0{{ $user->phone }} </h5>
                </div>
                @if (auth()->user()->is($user))
                <div>                            
                    <a href="{{route('edit',auth()->user())}}" class="rounded-lg shadow py-2 px-3 text-black"> Edit Profile </a>                           
                </div>
                @endif
                @else
                <div>
                    <h3> {{ $user->name}} </h3>
                    <h5> Since: {{ $user->created_at->diffForHumans() }} </h5>
                    <h5> E-mail: {{ $user->email }} </h5>
                    <h5> Phone Number: {{ $user->phone }} </h5>
                </div>
                @endif
            @endif
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

@endsection
