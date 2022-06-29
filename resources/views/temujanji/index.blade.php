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

      <h2>Semakan Temujanji</h2>

      <div class="table-responsive">

      <a class="btn btn-primary" href="/temujanji/create" role="button">Membuat temujanji</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Klien</th>
              <th scope="col">Nama Kes</th>
              <th scope="col">Masalah</th>
              <th scope="col">Tarikh</th>
              <th scope="col">Status</th>
              <th scope="col">Ulasan Klien</th>
              <th scope="col">Nama Kaunselor</th>
              <th scope="col">Ulasan Kaunselor</th>
              <th scope="col">Tindakan</th>
            </tr>
          </thead>
          <tbody>
              @foreach($temujanjis as $temujanji)
            <tr>
              <td>{{$temujanji->id}}</td>
              <td>{{$temujanji->nama_klien}}</td>
              <td>{{$temujanji->nama_kes}}</td>
              <td>{{$temujanji->masalah}}</td>
              <td>{{$temujanji->tarikh}}</td>
              <td>{{$temujanji->status}}</td>
              <td>{{$temujanji->ulasan}}</td>
              <td>{{$temujanji->nama_kaunselor}}</td>
              <td>{{$temujanji->ulasankaunselor}}</td>
              <td>
                <a href="/temujanji/{{$temujanji->id}}" class="btn btn-primary">Kemaskini</a>
                <a href="/temujanji/delete/{{$temujanji->id}}" class="btn btn-danger">Padam</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <h2>Semakan Temujanji</h2>

      <div class="table-responsive">


        <table class="table table-striped table-sm">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Klien</th>
                  <th scope="col">Nama Kes</th>
                  <th scope="col">Masalah</th>
                  <th scope="col">Tarikh</th>
                  <th scope="col">Status</th>
                  <th scope="col">Ulasan Klien</th>
                  <th scope="col">Nama Kaunselor</th>
                  <th scope="col">Ulasan Kaunselor</th>
                  <th scope="col">Tindakan</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($temujanjis2 as $temujanji)
                <tr>
                  <td>{{$temujanji->id}}</td>
                  <td>{{$temujanji->nama_klien}}</td>
                  <td>{{$temujanji->nama_kes}}</td>
                  <td>{{$temujanji->masalah}}</td>
                  <td>{{$temujanji->tarikh}}</td>
                  <td>{{$temujanji->status}}</td>
                  <td>{{$temujanji->ulasan}}</td>
                  <td>{{$temujanji->nama_kaunselor}}</td>
                  <td>{{$temujanji->ulasankaunselor}}</td>
                  <td>
                    <a href="/temujanji/{{$temujanji->id}}" class="btn btn-primary">Kemaskini</a>
                    <a href="/temujanji/delete/{{$temujanji->id}}" class="btn btn-danger">Padam</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
        </table>
      </div>

      <h2>Semakan Temujanji</h2>

      <div class="table-responsive">


        <table class="table table-striped table-sm">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Klien</th>
                  <th scope="col">Nama Kes</th>
                  <th scope="col">Masalah</th>
                  <th scope="col">Tarikh</th>
                  <th scope="col">Status</th>
                  <th scope="col">Ulasan Klien</th>
                  <th scope="col">Nama Kaunselor</th>
                  <th scope="col">Ulasan Kaunselor</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($temujanjis1 as $temujanji)
                <tr>
                  <td>{{$temujanji->id}}</td>
                  <td>{{$temujanji->nama_klien}}</td>
                  <td>{{$temujanji->nama_kes}}</td>
                  <td>{{$temujanji->masalah}}</td>
                  <td>{{$temujanji->tarikh}}</td>
                  <td>{{$temujanji->status}}</td>
                  <td>{{$temujanji->ulasan}}</td>
                  <td>{{$temujanji->nama_kaunselor}}</td>
                  <td>{{$temujanji->ulasankaunselor}}</td>
                </tr>
                @endforeach
              </tbody>
        </table>
      </div>
    </main>
@endsection
