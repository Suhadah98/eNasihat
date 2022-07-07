@extends('layouts.Adminmain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Kaunselor</h1>
      </div>

<h4>Mendaftar Kaunselor</h4>

    <form method="POST" action="">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name Kaunselor</label>
            <input type="text" class="form-control {{$errors->has('name') ?'is-invalid':''}}" id="name" name="name">

            @if($errors->has('name'))
            <span class="help-block">
            <strong>{{$errors->first('name')}}</strong>
            </span>
            @endif
        </div>
        <br>

        <div class="form-group">
            <label for="email">Emel</label>
            <input type="email" class="form-control {{$errors->has('email') ?'is-invalid':''}}" id="email" name="email" >

            @if($errors->has('email'))
            <span class="help-block">
            <strong>{{$errors->first('email')}}</strong>
            </span>
            @endif

        </div>
        <br>
        <div class="form-group">
            <label for="password">Kata Laluan</label>
            <input type="password" class="form-control" id="password" name="password">

            @if($errors->has('password'))
            <span class="help-block">
            <strong>{{$errors->first('password')}}</strong>
            </span>
            @endif

        </div>
        <br>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Mendaftar</button>
        </div>

    </form>

    @if(Session::get('success'))
    <div class="alert alert-success">
        {{session::get('success')}}
    </div>
      @endif
</main>
@endsection
