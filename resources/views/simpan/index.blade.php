@extends('layouts.main')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Simpanan</h1>
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

      <h2>Semakan Masalah</h2>

      <div class="card">
      <div class="table-responsive">

        <table class="table table-striped table-sm table-bordered">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Kes ID</th>
              <th scope="col">Nama Kes</th>
              <th scope="col">Tindakan</th>
            </tr>
          </thead>
          <tbody>
              @foreach($simpans as $simpan)
            <tr>
              <td>{{$simpan->name}}</td>
              <td>{{$simpan->kesID}}</td>
              <td>{{$simpan->nama_kes}}</td>
              <td>
                  <a href="?kes={{$simpan->kesID}}" class="btn btn-primary">Simptom dan Solusi</a>
                  <a href="/temujanji/create" class="btn btn-primary">Temujanji</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>

      @if (Request::input('kes'))
      <div class="card">
          <div class="card-header">Simptom</div>
          <div class="card-body">

              <table class="table ">
                  <thead>
                      <tr>

                          <th>Simptom</th>

                      </tr>
                  </thead>

                  <tbody>
                      @foreach ($simptoms as $simptom)
                          <tr>
                              <td>{{ $simptom->simptom }}</td>
                          </tr>
                      @endforeach
                      <td>
                      </td>
                  </tbody>
              </table>

          </div>
      </div>



      <div class="card">
          <div class="card-header">Solusi</div>
          <div class="card-body">

              <table class="table ">
                  <thead>
                      <tr>

                          <th>Solusi</th>

                      </tr>
                  </thead>

                  <tbody>
                      @foreach ($solusis as $solusi)
                          <tr>
                              <td>{{ $solusi->solusi }}</td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>

          </div>
      </div>
  @endif

      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Simptom dan Solusi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if ($simptoms)
            <div class="card">
                <div class="card-header">Simptom</div>
                <div class="card-body">

                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Simptom</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($simptoms as $simptom)
                                <tr>
                                    <td>{{ $simptom->simptom }}</td>
                                </tr>
                            @endforeach
                            <td>
                            </td>
                        </tbody>
                    </table>

                </div>
            </div>
        @endif

        @if ($solusis)
            <div class="card">
                <div class="card-header">Solusi</div>
                <div class="card-body">

                    <table class="table ">
                        <thead>
                            <tr>

                                <th>Solusi</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($solusis as $solusi)
                                <tr>
                                    <td>{{ $solusi->solusi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    </main>
@endsection
