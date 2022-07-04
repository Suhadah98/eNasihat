@extends('layouts.Kaunselormain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Padam Kes</h1>

      </div>
      <h1>Padam Kes</h1>

      <form action="" method="post">
        {{csrf_field() }}

        <div class="form-group">
          <label for="nama_kes">Nama Kes</label>
          <input type="text" id="nama_kes" name="nama_kes" class="form-control {{$errors->has('nama_kes') ?'is-invalid':''}}" value="{{ old('nama_klien',$kes->nama_kes) }}" disabled/>

          @if($errors->has('nama_kes'))
          <span class="help-block">

          <strong>{{$errors->first('nama_kes')}}</strong>
          </span>

          @endif
        </div>
        <br>

        <button class="btn btn-danger" type="submit"> Padam </button>
        <a href="{{route('keskaunselor.index')}}" class="btn btn-secondary"> Kembali </a>
      </form>

      @if(Session::get('success'))
      <div class="alert alert-success">
          {{session::get('success')}}
      </div>
        @endif

        @if(Session::get('fail'))
      <div class="alert alert-danger">
          {{session::get('fail')}}
      </div>
        @endif

    </main>
@endsection
