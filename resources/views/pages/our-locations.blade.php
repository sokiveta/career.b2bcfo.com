@extends('components.layout')

@section('content')

<div class="text-center mb-4">
    <h2 class="text-6xl font-montserrat font-medium">Our Locations</h2>
</div>

<div class="flex flex-wrap mx-auto max-w-screen-xl">

  <div class="p-6">

    <p class="text-xl">The map below shows the major US markets in which we currently have Partners. We are looking to add experienced Strategic Business Advisors in all US cities.</p>

	  <img src="{{asset('images/Partner-Map-1920w.png')}}" class="img-fluid" alt="Map" />

  </div>

</div>

@endsection