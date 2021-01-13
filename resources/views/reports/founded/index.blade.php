@extends('layouts.app')

@section('content')
@include('layouts.message-block')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="{{ route('reports.create') }}" class="btn btn-primary">Add New</a>
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">All Reports</h4>
            </div>
            <div class="card-content table-responsive">
                <table id="table" class="table"  cellspacing="0" width="100%">
                    <thead class="text-primary">
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>date of accident</th>
                    <th>state</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($reports as $key=>$report)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $report->full_name }}</td>
                                <td>{{ $report->age }}</td>
                                <td>{{ $report->gender }}</td>
                                <td>{{ $report->date_of_found }}</td>
                                <td>{{ $report->state }}</td>
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
            </div>
        </div>

        
            
        </div>
    </div>
</div>

@endsection
