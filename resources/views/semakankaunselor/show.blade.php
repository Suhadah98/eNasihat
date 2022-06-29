@extends('layouts.Kaunselormain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengesahan</h1>
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
      <h1>Membuat Pengesahan</h1>

      <form action="" method="post">
        {{csrf_field() }}

        <div class="form-group">
          <label for="nama_klien">Nama Klien</label>
          <input type="text" id="nama_klien" name="nama_klien" class="form-control {{$errors->has('nama_klien') ?'is-invalid':''}}" value="{{ old('nama_klien',$temujanji->nama_klien) }}"/>

          @if($errors->has('nama_klien'))
          <span class="help-block">

          <strong>{{$errors->first('nama_klien')}}</strong>
          </span>

          @endif
        </div>

        <div class="form-group">
          <label for="masalah">Masalah</label>
          <input type="text" id="masalah" name="masalah" class="form-control {{$errors->has('masalah') ?'is-invalid':''}}" value="{{old('masalah',$temujanji->masalah) }}"/>

          @if($errors->has('masalah'))
          <span class="help-block">
            <strong>{{$errors->first('masalah')}}</strong>
          </span>
          @endif
        </div>

        <div class="form-group">
            <label for="tarikh">Tarikh dan Masa (Cadangan)</label>
            <input type="datetime" id="tarikh" name="tarikh" class="form-control" placeholder="YYYY-MM-DD" value="{{$temujanji->tarikh}}"/>
          </div>

        <div class="form-group">
            <label for="tarikh">Tarikh dan Masa (Kemaskini)</label>
            <input type="datetime-local" id="tarikh" name="tarikh" class="form-control" placeholder="YYYY-MM-DD" value="{{$temujanji->tarikh}}"/>
          </div>

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" id="status" name="status" class="form-control" value="{{$temujanji->status}}" readonly/>
          </div>

          <div class="form-group">
            <label for="ulasan">Ulasan Klien</label>
            <input type="text" id="ulasan" name="ulasan" class="form-control" value="{{$temujanji->ulasan}}" readonly/>
          </div>


        <div class="form-group">
          <label for="nama_kaunselor">Nama Kaunselor</label>
          <input type="text" id="nama_kaunselor" name="nama_kaunselor" class="form-control" value="{{ Auth::user()->name }}" readonly/>
        </div>

        <div class="form-group">
            <label for="ulasankaunselor">Ulasan Kaunselor</label>
            <input type="text" id="ulasankaunselor" name="ulasankaunselor" class="form-control" value="{{$temujanji->ulasankaunselor}}"/>
          </div>

          <div class="form-group">
            <label for="sesi">Sesi (Selesai/Belum Selesai)</label>
            <select class="form-select" aria-label="Default select example" id="sesi" name="sesi" class="form-control" value="{{$temujanji->sesi}}">
                <option selected>Pilih</option>
                <option value="Selesai">Sesi Selesai</option>
                <option value="Belum Selesai">Sesi Belum Selesai</option>
              </select>
          </div>

        <button class="btn btn-primary" type="submit"> Hantar </button>
        <a href="{{route('semakankaunselor.index')}}" class="btn btn-secondary"> Kembali </a>
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
