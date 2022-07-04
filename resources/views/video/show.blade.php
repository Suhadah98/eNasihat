@extends('layouts.main')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Ruangan Ilmu Tambahan</h1>

    </div>


@foreach ($videos as $video)
    <h2>{{ $video->tajuk}}</h2>
    <br>
    <h5>{{ $video->penerangan}}</h5>
    <br>
    <div class="media">
        <div class="media-body">
            {!! Embed::make($video->url)->parseUrl()->getIframe() !!}
        </div>
    </div>
    <br>
@endforeach
</main>
@endsection
