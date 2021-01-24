@extends('layouts.app')

@section('content')
@include('layouts.message-block')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Similar Reports</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <h4> Sort By </h4>
                <li data-filter="*">@sortablelink('full_name')</li>
                <li data-filter="*">@sortablelink('age')</li>
                <li data-filter="*">@sortablelink('gander')</li>
                <li data-filter="*">@sortablelink('date_of_found')</li>
                 
            </ul>
          </div>
        </div>
        
        <br/>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                
                @foreach($reports as $key=>$report)<div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $report->full_name }}</h4>
                            <p>{{ $report->accident }}</p>
                            <div class="portfolio-links">
                            <a href="assets/img/team/team-4.jpg" data-gall="portfolioGallery" class="venobox" title="{{ $report->full_name }}"><i class="bx bx-plus"></i></a>
                            <a href="{{  route('report.show',$report->id) }}" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                            @if(Auth::user() == $report->user)
                                <a href="{{  route('reports.edit',$report->id) }}" class="btn btn-success"><i class="material-icons">Edit</i></a>
                                <br/>

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
                            @endif
                        </div>
                        </div>
                    </div>
                        
                @endforeach

        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200"> {!! $reports->appends(\Request::except('page'))->render() !!} </div>
        <br/>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                
                <li>Not one of them? 
                <a href="{{  route('reports.found.createnew') }}" class="btn btn-success"><i class="material-icons">create new Founded One report</i></a>
                <a href="{{  route('reports.missed.createnew') }}" class="btn btn-success"><i class="material-icons">create new Missed One report</i></a></li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->
@endsection
