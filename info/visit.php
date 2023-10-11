<DOCtype html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        
        <style>
         body{
                font-family: 'Roboto', sans-serif;
            }
            table, tr, td,th{
                padding:12px;
            }
            
        </style>
      

    </head>
    <body>
        <h1><a style="text-decoration:none;color:black;" href="/medical/homee.php">Visit history</a></h1>
        <h3>Dashboard/visithistory</h3>
        <button> <a style="text-decoration:none;" href="visitform.php">New visit</a></button>
        <button><a style="text-decoration:none;" href="individual.php">individual</a></button>

       
    <!-- <div style="margin-left:300px;"> -->
        
        <?php

            $servername ='localhost';
            $username='root';
            $password='';
            $databasename='m_db';

            $connection=mysqli_connect($servername, $username, $password, $databasename);
            $sql = "SELECT * FROM visit_history";
            $result = mysqli_query($connection, $sql);
            $rowCount = mysqli_num_rows($result);
         
            if($rowCount>0){
                echo "
                <table id='myTable'> 
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Class</th>
                        <th>Start time</th>
                        <th>End time</th>
                        <th>Visit purpose</th>
                        <th>medicine given</th>
            
               

                        </tr>
                    
                    </thead>
                
                
                
                ";
            }
        
        ?>
        <?php
        while($row=$result -> fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['Fname'] ?></td>
                <td><?php echo $row['Lname'] ?></td>
                <td><?php echo $row['Class'] ?></td>
                <td><?php echo $row['Start time'] ?></td>
                <td><?php echo $row['End time'] ?></td>
                <td><?php echo $row['Visit'] ?></td>
                <td><?php echo $row['Medicine'] ?></td>
             
               

    </tr>
    <?php endwhile ?>
        </table>
    </div>
    </body>
</html>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>