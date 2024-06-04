@extends('components.layout')

@section('content')

<div class="text-center mb-4">
    <h2 class="text-6xl font-montserrat font-medium">People &amp; Thought Leadership</h2>
</div>

<div class="flex flex-wrap mx-auto max-w-screen-xl">

  <div class="lg:w-1/2 p-6">
    <p class="text-xl">We have the highest recruiting standards in the nation. We reject more than 80% of resumes submitted. Each Partner averages 20+ years of experience and has at least seven years as a CFO or equivalent. Each Partner brings a diversity of experience and knowledge, which currently adds up to more than 6,000 cumulative years of experience. This combined experience benefits all who join our firm. <br />
    <br />
    The Partners and employees of our firm have an attitude of "giving," which is demonstrated before and after someone joins the "B2B family." We give, expecting nothing in return. We hope to recruit people with an attitude of giving and gratitude to our extensive B2B family.<br />
    <br />
    There is continuous improvement of the firm at the leadership level. We create books, software, an intranet, websites, training manuals, and marketing materials. We also license software, hire employees, hire outside experts, have four law firms and provide other services to support those in our firm. Leadership feels each Partner should be covered with at least $5MM in E&amp;O insurance to protect the family and personal assets of each owner in the company.</p>
  </div>

  <div class="lg:w-1/2 p-6">
    <img src="{{asset('images/People-1920w.jpg')}}" class="img-fluid" alt="Leadership" />
  </div>
</div>

@endsection