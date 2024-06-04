<ul class="font-normal flex flex-col p-4 mb-4 mt-0 md:p-0 md:flex-row md:space-x-8">
@foreach( $videolinks as $videolink )
  <li>
    @if(!empty($videolink['url']))
      <a href="{{ $videolink['url'] }}" class="text-white hover:underline">{{ $videolink['name'] }}</a>
    @else
      <p class="text-white">{{ $videolink['name'] }}</p>
    @endif         
  </a>
  </li>
@endforeach
</ul>