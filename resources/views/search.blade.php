@extends('layouts.Adminmain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <div class="col-md-6">
    <h1>Ruangan Solusi<h1>
    </div>
    <div class="col-md-4">
        <form action="/search" method="get">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Carian</button>
                </span>
            </div>
        </form>
    </div>

        </div>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kes</th>
              </tr>
            </thead>
            <tbody>
                @foreach($kes as $kes)
              <tr>
                <td>{{$kes->kesID}}</td>
                <td>{{$kes->nama_kes}}</td>
                <td>
                    <a href="{{ route('search', ['kesID' => $simptoms->kesID]) }}" class="btn btn-sm btn-secondary">Simptom</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</main>

@if($simptoms)
<aside class="col-sm-4" id="aside">

    <div class="card">
        <div class="card-header">Simptom</div>
        <div class="card-body">

            <table class="table ">
                <thead>
                    <tr>
                        <th>Simptom ID</th>
                        <th>Simptom</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($simptoms as $simptom)
                        <tr>
                            <td>{{ $simptom->simptomID }}</td>
                            <td>{{ $simptom->simptom }}</td>
                            <td>{{ $simptom->kesID }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</aside>
@endif
@endsection
