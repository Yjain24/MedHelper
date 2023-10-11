<?php
$servername ='localhost';
$username='root';
$password='';
$databasename='m_db';

$connection=mysqli_connect($servername, $username, $password, $databasename);
$sql = "SELECT * FROM info";
$result = mysqli_query($connection, $sql);
?>
<DOCtype html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
<h1><a style="text-decoration:none;color:black;" href="/medical/homee.php">Patients</a></h1>
<h3>Dashboard/patients</h3>
<button><a style="text-decoration:none;color:black;" href="i.php">New paitent</a></button><br>
<div class="table-responsive">
    <div class="table">
    <table id='myTable' class="table table-bordered table-striped table-hover">
    <thead >
        <tr>
            <th>id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Age</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Phone number</th>
            <th>Guardian's number</th>
            <th>Email</th>
      
            <th>visit</th>

         </tr>
    </thead>
    <?php
     while($row = $result -> fetch_assoc()):
     ?>
     <tr>
     <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['First name'] ?></td>
                            <td><?php echo $row['Last name'] ?></td>
                            <td><?php echo $row['Age'] ?></td>
                            <td><?php echo $row['DOB'] ?></td>
                            <td><?php echo $row['Gender'] ?></td>
                            <td><?php echo $row['Class'] ?></td>
                            <td><?php echo $row['Phone number'] ?></td>
                            <td><?php echo $row["Guardian's number"] ?></td>
                            <td><?php echo $row["Email"] ?></td>
                           
                            <td><a href="visit.php">click here</a></td>

     </tr>
     <?php endwhile ?>
</table>
    

    </div>
</div>

</body>
</html>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>