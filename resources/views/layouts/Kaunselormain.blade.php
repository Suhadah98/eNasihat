<!doctype html>
<html lang="en">

@include('layouts.kaunselorPartials.head')
  <body>

@include('layouts.kaunselorPartials.navigation')


<div class="container-fluid">
  <div class="row">

  @include('layouts.kaunselorPartials.sidebar')

    @yield('content')
  </div>
</div>
    @include('layouts.kaunselorPartials.scripts')
  </body>
</html>
