@extends('layout.master')

@section('content')
  <section class="ftco-cover" style="background-image: url({{asset('images/bg_3.jpg')}});" id="section-home">
    <div class="container">
      <div class="pt-5 pb-5 row align-items-center justify-content-center text-center ">
        <div class="mt-5 col-md-12">
          <h1 class="ftco-heading ftco-animate mb-3">All dishes</h1>
          <h2 class="h5 ftco-subheading mb-5 ftco-animate">List of all dishes</h2>
          {{-- <p><a href="void(0)" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p> --}}
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->
  @if(Session::has('success'))
    <div class="alert alert-success">
      <p>{!! session('success') !!}</p>
    </div>
  @endif
  <div class="pl-5 pr-5 pt-2 pb-2 text-center">
    <a class="btn pr-5 pl-5  btn-primary" href="{{ route('dishes.create') }}"> Create New Dish</a>

  </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th width='340px'>Action</th>
        </tr>
        @foreach ($dishes as $dish)
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $dish->title }}</td>
            <td>{{ str_limit($dish->description, 200) }}</td>
            <td>{{ $dish->price }}</td>
            <td>
              <form action="{{ route('dishes.destroy',$dish->id) }}" method="POST">

              <a class="btn btn-info" href="{{ route('dishes.show',$dish->id) }}">Show</a>


              <a class="btn btn-warning" href="{{ route('dishes.edit',$dish->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $dishes->links() !!}
@endsection
