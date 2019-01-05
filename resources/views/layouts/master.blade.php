<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>

  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Dashboard &mdash; Stisla</title>

  <link  href="{{ asset('/dist/modules/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link  href="{{ asset('/dist/modules/ionicons/css/ionicons.min.css') }}" rel="stylesheet" type="text/css">
  <link  href="{{ asset('/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css">

  <link  href="{{ asset('/dist/modules/summernote/summernote-lite.css') }}" rel="stylesheet" type="text/css">
  <link  href="{{ asset('/dist/modules/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
  <link  href="{{ asset('/dist/css/demo.css') }}" rel="stylesheet" type="text/css">
  <link  href="{{ asset('/dist/css/style.css') }}" rel="stylesheet" type="text/css">


</head>
<body>
  <!-- Header-->
  @include('partials.header')

  <!-- Sidebar -->
  @include('partials.sidebar')
      <div class="main-content">
      <section class="section">
        @yield('content')

        </section>
      </div>

      @include('partials.footer')
      
    </div>
  </div>

  <script src="{{ asset('/dist/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('/dist/modules/popper.js') }}"></script>
  <script src="{{ asset('/dist/modules/tooltip.js') }}"></script>
  <script src="{{ asset('/dist/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/dist/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
  <script src="{{ asset('/dist/js/sa-functions.js') }}"></script>
  
  <script src="{{ asset('/dist/modules/chart.min.js') }}"></script>
  <script src="{{ asset('/dist/modules/summernote/summernote-lite.js') }}"></script>

  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });

   var ctx = document.getElementById("myChart2").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
          label: 'Statistics',
          data: [460, 458, 330, 502, 430, 610, 488],
          borderWidth: 2,
          backgroundColor: 'rgb(87,75,144)',
          borderColor: 'rgb(87,75,144)',
          borderWidth: 2.5,
          pointBackgroundColor: '#ffffff',
          pointRadius: 4
        }]
      },
      options: {
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
              stepSize: 150
            }
          }],
          xAxes: [{
            ticks: {
              display: false
            },
            gridLines: {
              display: false
            }
          }]
        },
      }
    });

    var ctx = document.getElementById("myChart3").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        datasets: [{
          data: [
            80,
            50,
            40,
            30,
            20,
          ],
          backgroundColor: [
            '#574B90',
            '#28a745',
            '#ffc107',
            '#dc3545',
            '#343a40',
          ],
          label: 'Dataset 1'
        }],
        labels: [
          'Purple',
          'Green',
          'Yellow',
          'Red',
          'Black'
        ],
      },
      options: {
        responsive: true,
        legend: {
          position: 'bottom',
        },
      }
    });

    var ctx = document.getElementById("myChart4").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        datasets: [{
          data: [
            80,
            50,
            40,
            30,
            20,
          ],
          backgroundColor: [
            '#574B90',
            '#28a745',
            '#ffc107',
            '#dc3545',
            '#343a40',
          ],
          label: 'Dataset 1'
        }],
        labels: [
          'Purple',
          'Green',
          'Yellow',
          'Red',
          'Black'
        ],
      },
      options: {
        responsive: true,
        legend: {
          position: 'bottom',
        },
      }
    });
  </script>
  <script type="text/javascript" src="{{ asset('/dist/js/scripts.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/dist/js/custom.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/dist/js/demo.js') }}"></script>
</body>
</html>