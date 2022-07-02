@extends('layouts.main')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <div class="col-md-6">
                <h1>Ruangan Solusi<h1>
            </div>
            <div class="col-md-4">
                <form action="/searchklien" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control {{$errors->has('search') ?'is-invalid':''}}" id="search" required>

                        @if($errors->has('search'))
                         <span class="help-block">
                         <strong>{{$errors->first('search')}}</strong>
                         </span>
                        @endif

                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Carian</button>
                        </span>
                    </div>
                </form>
            </div>

        </div>
        <div class="card">
            <div class="card-header">Kes</div>
            <div class="card-body">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Kes ID</th>
                            <th scope="col">Nama Kes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (Request::input('search'))

                        @foreach ($kes as $kes)
                        <tr>
                            <td>{{ $kes->id }}</td>
                            <td>{{ $kes->nama_kes }}</td>

                            <td>
                                <a href="{{ route('searchklien', ['kes' => $kes->id]) }}"
                                    class="btn btn-sm btn-secondary">Simptom dan Solusi</a>
                            </td>
                        </tr>
                    @endforeach

                        @endif

                    </tbody>
                </table>
            </div>
        </div>
        <br>


        @if ($simptoms)
            <div class="card">

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
                        </tbody>
                    </table>

                </div>
            </div>
            <br>
        @endif

        @if ($solusis)
            <div class="card">

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
        <br>

        @if ($kes1)
        <div class="card">
            <div class="card-header">Kes, Simptom dan Solusi</div>
            <div class="card-body">

                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col"></th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($kes1 as $kes1 )
                            <tr>
                                <td>{{ $kes1->nama_kes }}</td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr scope="row">Adakah solusi ini membantu kepada masalah yang dihadapi?
                            </tr>
                            <tr>
                            <form action="{{ route('simpan.store')}}" method="post">
                                {{csrf_field() }}
                            <input type="hidden" id="name" name="name" value="{{ Auth::user()->name }}">
                              <input type="hidden" id="kesID" name="kesID" value="{{ $kes1->id }}">
                              <input type="hidden" id="nama_kes" name="nama_kes" value="{{ $kes1->nama_kes }}">
                              <input class="btn btn-primary" type="submit" value="Ya">
                              </form>
                            </tr>
                            <tr>
                                <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tidak
                        </button>
                            </tr>

                        @endforeach

                    </tbody>
                </table>


                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Adakah anda ingin membuat temujanji?
                            </div>
                            <div class="modal-footer">
                                <a href="/temujanji/create" class="btn btn-primary">Ya</a>
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

            </div>
        </div>
        <br>
    @endif

        </div>
        </div>
    </main>
@endsection

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
