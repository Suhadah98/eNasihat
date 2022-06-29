@extends('layouts.Kaunselormain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Solusi</h1>
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
      <h1>Kemaskini Solusi</h1>

      <form action="" method="post">
        {{csrf_field() }}

        <div class="form-group">
          <label for="solusi">Nama Solusi</label>
          <input type="text" id="solusi" name="solusi" class="form-control {{$errors->has('solusi') ?'is-invalid':''}}" value="{{ old('solusi',$solusis->solusi) }}"/>

          @if($errors->has('solusi'))
          <span class="help-block">

          <strong>{{$errors->first('solusi')}}</strong>
          </span>

          @endif
        </div>

        <div class="form-group">
            <label for="kesID">Kes ID</label>
            <input type="text" id="kesID" name="kesID" class="form-control {{$errors->has('kesID') ?'is-invalid':''}}" value="{{ old('kesID',$solusis->kesID) }}" readonly/>
          </div>

        <button class="btn btn-primary" type="submit"> Hantar </button>
        <a href="{{route('keskaunselor.index')}}" class="btn btn-secondary"> Kembali </a>
      </form>
    </main>
@endsection

