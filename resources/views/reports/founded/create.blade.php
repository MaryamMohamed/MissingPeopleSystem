@extends('layouts.app')

@section('content')
@include('layouts.message-block')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" color="purple">
                    <h4 class="title">Add New Report</h4>
                </div>
                <div class="card-content">
                    <form method="POST" action="{{ route('reports.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>

                                    <div class="col-md-6">
                                        <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" autocomplete="full_name" autofocus>

                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <label for="father_name" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="father_name" type="text" class="form-control" name="father_name" value="{{ old('father_name') }}" autocomplete="father_name" autofocus>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mother_name" class="col-md-4 col-form-label text-md-right">{{ __('Mother Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="mother_name" type="text" class="form-control" name="mother_name" value="{{ old('mother_name') }}" autocomplete="mother_name">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gander" class="col-md-4 col-form-label text-md-right">{{ __('Gander') }}</label>

                                    <div class="col-md-6">
                                        <input id="gander" type="text" class="form-control" name="gander" value="{{ old('gander') }}" required autocomplete="gander">
                                    </div>
                                </div>                               

                                <div class="form-group row">
                                    <label for="body_color" class="col-md-4 col-form-label text-md-right">{{ __('Body Color') }}</label>

                                    <div class="col-md-6">
                                        <input id="body_color" type="text" class="form-control" name="body_color" value="{{ old('body_color') }}" required autocomplete="body_color">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="eye_color" class="col-md-4 col-form-label text-md-right">{{ __('Eye Color') }}</label>

                                    <div class="col-md-6">
                                        <input id="eye_color" type="text" class="form-control" name="eye_color" value="{{ old('eye_color') }}" required autocomplete="eye_color">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="hair_color" class="col-md-4 col-form-label text-md-right">{{ __('Hair Color') }}</label>

                                    <div class="col-md-6">
                                        <input id="hair_color" type="text" class="form-control" name="hair_color" value="{{ old('hair_color') }}" required autocomplete="hair_color">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="special_characterstics" class="col-md-4 col-form-label text-md-right">{{ __('Special Characterstics') }}</label>

                                    <div class="col-md-6">
                                        <input id="special_characterstics" type="text" class="form-control" name="special_characterstics" value="{{ old('special_characterstics') }}" autocomplete="special_characterstics">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="length" class="col-md-4 col-form-label text-md-right">{{ __('Length') }}</label>

                                    <div class="col-md-6">
                                        <input id="length" type="text" class="form-control" name="length" value="{{ old('length') }}" autocomplete="length">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                    <div class="col-md-6">
                                        <input id="age" type="integer" class="form-control " name="age" value="{{ old('age') }}" required autocomplete="age">

                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="date_of_found" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Found') }}</label>

                                    <div class="col-md-6">
                                        <input id="date_of_found" type="date" class="form-control" name="date_of_found" value="{{ old('date_of_found') }}" required autocomplete="date_of_found">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('country') }}</label>

                                    <div class="col-md-6">
                                        <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required autocomplete="country">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

                                    <div class="col-md-6">
                                        <input id="street" type="text" class="form-control" name="street" value="{{ old('street') }}" required autocomplete="street">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="accident" class="col-md-4 col-form-label text-md-right">{{ __('Accident') }}</label>

                                    <div class="col-md-6">
                                        <input id="accident" type="text" class="form-control" name="accident" value="{{ old('accident') }}" required autocomplete="accident">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <input name="report_state" value="FOUNDED" type="hidden">                           
                                </div>

                                <a href="{{ route('reports.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
