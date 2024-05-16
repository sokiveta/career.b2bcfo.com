<ul class="font-normal flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0">
@foreach( $exitlinks as $exitlink )
  <li>
    @if(!empty($exitlink['url']))
      <a href="{{ $exitlink['url'] }}" class="text-white hover:underline">{{ $exitlink['name'] }}</a>
    @else
      <p class="text-white">{{ $exitlink['name'] }}</p>
    @endif         
  </a>
  </li>
@endforeach
</ul>