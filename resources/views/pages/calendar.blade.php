@extends('components.layout')

@section('content')

<div class="flex flex-wrap mx-auto max-w-screen-xl">

  <div class="lg:w-4/12 p-6">

    <h3 class="text-3xl">Denise Smith</h3>

    {{-- <img src="https://career.b2bcfo.com/images/denise.jpg" alt="Denise" /> --}}

    Denise Smith
    Business Development Manager

    denisesmith@b2bcfo.com
    (480) 397-0592 Office
    
  </div>

  <div class="lg:w-8/12 px-8 py-6 mb-8">

    <h3 class="text-3xl mt-0">Schedule a phone call with Denise</h3>

    <p>First, enter in your name, email address, and phone number, then select a time to speak with Denise.</p>

    <p>Step 1: Enter your contact information</p>

    <form action="">
      <input type="text" name="firstlast" />
      <input type="text" name="email" />
      <input type="text" name="phone" />
      <button>View Denise's Calendar</button>
    </form>
  
  </div>

</div>

@endsection