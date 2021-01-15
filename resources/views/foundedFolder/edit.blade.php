@extends('layouts.app')

@section('content')
@include('layouts.message-block')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit The Report') }}</div>

                <div class="card-body">
                    <form method = "POST" action="{{ $report->path() }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>

                            <div class="col-md-6">
                                <input id="full_name" type="text" class="form-control" name="full_name" value="{{ $report->full_name }}" autocomplete="full_name" autofocus>

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="father_name" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

                            <div class="col-md-6">
                                <input id="father_name" type="text" class="form-control" name="father_name" value="{{ $report->father_name }}" autocomplete="father_name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mother_name" class="col-md-4 col-form-label text-md-right">{{ __('Mother Name') }}</label>

                            <div class="col-md-6">
                                <input id="mother_name" type="text" class="form-control" name="mother_name" value="{{ $report->mother_name }}" autocomplete="mother_name">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="integer" class="form-control " name="age" value="{{ $report->age }}" required autocomplete="age">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gander" class="col-md-4 col-form-label text-md-right">{{ __('Gander') }}</label>

                            <div class="col-md-6">
                                <input id="gander" type="text" class="form-control" name="gander" value="{{ $report->gander }}" required autocomplete="gander">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body_color" class="col-md-4 col-form-label text-md-right">{{ __('Body Color') }}</label>

                            <div class="col-md-6">
                                <input id="body_color" type="text" class="form-control" name="body_color" value="{{ $report->body_color }}" required autocomplete="body_color">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="eye_color" class="col-md-4 col-form-label text-md-right">{{ __('Eye Color') }}</label>

                            <div class="col-md-6">
                                <input id="eye_color" type="text" class="form-control" name="eye_color" value="{{ $report->eye_color }}" required autocomplete="eye_color">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hair_color" class="col-md-4 col-form-label text-md-right">{{ __('Hair Color') }}</label>

                            <div class="col-md-6">
                                <input id="hair_color" type="text" class="form-control" name="hair_color" value="{{ $report->hair_color }}" required autocomplete="hair_color">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="length" class="col-md-4 col-form-label text-md-right">{{ __('Length') }}</label>

                            <div class="col-md-6">
                                <input id="length" type="text" class="form-control" name="length" value="{{ $report->length }}" autocomplete="length">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="special_characterstics" class="col-md-4 col-form-label text-md-right">{{ __('Special Characterstics') }}</label>

                            <div class="col-md-6">
                                <input id="special_characterstics" type="text" class="form-control" name="special_characterstics" value="{{ $report->special_characterstics }}" autocomplete="special_characterstics">
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="date_of_found" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Found') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_found" type="date" class="form-control" name="date_of_found" value="{{ $report->date_of_found }}" required autocomplete="date_of_found">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ $report->country }}" required autocomplete="country">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

                            <div class="col-md-6">
                                <input id="street" type="text" class="form-control" name="street" value="{{ $report->street }}" required autocomplete="street">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="accident" class="col-md-4 col-form-label text-md-right">{{ __('Accident') }}</label>

                            <div class="col-md-6">
                                <input id="accident" type="text" class="form-control" name="accident" value="{{ $report->accident }}" required autocomplete="accident">
                            </div>
                        </div>

                        <div class="form-group row">
                            <input name="state" value="FOUNDED" type="hidden">                           
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Report') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection