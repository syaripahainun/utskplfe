<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io"></a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="cookie.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<script src="../assets/plugins/chart.js/Chart.bundle.js"></script>
<!-- chart -->
<script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>
<script src="../assets/plugins/chart.js/Chart.js"></script>
<script src="../assets/plugins/chart.js/Chart.min.js"></script>
<script>

    $(document).ready(function() {
        console.log('log')
        var nama = getCookie("name");
        $("#nameuser").text(nama);

        $.get("http://localhost:8000/companycount", function(data, status){
            $.each(data.data.companies, function(index, value) {
              $("#companies").text(value.total +' Data')
            });
        });

        $.get("http://localhost:8000/outletcount", function(data, status){
            $.each(data.data.outlets, function(index, value) {
              $("#outlets").text(value.total +' Data')
            });
        });

        $.get("http://localhost:8000/devicecount", function(data, status){
            $.each(data.data.devices, function(index, value) {
              $("#devices").text(value.total +' Data')
            });
        });

        $.get("http://localhost:8000/transactioncount", function(data, status){
            $.each(data.data.transactions, function(index, value) {
              $("#transactions").text(value.total +' Data')
            });
        });
        showchart();
        showgraph();
    });

    $("#tmblLogout").click(function(){
        if(confirm("Are you sure?")){
          $.get("http://localhost:8000/logout", function(data, status){
            setCookie("api_token", "", -1);
            setCookie("name", "", -1);
            setCookie("type", "", -1);
            setCookie("id", "", -1);
            window.location.href="../index.php";
            alert("Anda Berhasil Keluar");
          });
        }
      });

    function showchart(){
      //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
      var donutData        = {
        labels: [
            'Basic', 
            'Free',
            'Trial', 
            'Pro',
        ],
        datasets: [
          {
            data: [1,11,0,1],
            backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
          }
        ]
      }
      var pieData        = donutData;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions      
      })
    }

    function showgraph(){
      //---------------------
      //- STACKED BAR CHART -
      //---------------------
      var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
      var areaChartData = {
        labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [
          {
            label               : '2018',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [3, 3, 4, 4, 4, 6, 6, 6, 6, 6, 5, 5, ]
          },
          {
            label               : '2019',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [5, 5, 5, 7, 7, 7, 7, 10, 10, 8, 6, 6, ]
          },
        ]
      }
      var stackedBarChartData = jQuery.extend(true, {}, areaChartData)

      var stackedBarChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        scales: {
          xAxes: [{
            stacked: true,
          }],
          yAxes: [{
            stacked: true
          }]
        }
      }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar', 
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  }

    function showgraph2()
    {
        var areaChartCanvas = $('#companiesChart').get(0).getContext('2d')
        $.get("http://localhost:8000/companycount", function(data, status){
            $.each(data.data.companies, function(index, value) {

        var areaChartData = {
          labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          datasets: [
            {
              label               : '2018',
              backgroundColor     : 'rgba(60,141,188,0.9)',
              borderColor         : 'rgba(60,141,188,0.8)',
              pointRadius          : false,
              pointColor          : '#3b8bba',
              pointStrokeColor    : 'rgba(60,141,188,1)',
              pointHighlightFill  : '#fff',
              pointHighlightStroke: 'rgba(60,141,188,1)',
              data                : [value.total1, value.total2, value.total3, value.total4, value.total5, value.total6, value.total7, value.total8, value.total9, value.total10, value.total11, value.total12]
            },
          ]
        }

        var areaChartOptions = {
          maintainAspectRatio : false,
          responsive : true,
          legend: {
            display: false
          },
          scales: {
            xAxes: [{
              gridLines : {
                display : false,
              }
            }],
            yAxes: [{
              gridLines : {
                display : false,
              }
            }]
          }
        }
        // This will get the first returned node in the jQuery collection.
            var areaChart = new Chart(areaChartCanvas, { 
              type: 'line',
              data: areaChartData, 
              options: areaChartOptions
            })
        });
    });
}

    function showgraph1()
    {
        
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        $.get("http://localhost:8000/sumfinalamount", function(data, status){
            $.each(data.data.transactions, function(index, value) {
        
        var areaChartData = {
        labels  : ['January','February','March','April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [
            {
            label               : '2018',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [value.total1, value.total2, value.total3, value.total4, value.total5, value.total6, value.total7, value.total8, value.total9, value.total10, value.total11, value.total12]
            },
        ]
        }

        
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        
        barChartData.datasets[0] = temp0
        

        var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
        }

        var barChart = new Chart(barChartCanvas, {
        type: 'bar', 
        data: barChartData,
        options: barChartOptions
        })
    });
});

}

</script>
</body>
</html>


    
 

  