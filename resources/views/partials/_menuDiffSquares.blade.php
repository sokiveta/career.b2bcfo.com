<ul class="font-normal flex flex-col p-4 mb-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0">
@foreach( $diffSquares as $diffSquare )
  <li>
    <a href="{{ $diffSquare['url'] }}" class="text-white hover:underline"><img src='https://career.b2bcfo.com/views/the-b2b-cfo-difference/images/buttons/{{ $diffSquare['image'] }}' /></a>
  </li>
@endforeach
</ul>  