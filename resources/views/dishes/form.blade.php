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
    <form method="POST" action="{{ route('dishes.store') }}" class="form-horizontal">
     @csrf
   <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
      <label for="title" class="col-md-4 control-label">Title</label>
      <div class="col-md-6">
        <input id="title" name="title" value="{{ isset($dish) ? $dish->title : old('title')}}" class="form-control" type="text">
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
      </div>
   </div>
   <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
      <label for="description" class="col-md-4 control-label">Description</label>
      <div class="col-md-6"><input id="description" name="description" value="{{isset($dish)? $dish->description : old('description')}}" class="form-control" type="text">
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
      </div>
   </div>
   <div class="form-group {{ $errors->has('image_url') ? ' has-error' : '' }}">
      <label for="image_url" class="col-md-4 control-label">Image pic</label>
      <div class="col-md-6"><input id="image_url" name="image_url" value="{{isset($dish)? $dish->image_url : old('image_url')}}" class="form-control" type="text">
        @if ($errors->has('image_url'))
            <span class="help-block">
                <strong>{{ $errors->first('image_url') }}</strong>
            </span>
        @endif
      </div>
   </div>
   <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
      <label for="price" class="col-md-4 control-label">Price</label>
      <div class="col-md-6"><input id="price" step="0.01" name="price" value="{{isset($dish) ? $dish->price : old('price')}}" class="form-control" type="number">
        @if ($errors->has('price'))
            <span class="help-block">
                <strong>{{ $errors->first('price') }}</strong>
            </span>
        @endif
      </div>
   </div>
   <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
      <label for="main_id" class="col-md-4 control-label">Main</label>
        <select id="main_id" class="form-control" name="main_id">
          @foreach ($mains as $main)
            <option value="{{$main->id}}">{{$main->title}}</option>
          @endforeach
        </select>
        @if ($errors->has('main_id'))
            <span class="help-block">
                <strong>{{ $errors->first('main_id') }}</strong>
            </span>
        @endif
      </div>
   </div>
   <div class="form-group">
      <div class="col-md-6 col-md-offset-4"><button type="submit" class="btn btn-primary">
         Create
         </button>
      </div>
   </div>
</form>
