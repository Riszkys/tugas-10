<?php
include('koneksi.php');
$data = mysqli_query($koneksi, "SELECT * FROM covid_stats");
$nama_produk = array();
$jumlah_produk = array();
while ($row = mysqli_fetch_array($data)) {
    $nama_produk[] = $row['Country'];
    $jumlah_produk[] = $row['TotalTests'];
}
?>
<!doctype html>
<html>

<head>
    <title>Pie Chart Dan Bar Chart</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="content">
        <div style="width: 30%; display: inline-block;">
            <p style="padding-left:7rem ;">Line Chart</p>
            <canvas id="chart-area"></canvas>
        </div>
        <div style="display: inline-block;">
            <p style="padding-left:7rem ;">Bar Chart</p>
            <canvas id="chart-area2"></canvas>
        </div>
        <div style="width: 30%; display: inline-block;">
            <p style="padding-left:7rem ;">pie Chart</p>
            <canvas id="chart-area3"></canvas>
        </div>
        <div style="width: 30%; display: inline-block;">
            <p style="padding-left:7rem ;">Doughnut Chart</p>
            <canvas id="chart-area4"></canvas>
        </div>
    </div>
    <script>
        var config = {
            type: 'line',
            data: {
                datasets: [{
                    data: <?php echo json_encode($jumlah_produk); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(219, 0, 91, 0.2)',
                        'rgba(0, 0, 0, 0.2)',
                        'rgba(157, 178, 191, 0.2)',
                        'rgba(247, 147, 39, 0.2)',
                        'rgba(100, 56, 67, 0.2)',
                        'rgba(131, 118, 79, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(219, 0, 91, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(157, 178, 191, 1)',
                        'rgba(247, 147, 39, 1)',
                        'rgba(100, 56, 67, 1)',
                        'rgba(131, 118, 79, 1)'
                    ],
                    label: 'Total Tests'
                }],
                labels: <?php echo json_encode($nama_produk); ?>
            },
            options: {
                responsive: true
            }
        };

        var config2 = {
            type: 'bar',
            data: {
                datasets: [{
                    data: <?php echo json_encode($jumlah_produk); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(219, 0, 91, 0.2)',
                        'rgba(0, 0, 0, 0.2)',
                        'rgba(157, 178, 191, 0.2)',
                        'rgba(247, 147, 39, 0.2)',
                        'rgba(100, 56, 67, 0.2)',
                        'rgba(131, 118, 79, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(219, 0, 91, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(157, 178, 191, 1)',
                        'rgba(247, 147, 39, 1)',
                        'rgba(100, 56, 67, 1)',
                        'rgba(131, 118, 79, 1)'
                    ],
                    label: 'Total Tests'
                }],
                labels: <?php echo json_encode($nama_produk); ?>
            },
            options: {
                responsive: true
            }
        };
        var config3 = {
            type: 'pie',
            data: {
                datasets: [{
                    data: <?php echo json_encode($jumlah_produk); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(219, 0, 91, 0.2)',
                        'rgba(0, 0, 0, 0.2)',
                        'rgba(157, 178, 191, 0.2)',
                        'rgba(247, 147, 39, 0.2)',
                        'rgba(100, 56, 67, 0.2)',
                        'rgba(131, 118, 79, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(219, 0, 91, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(157, 178, 191, 1)',
                        'rgba(247, 147, 39, 1)',
                        'rgba(100, 56, 67, 1)',
                        'rgba(131, 118, 79, 1)'
                    ],
                    label: 'Total Tests'
                }],
                labels: <?php echo json_encode($nama_produk); ?>
            },
            options: {
                responsive: true
            }
        };
        var config4 = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: <?php echo json_encode($jumlah_produk); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(219, 0, 91, 0.2)',
                        'rgba(0, 0, 0, 0.2)',
                        'rgba(157, 178, 191, 0.2)',
                        'rgba(247, 147, 39, 0.2)',
                        'rgba(100, 56, 67, 0.2)',
                        'rgba(131, 118, 79, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(219, 0, 91, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(157, 178, 191, 1)',
                        'rgba(247, 147, 39, 1)',
                        'rgba(100, 56, 67, 1)',
                        'rgba(131, 118, 79, 1)'
                    ],
                    label: 'Total Tests'
                }],
                labels: <?php echo json_encode($nama_produk); ?>
            },
            options: {
                responsive: true
            }
        };

        window.onload = function() {
            var ctx = document.getElementById('chart-area').getContext('2d');
            window.myBar = new Chart(ctx, config);

            var ctx2 = document.getElementById('chart-area2').getContext('2d'); // Corrected the ID
            window.myBar = new Chart(ctx2, config2); // Corrected the variable name

            var ctx3 = document.getElementById('chart-area3').getContext('2d'); // Corrected the ID
            window.myBar = new Chart(ctx3, config3); // Corrected the variable name

            var ctx4 = document.getElementById('chart-area4').getContext('2d'); // Corrected the ID
            window.myBar = new Chart(ctx4, config4); // Corrected the variable name

        };
    </script>
</body>

</html>