@extends('layout.master')

  @section('content')
    <section class="ftco-cover" style="background-image: url({{asset('images/bg_3.jpg')}});" id="section-home">
      <div class="container">
        <div class="pt-5 pb-5 row align-items-center justify-content-center text-center ">
          <div class="mt-5 col-md-12">
            <h1 class="ftco-heading ftco-animate mb-3">Show Dish</h1>
            <h2 class="h5 ftco-subheading mb-5 ftco-animate">Blade to show one dish</h2>
            {{-- <p><a href="void(0)" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <div class="pl-5 pr-5 pt-2 pb-2 text-center">
      <a class="btn btn-primary" href="{{ route('dishes.index') }}"> Back</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $dish->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $dish->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{ $dish->price }}
            </div>
        </div>
    </div>


  @endsection
