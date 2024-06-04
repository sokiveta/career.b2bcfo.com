<?php
use App\Http\Controllers\MenuController;
$menu = new MenuController;
$navlinks = $menu->top();
$footerlinks = $menu->footer();
$videolinks = $menu->videos();
$exitlinks = $menu->exit();
$diffSquares = $menu->differenceSquares();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>A New Career for Chief Financial Officers | B2B CFO</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap" rel="stylesheet">
<style>
nav    { background-color: #35434e; }
header { background-color: #35434e; }
footer { background-color: #35434e; }
.form-control {
  display: inline;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
</style>

</head>
<body class="bg-gray-100">

  <nav style="border: 1px solid #35434e;">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="https://career.b2bcfo.com/images/b2bcfo-logo-header.png" class="h-8" alt="B2B CFO Logo" />
      </a>
      @include('partials._menuTop')
    </div>
  </nav>

  @if (str_contains(Request::url(), 'the-b2b-cfo-difference'))
    @include('partials._difference')
  @endif

  @yield('content')
  
  @if (str_contains(Request::url(), 'the-b2b-cfo-difference'))
    @include('partials._menuDiffFooter')
  @endif

  <footer style="border: 1px solid #35434e;">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 my-10">
      <a href="/">
        <img src="https://career.b2bcfo.com/images/b2bcfo-logo-footer.png" class="h-16" alt="B2B CFO Logo" />
      </a>      
      <div class="mr-8">
        @include('partials._menuFooter')
        @include('partials._menuVideos')
        @include('partials._menuExit')
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>