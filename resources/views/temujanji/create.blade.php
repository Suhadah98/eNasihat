@extends('layouts.main')

@section('content')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Temujanji</h1>
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
      <h1>Membuat Temujanji</h1>

      <form action="" method="post">
        {{csrf_field() }}

        <div class="form-group">
          <label for="nama_klien">Nama Klien</label>
          <input type="text" id="nama_klien" name="nama_klien" class="form-control" value= "{{ Auth::user()->name }}" readonly/>
        </div>


        <div class="form-group">

            <label for="Kes">Kategori Kes</label>
            <select class="form-control" id="kategorikes" name="kategorikes" required focus>
         <option value="" disabled selected>Sila Pilih Kategori</option>
         @foreach($kes as $kes)
         <option value="{{$kes->id}}">{{ $kes->nama_kes }}</option>
         @endforeach
             </select>

         <div class="form-group">
                <label for="nama_kes">Nama Kes</label>
                <input type="text" id="nama_kes" name="nama_kes" class="form-control {{$errors->has('nama_kes') ?'is-invalid':''}}" value="{{ $kes->nama_kes }}"/>

                @if($errors->has('nama_kes'))
                <span class="help-block">
                <strong>{{$errors->first('nama_kes')}}</strong>
                </span>
                @endif
            </div>

       <div class="form-group">

        <div class="form-group">
          <label for="masalah">Ulasan Masalah</label>
          <input type="text" id="masalah" name="masalah" class="form-control {{$errors->has('masalah') ?'is-invalid':''}}"/>

          @if($errors->has('masalah'))
          <span class="help-block">
          <strong>{{$errors->first('masalah')}}</strong>
          </span>
          @endif
        </div>

        <div class="form-group">
          <label for="tarikh">Tarikh dan Masa (Cadangan)</label>
          <input type="datetime" id="tarikh" name="tarikh" class="form-control {{$errors->has('tarikh') ?'is-invalid':''}}" placeholder="YYYY-MM-DD" value="{{null}}" readonly/>

          @if($errors->has('tarikh'))
          <span class="help-block">
          <strong>{{$errors->first('tarikh')}}</strong>
          </span>
          @endif
        </div>

        <div class="form-group">
            <label for="ulasan">Ulasan Klien</label>
            <input type="text" id="ulasan" name="ulasan" class="form-control {{$errors->has('ulasan') ?'is-invalid':''}}" placeholder="" value="-" readonly/>

            @if($errors->has('ulasan'))
            <span class="help-block">
            <strong>{{$errors->first('ulasan')}}</strong>
            </span>
            @endif
          </div>

        <div class="form-group">
          <label for="status">Status</label>
          <input type="text" id="status" name="status" class="form-control" value="-" readonly/>
        </div>

        <div class="form-group">
          <label for="nama_kaunselor">Nama Kaunselor</label>
          <input type="text" id="nama_kaunselor" name="nama_kaunselor" class="form-control" value="-" readonly/>
        </div>

        <div class="form-group">
            <label for="ulasakaunselor">Ulasan Kaunselor</label>
            <input type="text" id="ulasankaunselor" name="ulasankaunselor" class="form-control {{$errors->has('ulasankaunselor') ?'is-invalid':''}}"  value="-" readonly/>

            @if($errors->has('ulasankaunselor'))
            <span class="help-block">
            <strong>{{$errors->first('ulasankaunselor')}}</strong>
            </span>
            @endif
          </div>

          <div class="form-group">
            <label for="sesi">Sesi</label>
            <input type="text" id="sesi" name="sesi" class="form-control {{$errors->has('sesi') ?'is-invalid':''}}"  value="-" readonly/>

            @if($errors->has('sesi'))
            <span class="help-block">
            <strong>{{$errors->first('sesi')}}</strong>
            </span>
            @endif
          </div>

        <button class="btn btn-primary" type="submit"> Hantar </button>
        <a href="{{route('temujanji.index')}}" class="btn btn-secondary"> Kembali </a>
      </form>
    </main>
@endsection

<script>
    $(document).ready(function(){
      var date_input=$('input[name="tarikh"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'YYYY-MM-DD',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

<script type="text/javascript">

    $('.timepicker').datetimepicker({

        format: 'HH:mm:ss'

    });

</script>

