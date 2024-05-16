<button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
  <span class="sr-only">Open main menu</span>
  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
  </svg>
</button>

<div class="hidden w-full md:block md:w-auto" id="navbar-default">

  <ul class="font-normal flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">

  @foreach( $navlinks as $navlink )
    @if( $loop->first )
    <li>
      <a href="{{ $navlink['url'] }}" class="text-white hover:underline" aria-current="page">{{ $navlink['name'] }}</a>
    </li> 
    @else
    <li>
      <a href="{{ $navlink['url'] }}" class="text-white hover:underline">{{ $navlink['name'] }}</a>
    </li>
    @endif
  @endforeach

  </ul>

</div>