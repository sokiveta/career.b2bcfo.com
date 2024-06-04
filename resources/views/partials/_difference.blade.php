<div class="text-center">

  <h1 class="text-7xl text-b2 font-montserrat mt-8 mb-4">The B2B CFO<sup>&reg;</sup> Difference</h1>

  <div class="flex justify-center text-lg">
    <a href="{{asset('storage/The B2B CFO Difference Brochure.pdf')}}" target="_blank">
      <img class="w-10 h-3.5 mt-2 mr-2" src="{{asset('images/pdf.png')}}" />
    </a>
    <a href="{{asset('storage/The B2B CFO Difference Brochure.pdf')}}" target="_blank">
      <p class="mt-1 text-b2 underline hover:no-underline">The B2B CFO Difference Brochure.pdf</p>
    </a>
  </div>
  
  <div class="justify-center text-2xl text-b2 mt-4">
    Click on a square below to find out how we're different
  </div>

</div>

<div class="flex flex-wrap mx-auto max-w-screen-xl justify-evenly my-12 h-36 ">
  @foreach ($diffSquares as $square)
  <a href="{{$square['link']}}">
    <button class="{{$square['colo']}} w-28 h-28 p-1 items-center justify-center hover:scale-125 transition delay-100 duration-300">
      {{$square['text']}}
    </button>
  </a>    
  @endforeach 
</div>

<script>
  tailwind.config = {
    theme: {
      colors: {
        d0: '#99d4e4',
        d1: '#e7e8e3',
        d2: '#c6cfcc',
        d3: '#a9c1c5',
        d4: '#80a5ae',
        d5: '#71a2c0',
        d6: '#637f8b',
        b2: '#243F4C',
        ft: '#337ab7'
      },
      fontFamily: {
        montserrat: ['Montserrat'],
      },
      extend: {},
    },
  };
</script>