@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile Page') }}</div>

                <div class="card-body">
                    

                    <div class="flex justify-between items-center">
                    @if (Route::has('login'))

                        @auth
                        <!-- <td>
                            <img src="{{$user->avatar}}" width="200" height="200" />
                        </td> -->
                        
                        <div>
                            <h2 class="font-bold text-2xl mb-2"> {{ $user->name}} </h2>
                            <p class="text-sm"> Since: {{ $user->created_at->diffForHumans() }} </p>
                            <p class="text-sm"> E-mail: {{ $user->email }} </p>
                            <p class="text-sm"> Phone Number: 0{{ $user->phone }} </p>
                        </div>
                        @if (auth()->user()->is($user))
                        <div>                            
                            <a href="{{ $user->path('edit') }}" class="rounded-lg shadow py-2 px-3 text-black"> Edit Profile </a>                           
                        </div>
                        @endif
                        @else
                        <div>
                            <h2 class="font-bold text-2xl mb-2"> {{ $user->name}} </h2>
                            <p class="text-sm"> Since: {{ $user->created_at->diffForHumans() }} </p>
                            <p class="text-sm"> E-mail: {{ $user->email }} </p>
                            <p class="text-sm"> Phone Number: {{ $user->phone }} </p>
                        </div>
                        @endif
                    @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
