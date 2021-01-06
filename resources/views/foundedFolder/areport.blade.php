@extends('layouts.app')

@section('content')
@include('layouts.message-block')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Report Page') }}</div>
                    
                <div class="card-body">
                <header> <h3> A REPORT</h3> </header>
                    <div>
                            <article class="report">
                                <li> Full Name: {{$report -> full_name}} </li>
                                <li> Age: {{$report -> age}} </li>
                                <li> Birth of Date: {{$report -> birth_date}} </li>
                                <li> Gender: {{$report -> gander}} </li>
                                <li> Date Of Accidint: {{$report -> date_of_found}} </li>
                                <li> State: {{$report -> state}} </li>
                                
                                <div class="authentic">
                                    @if(Auth::user() == $report->user)
                                    <a href="{{route('report.delete', ['id' => $report->id])}}"> Delete </a>
                                    <a href="{{route('report.edit', ['id' => $report->id])}}"> Edit </a>
                                    @endif
                                </div>
                            </article>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
