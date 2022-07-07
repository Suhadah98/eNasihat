@extends('layouts.main')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Temujanji</h1>
      </div>

      <a class="btn btn-primary" href="/temujanji/create" role="button">Membuat temujanji</a>
      <br>
      <h4>Penentuan Tarikh Temujanji</h4>
      <div class="card">
      <div class="table-responsive">


        <table class="table table-striped table-sm table-bordered">
          <thead>
            <tr>
              <th scope="col">Nama Klien</th>
              <th scope="col">Masalah</th>
              <th scope="col">Tarikh dan Masa (Cadangan)</th>
              <th scope="col">Nama Kaunselor</th>
              <th scope="col">Ulasan Kaunselor</th>
              <th scope="col">Tindakan</th>
            </tr>
          </thead>
          <tbody>
            @if(!empty($temujanjis) && $temujanjis->count())
              @foreach($temujanjis as $temujanji)
            <tr>
              <td>{{$temujanji->nama_klien}}</td>
              <td>{{$temujanji->masalah}}</td>
              <td>{{$temujanji->tarikh}}</td>
              <td>{{$temujanji->nama_kaunselor}}</td>
              <td>{{$temujanji->ulasankaunselor}}</td>
              <td>
                <a href="/temujanji/{{$temujanji->id}}" class="btn btn-primary">Kemaskini</a>
                <a href="/temujanji/delete/{{$temujanji->id}}" class="btn btn-danger">Padam</a>
              </td>
            </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="10">Tiada rekod.</td>
                </tr>
            @endif
          </tbody>
        </table>
      </div>
      </div>
      <br><br>

      <h4>Klien (Penukaran tarikh)</h4>

      <div class="card">
      <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
            <thead>
                <tr>
                  <th scope="col">Nama Klien</th>
                  <th scope="col">Masalah</th>
                  <th scope="col">Tarikh dan Masa (Cadangan)</th>
                  <th scope="col">Status</th>
                  <th scope="col">Nama Kaunselor</th>
                  <th scope="col">Ulasan Kaunselor</th>
                  <th scope="col">Tindakan</th>
                </tr>
              </thead>
              <tbody>
                @if(!empty($temujanjis2) && $temujanjis2->count())
                  @foreach($temujanjis2 as $temujanji)
                <tr>
                  <td>{{$temujanji->nama_klien}}</td>
                  <td>{{$temujanji->masalah}}</td>
                  <td>{{$temujanji->tarikh}}</td>
                  <td>{{$temujanji->status}}</td>
                  <td>{{$temujanji->nama_kaunselor}}</td>
                  <td>{{$temujanji->ulasankaunselor}}</td>
                  <td>
                    <a href="/temujanji/{{$temujanji->id}}" class="btn btn-primary">Kemaskini</a>
                    <a href="/temujanji/delete/{{$temujanji->id}}" class="btn btn-danger">Padam</a>
                  </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="10">Tiada rekod.</td>
                </tr>
                @endif
              </tbody>
        </table>
      </div>
      </div>
      <br><br>

      <h2>Sesi Temujanji</h2>

      <div class="card">
      <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
            <thead>
                <tr>
                  <th scope="col">Nama Klien</th>
                  <th scope="col">Masalah</th>
                  <th scope="col">Sesi</th>
                  <th scope="col">Nama Kaunselor</th>
                </tr>
              </thead>
              <tbody>
                @if(!empty($temujanjis1) && $temujanjis1->count())
                  @foreach($temujanjis1 as $temujanji)
                <tr>
                  <td>{{$temujanji->nama_klien}}</td>
                  <td>{{$temujanji->masalah}}</td>
                  <td>{{$temujanji->sesi}}</td>
                  <td>{{$temujanji->nama_kaunselor}}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="10">Tiada rekod.</td>
                </tr>
                @endif
              </tbody>
        </table>
      </div>
      </div>
    </main>
@endsection
