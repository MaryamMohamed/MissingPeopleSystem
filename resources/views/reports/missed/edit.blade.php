@extends('layouts.app')
<title>Edit Missing</title>
@section('content')
@include('layouts.message-block')

    <!-- ======= Contact Section ======= -->
    <section id="register" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Edit Missing Report</h2>
        </div>

        <div class="row">

        <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i>1</i>
                <h4>Basic Information:</h4>
              </div>

              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>

              <div class="email">
                <i>2</i>
                <h4>Aditional Information:</h4>
              </div>

              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              
              <div class="phone">
                <i>3</i>
                <h4>Details:</h4>
              </div>

              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
              <div class="email">
                <h4></h4>
              </div>
            </div>

          </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form method="POST" action="{{ route('reports.missed.update', $report->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <hr/>
                    <div class="form-group row">
                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="full_name" id="full_name"  value="{{ $report->full_name }}"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="father_name" class="col-md-4 col-form-label text-md-right">Father Name</label>
                        <div class="col-md-6">
                            <input id="father_name" type="text" class="form-control" name="father_name" value="{{  $report->father_name }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mother_name" class="col-md-4 col-form-label text-md-right">Mother Name</label>

                        <div class="col-md-6">
                            <input id="mother_name" type="text" class="form-control" name="mother_name" value="{{  $report->mother_name }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gander" class="col-md-4 col-form-label text-md-right">{{ __('Gander') }}</label>

                        <div class="col-md-6">
                            <select id="gander" type="text" class="form-control" name="gander" value="{{  $report->gander }}">
                                <option value="{{  $report->gander }}">{{  $report->gander }}</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                        <div class="col-md-6">
                            <input id="age" type="integer" class="form-control " name="age" value="{{  $report->age }}" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="body_color" class="col-md-4 col-form-label text-md-right">{{ __('Body Color') }}</label>

                        <div class="col-md-6">
                            <select id="body_color" type="text" class="form-control" name="body_color" value="{{  $report->body_color }}">
                                <option value="{{  $report->body_color }}">{{  $report->body_color }}</option>
                                <option value="light">Light</option>
                                <option value="medium">Medium</option>
                                <option value="dark">Dark</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="eye_color" class="col-md-4 col-form-label text-md-right">{{ __('Eye Color') }}</label>

                        <div class="col-md-6">
                            <select id="eye_color" type="text" class="form-control" name="eye_color" value="{{  $report->eye_color }}">
                            
                                <option value="{{  $report->eye_color }}">{{  $report->eye_color }}</option>
                                <option value="black">black</option>
                                <option value="blue">blue</option>
                                <option value="brown">brown</option>
                                <option value="green">green</option>
                                <option value="hazal">hazal</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hair_color" class="col-md-4 col-form-label text-md-right">{{ __('Hair Color') }}</label>

                        <div class="col-md-6">
                            <select id="hair_color" type="text" class="form-control" name="hair_color" required value="{{  $report->hair_color }}" >
                                <option value="{{  $report->hair_color }}">{{  $report->hair_color }}</option>
                                <option value="black">black</option>
                                <option value="blond">blond</option>
                                <option value="brown">brown</option>
                                <option value="gray-white">gray/white</option>
                                <option value="hairless">hairless</option>
                                <option value="hijabi">hijabi</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="length" class="col-md-4 col-form-label text-md-right">{{ __('Height') }}</label>

                        <div class="col-md-6">
                            <input id="length" type="number" class="form-control" name="length" value="{{  $report->length }}"/>
                        </div>
                    </div>

                    <hr/>

                    <div class="form-group row">
                        <label for="special_characterstics" class="col-md-4 col-form-label text-md-right">{{ __('Special Characterstics') }}</label>

                        <div class="col-md-6">
                            <textarea id="special_characterstics" type="text" class="form-control" name="special_characterstics" value="" style="margin-top: 0px; margin-bottom: 0px; height: 100px;">{{  $report->special_characterstics }}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Person Picture') }}</label>

                        <div class="col-md-6">
                            <input type="file" id="photo" name="photo">
                        </div>
                    </div>
                    <hr/>

                    <div class="form-group row">
                        <label for="date_of_found" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Found') }}</label>

                        <div class="col-md-6">
                            <input id="date_of_found" type="date" class="form-control" name="date_of_found" value="{{  $report->date_of_found }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                        <div class="col-md-6">
                            <select id="country" type="text" class="form-control" name="country" required value="{{  $report->country }}">
                                <option value="{{  $report->country }}">{{  $report->country }}</option>
                                <option value="Alexandria">Alexandria</option>
                                <option value="Arish">Arish</option>
                                <option value="Aswan">Aswan</option>
                                <option value="Asyut">Asyut</option>
                                <option value="Beheira">Beheira</option>
                                <option value="Beni Suef">Beni Suef</option>
                                <option value="Cairo">Cairo</option>
                                <option value="Dakahlia">Dakahlia</option>
                                <option value="Damietta">Damietta</option>
                                <option value="Faiyum">Faiyum</option>
                                <option value="Gharbia">Gharbia</option>
                                <option value="Giza">Giza</option>
                                <option value="Ismailia">Ismailia</option>
                                <option value="Kafr El Sheikh">Kafr El Sheikh</option>
                                <option value="Luxor">Luxor</option>
                                <option value="Matruh">Matruh</option>
                                <option value="Minya">Minya</option>
                                <option value="Monufia">Monufia</option>
                                <option value="New Valley">New Valley</option>
                                <option value="North Sinai">North Sinai</option>
                                <option value="Port Said">Port Said</option>
                                <option value="Qalyubia">Qalyubia</option>
                                <option value="Qena">Qena</option>
                                <option value="Red Sea">Red Sea</option>
                                <option value="Sharqia">Sharqia</option>
                                <option value="Sohag">Sohag</option>
                                <option value="South Sinai">South Sinai</option>
                                <option value="Suez">Suez</option>                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

                        <div class="col-md-6">
                            <input id="street" type="text" class="form-control" name="street" value="{{  $report->street }}" required autocomplete="street">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="accident" class="col-md-4 col-form-label text-md-right">{{ __('Accident') }}</label>

                        <div class="col-md-6">
                            <textarea id="accident" type="text" class="form-control" name="accident" value="" required style="margin-top: 0px; margin-bottom: 0px; height: 110px;">{{  $report->accident }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="current_place" class="col-md-4 col-form-label text-md-right">{{ __('Current Place') }}</label>

                        <div class="col-md-6">
                            <input id="current_place" type="text" class="form-control" value="{{  $report->current_place }}" name="current_place" required></input>
                        </div>
                    </div>

                    <div class="form-group row">
                        <input name="report_state" value="MISSED" type="hidden">                           
                    </div>


                    
                    <div class="text-center">
                        <a href="{{ route('reports.missed.index') }}" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>

            </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection