<ul class="font-normal flex flex-col p-4 mb-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0">
@foreach( $diffFooters as $diffFooter )
  <li>
    <a href="{{ $diffFooter['url'] }}" class="text-white hover:underline">{{ $diffFooter['name'] }}</a>
  </li>
@endforeach
</ul>  