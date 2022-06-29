@extends('layouts.Adminmain')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Utama Admin</h1>
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

      <!DOCTYPE html>
      <html>

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
       <body>

        <div class="container">

<div class="row justify-content-center">

    <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
          <i class="nav-icon fas fa-exclamation-circle"></i> <h3>{{$jumlahklien}}</h3>

            <p>Jumlah Klien</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
          <i class="nav-icon fas fa-check"></i> <h3>{{$jumlahkliensetuju}}<sup style="font-size: 20px"></sup></h3>

            <p>Jumlah Klien Setuju</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           <a href="/pengesahan" class="small-box-footer">Maklumat Lanjut<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$jumlahklientunda}}<sup style="font-size: 20px"></sup></h3>

            <p>Jumlah Klien Tunda</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/pengesahan" class="small-box-footer">Maklumat Lanjut<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3>{{$jumlahklienselesai}}<sup style="font-size: 20px"></sup></h3>

            <p>Jumlah Klien Sudah Selesai</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/pengesahan" class="small-box-footer">Maklumat Lanjut<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
      </div>

</div>
</div>

</div>
</div>


        <div class="container-fluid p-5">
            <div id="barchart_material" style="width: 100%; height: 500px;"></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable({!! $temujanjis !!});
                var options = {
                    chart: {
                        title: 'Bar Graph | User Registration',
                        subtitle: 'Day Wise User Registration',
                    },
                    bars: 'vertical'
                };
                var chart = new google.charts.Bar(document.getElementById('barchart_material'));
                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>

        <br />

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
              @foreach($kes as $kes)
            <tr>
              <td>{{$kes->id}}</td>
              <td>{{$kes->nama_kes}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
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
       </body>
      </html>
@endsection
