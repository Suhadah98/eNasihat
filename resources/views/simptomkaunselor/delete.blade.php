@extends('layouts.Kaunselormain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Padam Simptom</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <h1>Padam Simptom</h1>

      <form action="" method="post">
        {{csrf_field() }}

        <div class="form-group">
          <label for="simptom">Simptom</label>
          <input type="text" id="simptom" name="simptom" class="form-control {{$errors->has('simptom') ?'is-invalid':''}}" value="{{ old('simptom',$simptoms->simptom) }}" disabled/>
        </div>

        <button class="btn btn-danger" type="submit"> Padam </button>
        <a href="{{route('keskaunselor.index')}}" class="btn btn-secondary"> Kembali </a>
      </form>
    </main>
@endsection
