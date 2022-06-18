@extends('layouts.Adminmain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penambahan Kes</h1>
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

      <h2>Penambahan Kes</h2>

      <form action="" method="post">
        {{csrf_field() }}

        <div class="form-group">
          <label for="nama_kes">Nama Kes</label>
          <input type="text" id="nama_kes" name="nama_kes" class="form-control {{$errors->has('nama_kes') ?'is-invalid':''}}"/>

          @if($errors->has('nama_kes'))
          <span class="help-block">
          <strong>{{$errors->first('nama_kes')}}</strong>
          </span>
          @endif
        </div>
        <br>
        <button class="btn btn-primary" type="submit" name="action" value="simpankes"> Hantar </button>
      </form>

      <br>
      <h2>Simptom</h2>

      <form action="" method="post">
        {{csrf_field() }}


        <div class="form-group">
            <label for="Kes">Jenis Kes</label>
            <select class="form-control" id="id" name="id" required focus>
         <option value="" disabled selected>Sila Pilih Kes</option>
         @foreach($kes as $kes)
         <option value="{{$kes->id}}">{{ $kes->nama_kes }}</option>
         @endforeach
       </select>
       </div>


        <div class="form-group">
          <label for="simptom">Simptom</label>
          <input type="text" id="simptom" name="simptom" class="form-control {{$errors->has('simptom') ?'is-invalid':''}}"/>

          @if($errors->has('simptom'))
          <span class="help-block">
          <strong>{{$errors->first('simptom')}}</strong>
          </span>
          @endif

        </div>

        <div class="form-group">
            <label for="solusi">Solusi</label>
            <input type="text" id="solusi" name="solusi" class="form-control {{$errors->has('solusi') ?'is-invalid':''}}"/>

            @if($errors->has('solusi'))
            <span class="help-block">
            <strong>{{$errors->first('solusi')}}</strong>
            </span>
            @endif
          </div>

        <br>
            <button class="btn btn-primary" type="submit" name="action" value="simpansimptom"> Hantar </button>

      </form>

    </main>
@endsection

<script type="text/javascript">
    var mydropdown = document.getElementById('id');
    mydropdown.onchange = function(){
        mytextbox.value = mytextbox.value  + this.value; //to appened
       mytextbox.innerHTML = this.value;
       }
    </script>
