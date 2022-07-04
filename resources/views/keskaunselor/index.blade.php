@extends('layouts.Kaunselormain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Senarai Kes, Simptom dan Solusi</h1>

      </div>

      <a class="btn btn-primary" href="/keskaunselor/create" role="button">Penambahan Input</a>
      <br><br>
      <h3>Semakan Kes</h3>

      <div class="card">
      <div class="table-responsive">

        <table class="table table-striped table-sm table-bordered">
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
                <a href="/keskaunselor/{{$kes->id}}" class="btn btn-primary">Kemaskini</a>
                <a href="/keskaunselor/delete/{{$kes->id}}" class="btn btn-danger">Padam</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
      <br><br>
      <h3>Semakan Simptom</h3>

      <div class="card">
      <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
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
                <a href="/simptomkaunselor/{{$simptoms->id}}" class="btn btn-primary">Kemaskini</a>
                <a href="/simptomkaunselor/delete/{{$simptoms->id}}" class="btn btn-danger">Padam</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
      <br><br>

      <h3>Semakan Solusi</h3>

      <div class="card">
      <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
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
                <a href="/solusikaunselor/{{$solusis->id}}" class="btn btn-primary">Kemaskini</a>
                <a href="/solusikaunselor/delete/{{$solusis->id}}" class="btn btn-danger">Padam</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </main>
@endsection
