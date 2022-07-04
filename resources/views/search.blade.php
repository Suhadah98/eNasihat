@extends('layouts.Adminmain')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <div class="col-md-6">
                <h1>Ruangan Solusi<h1>
                    <h6>Anda dikehendaki untuk mengisi kata kunci sebelum menekan butang carian.<h6>
            </div>
            <div class="col-md-4">
                <form action="/search" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control">

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
        <br><br>
        <div class="card">
            <div class="card-header">Kes</div>
            <div class="card-body">
                @if(isset($kes))
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">No ID</th>
                            <th scope="col">Kes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (Request::input('search'))

                        @if(count($kes) > 0)
                        @foreach ($kes as $kes)
                            <tr>
                                <td>{{ $kes->id }}</td>
                                <td>{{ $kes->nama_kes }}</td>
                                <td>
                                    <a href="{{ route('search', ['kes' => $kes->id]) }}"
                                        class="btn btn-sm btn-primary">Simptom dan Solusi</a>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                        @endif
                    </tbody>
                </table>
                @endif
            </div>
        </div>
        <br><br>

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
            <br><br>
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
