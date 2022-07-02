
<!doctype html>
<html lang="en">

@include('layouts.partials.head')
  <body>

@include('layouts.partials.navigation')


<div class="container-fluid">
  <div class="row">

  @include('layouts.partials.sidebar')

    @yield('content')
  </div>
</div>
    @include('layouts.partials.scripts')
  </body>

@include('layouts.partials.footer')
</html>
