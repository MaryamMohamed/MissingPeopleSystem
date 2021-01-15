@extends('layouts.app')

@section('content')
@include('layouts.message-block')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="row">
            <form action="/people-found/search" method="get">
                <div class="input-group row">
                        <div class="form-group col">
                            <label for="full_name" class="">{{ __('name') }}</label>
                            <input type="search" name="name" class="form-control">                
                        </div>
                        
                        <div class="form-group col">
                            <label for="age" class="">{{ __('age') }}</label>
                            <input type="search" name="age" class="form-control">                
                        </div>
                        <div class="form-group col">
                            <label for="date_of_found" class="">{{ __('date of found') }}</label>
                            <input type="search" name="date_of_found" class="form-control">                
                        </div>
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">search</button>
                        </span>
                </div>
            </form>
        </div>
        <a href="{{ route('reports.create') }}" class="btn btn-primary">Add New</a>
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">All Founded Person Reports</h4>
            </div>
            <div class="card-content table-responsive">
                <table id="table" class="table"  cellspacing="0" width="100%">
                    <thead class="text-primary">
                    <th>NO.</th>
                    <th>@sortablelink('full_name')</th>
                    <th>@sortablelink('age')</th>
                    <th>@sortablelink('gander')</th>
                    <th>@sortablelink('date_of_found')</th>
                    <th>state</th>
                    @auth
                    <th>Action</th>
                    @endauth
                    </thead>
                    <tbody>
                        @foreach($reports as $key=>$report)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $report->full_name }}</td>
                                <td>{{ $report->age }}</td>
                                <td>{{ $report->gander }}</td>
                                <td>{{ $report->date_of_found }}</td>
                                <td>{{ $report->report_state }}</td>
                                @if(Auth::user() == $report->user)
                                <td>
                                    <a href="{{ route('reports.edit',$report->id) }}" class="btn btn-info btn-sm"><i class="material-icons">Edit</i></a>

                                    <form id="delete-form-{{ $report->id }}" action="{{ route('reports.destroy',$report->id) }}" style="display: none;" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $report->id }}').submit();
                                    }else {
                                        event.preventDefault();
                                            }"><i class="material-icons">delete</i></button>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $reports->appends(\Request::except('page'))->render() !!}
            </div>
        </div>

        
            
        </div>
    </div>
</div>

@endsection
