@extends('layouts.Adminmain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Kaunselor</h1>
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

<h2>Mendaftar Kaunselor</h2>

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

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control {{$errors->has('email') ?'is-invalid':''}}" id="email" name="email" >
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="invisible">
            <label for="user_type">Klasifikasi pengguna</label>
            <input type="text" class="form-control {{$errors->has('email') ?'is-invalid':''}}" id="user_type" name="user_type" value= "Kaunselor" readonly>
        </div>



        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Mendaftar</button>
        </div>

    </form>
</main>
@endsection
