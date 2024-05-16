


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Admin - Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
    <link rel="stylesheet" href="{{ asset('assets/Dashboard/assets/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Dashboard/assets/css/bootstrap.min.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('assets/Dashboard/assets/css/templatemo-style.css') }}" /> 
    <link rel="icon" href="assets/Dashboard/assets/Favicon.png" type="image/x-icon" />
</head>
@yield('dashboard')

<body>
                        
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
            <p class="text-center text-white mb-0 px-4 small">Copyright &copy; <b>2024</b> All rights reserved.</p>
        </div>
    </footer>
    </div>

    <script src="{{ asset('assets/Dashboard/assets/js/jquery-3.3.1.min.js') }}"></script>  
    <script src="{{ asset('assets/Dashboard/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/Dashboard/assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/Dashboard/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/Dashboard/assets/js/tooplate-scripts.js') }}"></script>
    <script>
        Chart.defaults.global.defaultFontColor = "white";
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();
            });
        });
    </script>

<script>
    $(function () {
      $("#expire_date").datepicker({
        defaultDate: "10/22/2020"
      });
    });
  </script>

</body>