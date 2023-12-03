<div class="row">
    <div class="row formtitle">
        <h1>BIỂU ĐỒ</h1>
    </div>
    <div class="row">
        <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
        </div>
        
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                // Set Data
                const data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng'],
                    <?php foreach ($thongke_chart as $tk) {
                        extract($tk);
                    echo "['$name', $soluong],";
                     } ?>
                ]);

                // Set Options
                const options = {
                    title: 'Số lượng sản phẩm theo danh mục ',
                    is3D: true
                };

                // Draw
                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);

            }
        </script>

    </div>
    <br>

    <br>
    <br>
    <div class="row">
        <div id="mycha" style="width:100%; width:800px; height:500px; align-items: center">
        </div>
        
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                // Set Data
                const data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượt xem'],
                    <?php foreach ($thongke_chart1 as $tk) {
                        extract($tk);
                    echo "['$name', $luotxem],";
                     } ?>
                ]);

                // Set Options
                const options = {
                    title: 'Số lượt xem của sản phẩm ',
                    is3D: true
                };

                // Draw
             
               
                const barchart = new google.visualization.BarChart(document.getElementById('mycha'));
                barchart.draw(data, options);

            }
        </script>

    </div>
</div>