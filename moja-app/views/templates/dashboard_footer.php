      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>COPYRIGHT &copy; MOJA - MAJLIS AGAMA ISLAM WILAYAH PERSEKUTUAN <?= date('Y');?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <?php

    $kualalumpur = $data['kuala_lumpur'];
    $putrajaya = $data['putrajaya'];
    $labuan = $data['labuan'];

    $all = $kualalumpur + $putrajaya + $labuan;
          
    $kl = $kualalumpur / $all;
          
    $kualalumpur = number_format( $kl * 100, 2 );
          
    //echo $kualalumpur;
          
    $pjy = $putrajaya / $all;
          
    $putrajaya = number_format( $pjy * 100, 2 );
          
    //echo "PJY " . $putrajaya;
          
    $lab = $labuan / $all;
          
    $labuan = number_format( $lab * 100, 2 );

  ?>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= BASEURL; ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= BASEURL; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= BASEURL; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= BASEURL; ?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= BASEURL; ?>vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= BASEURL; ?>js/demo/chart-area-demo.js"></script>
  <script src="<?= BASEURL; ?>js/demo/chart-pie-demo.js"></script>
  
  <script>

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    function number_format(number, decimals, dec_point, thousands_sep) {
      // *     example: number_format(1234.56, 2, ',', ' ');
      // *     return: '1 234,56'
      number = (number + '').replace(',', '').replace(' ', '');
      var n = !isFinite(+number) ? 0 : +number,
      prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
      sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
      dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
      s = '',
      toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
      };
      // Fix for IE parseFloat(0.55).toFixed(0) = 0;
      s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
      if (s[0].length > 3) {
      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
      }
      if ((s[1] || '').length < prec) {
      s[1] = s[1] || '';
      s[1] += new Array(prec - s[1].length + 1).join('0');
      }
      return s.join(dec);
    }

    // Bar Chart Example
    var ctx = document.getElementById("myBarChart");
    var myBarChart = new Chart(ctx, {
      type: 'bar',
      data: {
      labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
      datasets: [
      
      {
        label: "12 jam",
        backgroundColor: "#FFF300",
        hoverBackgroundColor: "#FFE000",
        borderColor: "#FFF300",
        data: [<?= $data['jan12']; ?>, <?= $data['feb12']; ?>, <?= $data['mar12']; ?>, <?= $data['apr12']; ?>, <?= $data['may12']; ?>, <?= $data['jun12']; ?>, <?= $data['jul12']; ?>, <?= $data['aug12']; ?>, <?= $data['sep12']; ?>, <?= $data['oct12']; ?>, <?= $data['nov12']; ?>, <?= $data['dec12']; ?>],
      },
      
      {
        label: "24 jam",
        backgroundColor: "#0097FF",
        hoverBackgroundColor: "#0088E5",
        borderColor: "#0097FF",
        data: [<?= $data['jan24']; ?>, <?= $data['feb24']; ?>, <?= $data['mar24']; ?>, <?= $data['apr24']; ?>, <?= $data['may24']; ?>, <?= $data['jun24']; ?>, <?= $data['jul24']; ?>, <?= $data['aug24']; ?>, <?= $data['sep24']; ?>, <?= $data['oct24']; ?>, <?= $data['nov24']; ?>, <?= $data['dec24']; ?>],
      },      

      {
        label: "48 jam",
        backgroundColor: "#16C601",
        hoverBackgroundColor: "#13A801",
        borderColor: "#16C601",
        data: [<?= $data['jan48']; ?>, <?= $data['feb48']; ?>, <?= $data['mar48'] ?>, <?= $data['apr48']; ?>, <?= $data['may48']; ?>, <?= $data['jun48']; ?>, <?= $data['jul48']; ?>, <?= $data['aug48']; ?>, <?= $data['sep48']; ?>, <?= $data['oct48']; ?>, <?= $data['nov48']; ?>, <?= $data['dec48']; ?>],
      },  

      {
        label: "Lebih 48 jam",
        backgroundColor: "#FF0000",
        hoverBackgroundColor: "#C40D0D",
        borderColor: "#FF0000",
        data: [<?= $data['jan48o']; ?>, <?= $data['feb48o']; ?>, <?= $data['mar48o']; ?>, <?= $data['apr48o']; ?>, <?= $data['may48o']; ?>, <?= $data['jun48o']; ?>, <?= $data['jul48o']; ?>, <?= $data['aug48o']; ?>, <?= $data['sep48o']; ?>, <?= $data['oct48o']; ?>, <?= $data['nov48o']; ?>, <?= $data['dec48o']; ?>],
      }
      
      ],
      },
      options: {
      maintainAspectRatio: false,
      layout: {
        padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
        }
      },
      scales: {
        xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 25,
        }],
        yAxes: [{
        ticks: {
          min: 0,
          max: 500,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
          return '' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel) + ' Kes';
        }
        }
      },
      }
    });
      
      
  </script>
  
  
 <script>
 // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Kuala Lumpur", "Putrajaya", "Labuan"],
    datasets: [{
      data: [<?= $kualalumpur; ?>, <?= $putrajaya; ?>, <?= $labuan; ?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});



  </script>

</body>

</html>
