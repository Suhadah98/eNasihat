@extends('layouts.Kaunselormain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kes</h1>
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
      <h1>Kemaskini Kes</h1>

      <form action="" method="post">
        {{csrf_field() }}

        <div class="form-group">
          <label for="nama_kes">Nama Kes</label>
          <input type="text" id="nama_kes" name="nama_kes" class="form-control {{$errors->has('nama_kes') ?'is-invalid':''}}" value="{{ old('nama_kes',$kes->nama_kes) }}"/>

          @if($errors->has('nama_kes'))
          <span class="help-block">

          <strong>{{$errors->first('nama_kes')}}</strong>
          </span>

          @endif
        </div>

        <button class="btn btn-primary" type="submit"> Hantar </button>
        <a href="{{route('keskaunselor.index')}}" class="btn btn-secondary"> Kembali </a>
      </form>
    </main>
@endsection

