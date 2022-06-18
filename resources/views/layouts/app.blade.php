<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.head')


<body>
  <div id="wrapper">

@include('layouts.partials.header')

@yield('container')

  <div class="container">
    <div class="fluid">
    @yield('content')
    </div>
  </div>

@include('layouts.partials.footer')
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

 @include('layouts.partials.script')

</body>
</html>
