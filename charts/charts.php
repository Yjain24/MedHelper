<?php    
        $servername ='localhost';
        $username='root';
        $password='';
        $databasename='m_db';

        $connection=mysqli_connect($servername, $username, $password, $databasename);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});

// Draw the pie chart and bar chart when Charts is loaded.
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

  var data = new google.visualization.DataTable();
  data.addColumn('string', 'condition');
  data.addColumn('number', 'Students');
  data.addRows([
    ['Fever', <?php $sql = "SELECT * FROM visit_history WHERE Visit='fever'";$result = mysqli_query($connection, $sql);$rowCount = mysqli_num_rows($result); echo $rowCount;  ?>],
          ['Headache',<?php $sql2 = "SELECT * FROM visit_history WHERE Visit='headache'"; $result2 = mysqli_query($connection, $sql2); $rowCount2 = mysqli_num_rows($result2);echo $rowCount2;?> ],
          ['Cold', <?php $sql3 = "SELECT * FROM visit_history WHERE Visit='Cold'";$result3 = mysqli_query($connection, $sql3);   $rowCount3 = mysqli_num_rows($result3);echo $rowCount3 ?>],

          ['Stomachache',<?php $sql4 = "SELECT * FROM visit_history WHERE Visit='Stomachache'";$result4 = mysqli_query($connection, $sql4); $rowCount4 = mysqli_num_rows($result4);echo $rowCount4; ?>],
          ['Bodyache',<?php $sql5 = "SELECT * FROM visit_history WHERE Visit='Bodyache'"; $result5 = mysqli_query($connection, $sql5);$rowCount5 = mysqli_num_rows($result5);echo $rowCount5 ?>]
  ]);
  var data2 = new google.visualization.DataTable();
  data2.addColumn('string', 'condition');
  data2.addColumn('number', 'number');
  data2.addRows([
    ['Crocin', <?php $sql = "SELECT * FROM visit_history WHERE Medicine='Crocin'";$result = mysqli_query($connection, $sql);$rowCountt = mysqli_num_rows($result); echo $rowCountt;  ?>],
          ['Aspirin',<?php $sql2 = "SELECT * FROM visit_history WHERE Medicine='aspirin'"; $result2 = mysqli_query($connection, $sql2); $rowCountt2 = mysqli_num_rows($result2);echo $rowCountt2;?> ],
          ['Digene', <?php $sql3 = "SELECT * FROM visit_history WHERE Medicine='digene'";$result3 = mysqli_query($connection, $sql3);   $rowCountt3 = mysqli_num_rows($result3);echo $rowCountt3 ?>],

          ['Ibuprofen',<?php $sql4 = "SELECT * FROM visit_history WHERE Medicine='ibuprofen'";$result4 = mysqli_query($connection, $sql4); $rowCountt4 = mysqli_num_rows($result4);echo $rowCountt4; ?>],
          ['Vicks',<?php $sql5 = "SELECT * FROM visit_history WHERE Medicine='vicks'"; $result5 = mysqli_query($connection, $sql5);$rowCountt5 = mysqli_num_rows($result5);echo $rowCountt5 ?>]
  ]);

  var piechart_options = {title:'Pie Chart: Medical condition and number of students',
                 width:500,
                 height:400};
  var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
  piechart.draw(data, piechart_options);

  var barchart_options = {title:'Barchart: Medicines',
                 width:500,
                 height:400,
                 legend: 'none'};
  var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
  barchart.draw(data2, barchart_options);
}
    

    </script>
   

</head>
<body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <!--Table and divs that hold the pie charts-->
    <table class="columns" style="margin-left:200px;margin-top:100px">
      <tr>
        <td><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
      </tr>
    </table>
    <div style="margin-left:205px; border-style:solid;width:320px">
    <?php if ($rowCount>$rowCount2 & $rowCount>$rowCount3 & $rowCount>$rowCount4 & $rowCount>$rowCount5) {
        echo $rowCount. " are suffering from fever";
    };
    if ($rowCount2>$rowCount & $rowCount2>$rowCount3 & $rowCount2>$rowCount4 & $rowCount2>$rowCount5) {
        echo " The most common medical issue currently is <b>headache</b>.";
        echo ' The causes might be: <br>
            - Stress <br>
            - Lack of sleep <br>
            - Fatigue <br>
            - Hunger <br>
            The solutions include:<br>
            - Increase magnesium intake<br>
            - Adequate sleep<br>
            - Nutritious food 
            '
            ;
    }
    if ($rowCount3>$rowCount & $rowCount3>$rowCount2 & $rowCount3>$rowCount4 & $rowCount3>$rowCount5) {
        # code...
    }
    if ($rowCount4>$rowCount & $rowCount4>$rowCount3 & $rowCount4>$rowCount2 & $rowCount4>$rowCount5) {
        # code...
    }
    if ($rowCount5>$rowCount & $rowCount5>$rowCount3 & $rowCount5>$rowCount4 & $rowCount5>$rowCount2) {
        # code...
    }
    ?>
    </div>
    
   
</body>
</html>