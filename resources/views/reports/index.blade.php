@extends('layouts.app')

@section('content')
@include('layouts.message-block')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs" data-aos="fade-up">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Case Details</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Case Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details" data-aos="fade-up" data-aos-delay="100">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{ 'images/' . $report->photo }}" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>{{ $report->full_name }} Basic information</h3>
            <ul>
              <li><strong>Name</strong>: {{ $report->full_name }}</li>
              <li><strong>Father Name</strong>: {{  $report->father_name }}</li>
              <li><strong>Mother Name</strong>: {{  $report->mother_name }}</li>
              <li><strong>Gender</strong>: {{  $report->gander }}</li>
              <li><strong>Age</strong>: {{  $report->age }}</li>
              <li><strong>Body Color</strong>: {{  $report->body_color }}</li>
              <li><strong>Eye Color</strong>: {{  $report->eye_color }}</li>
              <li><strong>Haie Color</strong>: {{  $report->hair_color }}</li>
              <li><strong>Height</strong>: {{  $report->length }}</li>
              <li><strong>Special Characterstics</strong>: {{  $report->special_characterstics }}</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Last Seen</h2>
          <li><strong>Date</strong>: {{  $report->date_of_found }}</li>
          <li><strong>City</strong>: {{  $report->country }}</li>
          <li><strong>Street</strong>: {{  $report->street }}</li>
          <li><strong>Accident Details</strong>: {{  $report->accident }}</li>
        </div>

        <div class="portfolio-description">
          <h2>Report Details</h2>
          <li><strong>Auther</strong>: {{  $report->user->name }}</li>
          <li><strong>Date of Report</strong>: {{  $report->created_at }}</li>
          <li><strong>Contact Phone</strong>: 0{{  $report->user->phone }}</li>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->@endsection
