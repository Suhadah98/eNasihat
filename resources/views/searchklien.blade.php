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
                        <input type="search" name="search" class="form-control">
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
                        @foreach ($kes as $kes)
                            <tr>
                                <td>{{ $kes->kesID }}</td>
                                <td>{{ $kes->nama_kes }}</td>

                                <td>
                                    <a href="{{ route('searchklien', ['kes' => $kes->kesID]) }}"
                                        class="btn btn-sm btn-secondary">Simptom dan Solusi</a>
                                </td>
                                <td>
                                    <form action="{{ route('simpan.store')}}" method="post">
                                        {{csrf_field() }}
                                    <input type="hidden" id="name" name="name" value="{{ Auth::user()->name }}">
                                      <input type="hidden" id="kesID" name="kesID" value="{{ $kes->kesID }}">
                                      <input type="hidden" id="nama_kes" name="nama_kes" value="{{ $kes->nama_kes }}">
                                      <input class="btn btn-sm btn-secondary" type="submit" value="Disimpan">
                                      </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

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
        </div>
    </main>
@endsection
