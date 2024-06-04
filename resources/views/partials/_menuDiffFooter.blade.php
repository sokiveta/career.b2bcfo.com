<div class="flex flex-wrap mx-auto max-w-screen-xl justify-evenly my-12 h-36 ">
  @foreach ($diffSquares as $square)
  <a href="{{$square['link']}}">
    <button class="text-ft w-28 h-28 p-1 items-center justify-center hover:scale-125 transition delay-100 duration-300">
      {{$square['text']}}
    </button>
  </a>    
  @endforeach 
</div>