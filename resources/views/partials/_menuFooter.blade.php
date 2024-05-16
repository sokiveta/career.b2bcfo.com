<ul class="font-normal flex flex-col p-4 mb-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0">
@foreach( $footerlinks as $footerlink )
  <li>
    <a href="{{ $footerlink['url'] }}" class="text-white hover:underline">{{ $footerlink['name'] }}</a>
  </li>
@endforeach
</ul>  