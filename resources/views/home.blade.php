@extends('layouts.main')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Utama Klien</h1>
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

      <head>
        <title>Make Google Pie Chart in Laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <style type="text/css">
         .box{
          width:800px;
          margin:0 auto;
         }
        </style>
        <script type="text/javascript">
         var analytics = <?php echo $nama_kes; ?>

         google.charts.load('current', {'packages':['corechart']});

         google.charts.setOnLoadCallback(drawChart);

         function drawChart()
         {
          var data = google.visualization.arrayToDataTable(analytics);
          var options = {
           title : ''
          };
          var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
          chart.draw(data, options);
         }
        </script>
       </head>

      <h2>Peringatan Temujanji</h2>
      <h5>Temujanji belum selesai</h5>

      <div class="table-responsive">

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Klien</th>
              <th scope="col">Tarikh</th>
              <th scope="col">Nama Kaunselor</th>
            </tr>
          </thead>
          <tbody>
              @foreach($temujanjis as $temujanji)
            <tr>
              <td>{{$temujanji->id}}</td>
              <td>{{$temujanji->nama_klien}}</td>
              <td>{{$temujanji->tarikh}}</td>
              <td>{{$temujanji->nama_kaunselor}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <h2>Senarai Kategori Kes</h2>

      <div class="table-responsive">

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nombor</th>
              <th scope="col">Nama Kes</th>
            </tr>
          </thead>
          <tbody>
              @foreach($kes as $kess)
            <tr>
              <td>{{$kess->id}}</td>
              <td>{{$kess->nama_kes}}</td>
            </tr>
            @endforeach

          </tbody>

        </table>
        <span>
            {{$kes->links() }}
        </span>


      </div>

        <div class="container">
         <h3 align="center"></h3><br />

         <div class="panel panel-default">
          <div class="panel-heading">
           <h3 class="panel-title">Peratusan Kategori Kes yang dihadapi klien</h3>
          </div>
          <div class="panel-body" align="center">
           <div id="pie_chart" style="width:750px; height:450px;">

           </div>
          </div>
         </div>

        </div>
    </main>
@endsection
<style>
    .w-5{
        display:none
    }
</style>
