@extends('components.layout')

@section('content')

@include('partials._hero')

<div class="flex flex-wrap mx-auto max-w-screen-xl">

  <div class="lg:w-7/12 p-6">

    <h3 class="text-2xl my-6">Tired of looking for another CFO job? Have you ever wanted to own your own business or increase your income? Would you like support to achieve your goals? B2B CFO® already does that for hundreds of CFOs and we want to help you too!</h3>
    
    <ul class="list-inside list-disc pl-8 pb-6 text-zinc-600 text-lg font-medium">
      <li class="pb-2"> We will provide you with the knowledge, tools, and processes to be able to grow your own practice.</li>
      <li class="pb-2"> You will receive all of our proven tools, processes, and support at a fraction of the cost of starting on your own.</li>
      <li class="pb-2"> You will learn how to regularly earn additional six figure checks, by helping business owners sell their business.</li>
      <li class="pb-2"> Successful applicants will have the opportunity to work side by side with our most successful B2B CFO® partners. These B2B CFO® partners regularly earn six figure incomes using our proprietary tools and processes.</li>
      <li class="pb-2"> Whenever needed, you will have a network of over 120 CFOs to call on. Each has an average of 20 years of experience and wants to help you succeed.</li>
      <li class="pb-2"> What you'll learn is invaluable (it's also 100% included in your membership of our firm).</li>
    </ul>

    <div class="mx-8 mb-8">
      <img src="https://career.b2bcfo.com/images/phile.jpg" alt="Phil" class="float-left mr-2" /> 
      <p>This is the best group of [B2B CFO®] partners I have ever seen. Everyone in the firm is willing to help everyone. It's one of our key values.<br />
      <br />
      Phil E. - B2B CFO® Partner</p>
    </div>

    <div class="mx-8 mb-8">
      <img src="https://career.b2bcfo.com/images/richardf.jpg" alt="Richard" class="float-right ml-2" />
      After being a part of B2B CFO® for only three months, I already had three clients. All because I followed the process.<br />
      <br />
      Richard F. - B2B CFO® Partner</p>
    </div>

  </div>
  
  <div class="lg:w-5/12 p-8">

    <div class="bg-white rounded" style="border: 1px solid #35434e;">
    <h3 class="text-white text-center text-2xl p-2 mb-2" style="background-color: #35434e;">Submit Your Resume</h3>
      <form class="p-2 gray-800" enctype="multipart/form-data" method="post">
        @csrf
        <input name="jokename" tabindex="1" class="b2bcfo" type="hidden" />

        <input type="text" name="firstname" placeholder="First Name" class="mb-2 form-control" required />
        <input type="text" name="lastname" placeholder="Last Name" class="mb-2 form-control" required />

        <input type="text" name="suffix" placeholder="suffix" class="mb-2 form-control w-24" />
        <br />
        <input type="text" name="email" placeholder="Email Address" class="mb-2 form-control w-80" required />
        <br />
        <input type="text" name="phone" placeholder="Phone Number" class="mb-2 form-control w-72" required /> 
        <br /> 
        <select name="year_graduated" class="form-control w-40" required>
          <option value=''>Year Graduated</option>
          @for ($year = 1950; $year <= (date('Y') - 15); $year++) 
            <option value='{{ $year }}'>{{ $year }}</option>
          @endfor
        </select> <span class="text-gray-500">(Bachelor's degree)</span><br/>

        <h4 class="text-md mt-4 font-medium">Add Your Resume</h4>
        <input type="file" name="resume" id="resume_file" tabindex="8" size="20" class="form-control block h-14" required />
        Confidential: For internal use only.

        <p class="mt-4"><input type="checkbox" name="7_years" value="1" required /> I have at least seven years as a CFO in the USA (which includes financial vice president/ VP of finance) with privately-held companies</p>
        <p class="mt-2"><input type="checkbox" name="20_years" value="1" required /> I have 15+ years of experience since college graduation</p>

        <h4 class="text-md mt-4 font-medium">Comments</h4>
        <textarea name="comments" class="form-control w-full h-20"></textarea>
        <br/>

        <select name="heard_from" id="heard_from" class="form-control">
          <option value="">Where did you hear about us?</option>
          <option value="bing">Bing</option>
          <option value="craigslist">Craigslist</option>
          <option value="ebay">Ebay Classifieds</option>
          <option value="facebook">Facebook</option>
          <option value="feng">FENG</option>
          <option value="google">Google</option>
          <option value="indeed">Indeed</option>
          <option value="jobs.com">Jobs.com</option>
          <option value="linkedin">LinkedIn</option>
          <option value="monster.com">Monster.com</option>
          <option value="partner">Partner Referral</option>
          <option value="resumelibrary">Resume Library</option>
          <option value="simplyhired">Simply Hired</option>
          <option value="yahoo">Yahoo</option>
          <option value="linkedin_recruiter">You contacted me through LinkedIn</option>
          <option value="ziprecruiter">Zip Recruiter</option>
          <option value="other">Other</option>
        </select>

        <button class="w-full bg-green-600 text-white my-4 rounded-md p-2 text-lg" type="submit">Send Me More Info</button>

        <p>We promise to keep your application confidential<br />
          - <a href="https://www.b2bcfo.com/privacy-policy.html">Privacy Policy</a></p>
        <p>https://{{ $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] }}</p>

        <input type='hidden' name='current_page' value='career.b2bcfo.com' />
      </form>

    </div>

  </div>

</div>


@endsection