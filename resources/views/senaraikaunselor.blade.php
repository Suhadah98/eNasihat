@extends('layouts.main')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Senarai Kaunselor</h1>

      </div>


      <h2>Semakan Kaunselor</h2>

      <div class="card">
      <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
            <thead>
                <tr>
                  <th scope="col">Nama Kaunselor</th>
                  <th scope="col">Emel</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($users as $user)
                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                </tr>
                @endforeach
              </tbody>
        </table>
      </div>
      </div>
      <br>
      {!!$users->links() !!}
    </main>
@endsection
<style>
    .w-5{
        display:none
    }
</style>

