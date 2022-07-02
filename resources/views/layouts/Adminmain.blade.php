<!doctype html>
<html lang="en">

@include('layouts.adminPartials.head')
  <body>

@include('layouts.adminPartials.navigation')


<div class="container-fluid">
  <div class="row">

  @include('layouts.adminPartials.sidebar')

    @yield('content')
  </div>
</div>
    @include('layouts.adminPartials.scripts')
  </body>
  @include('layouts.partials.footer')
</html>
