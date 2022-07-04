@extends('layouts.Kaunselormain')

@section('content')

<!DOCTYPE html>
<html>
   <head>
      <title>Laravel Video Upload Form - ScratchCode.io</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container mt-5">
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h1>Ruang Muatnaik Maklumat</h1>
               <h6>Ruangan ini khas untuk memuatnaik video dari Youtube</h6>
            </div>
            <br><br>
            <div class="panel-body">
               @if ($message = Session::get('success'))
                   <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                   </div>
               @endif

               @if (count($errors) > 0)
               <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif

               <form action="{{ route('store.video') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">

                     <div class="col-md-12">
                        <div class="col-md-6 form-group">
                           <label>Tajuk:</label>
                           <input type="text" name="tajuk" class="form-control"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Penerangan:</label>
                            <input type="text" name="penerangan" class="form-control"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Url:</label>
                            <input type="text" name="url" class="form-control"/>
                        </div>
                        <div class="col-md-6 form-group">
                           <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>
@endsection
