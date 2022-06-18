@extends('layouts.Adminmain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ruangan Semakan Kes</h1>
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

      <h2>Semakan Kes</h2>

      <div class="table-responsive">

      <a class="btn btn-primary" href="/kes/create" role="button">Penambahan Input</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Kes</th>
              <th scope="col">Tindakan</th>
            </tr>
          </thead>
          <tbody>
              @foreach($kes as $kes)
            <tr>
              <td>{{$kes->id}}</td>
              <td>{{$kes->nama_kes}}</td>
              <td>
                <a href="/kes/{{$kes->id}}" class="btn btn-primary">Kemaskini</a>
                <a href="/kes/delete/{{$kes->id}}" class="btn btn-danger">Padam</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <h2>Semakan Simptom</h2>

      <div class="table-responsive">


        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Simptom</th>
              <th scope="col">kes ID</th>
            </tr>
          </thead>
          <tbody>
              @foreach($simptoms as $simptoms)
            <tr>
              <td>{{$simptoms->id}}</td>
              <td>{{$simptoms->simptom}}</td>
              <td>{{$simptoms->kesID}}</td>
              <td>
                <a href="/simptom/{{$simptoms->id}}" class="btn btn-primary">Kemaskini</a>
                <a href="/simptom/delete/{{$simptoms->id}}" class="btn btn-danger">Padam</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <h2>Semakan Solusi</h2>

      <div class="table-responsive">


        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Solusi</th>
              <th scope="col">kes ID</th>
            </tr>
          </thead>
          <tbody>
              @foreach($solusis as $solusis)
            <tr>
              <td>{{$solusis->solusiID}}</td>
              <td>{{$solusis->solusi}}</td>
              <td>{{$solusis->kesID}}</td>
              <td>
                <a href="/solusi/{{$solusis->id}}" class="btn btn-primary">Kemaskini</a>
                <a href="/solusi/delete/{{$solusis->id}}" class="btn btn-danger">Padam</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
@endsection
