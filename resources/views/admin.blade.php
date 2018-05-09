@extends('layout.master')

@section('content')
  <section class="ftco-cover" style="background-image: url({{asset('images/bg_3.jpg')}});" id="section-home">
    <div class="container">
      <div class="pt-5 pb-5 row align-items-center justify-content-center text-center ">
        <div class="mt-5 col-md-12">
          <h1 class="ftco-heading ftco-animate mb-3">Admin panel page</h1>
          <h2 class="h5 ftco-subheading mb-5 ftco-animate">Administration stuff</h2>
          {{-- <p><a href="void(0)" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p> --}}
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->
  <div class="pl-5 pr-5 pt-2 pb-2">
    <a class="btn pr-5 pl-5  btn-primary" href="{{ route('dishes.create') }}"> Create New Dish</a>

  </div>
@endsection
