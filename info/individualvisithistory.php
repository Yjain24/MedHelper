<DOCtype html>
<html>
<head>
</head>
<body>  

    <?php
        require_once 'f.php';
        
    
         $name=$_POST['name'];
         $servername ='localhost';
         $username='root';
         $password='';
         $databasename='m_db';

         $connection=mysqli_connect($servername, $username, $password, $databasename);
                 
         $sql = "SELECT * FROM `visit_history` WHERE `Fname` = '$name'";
         $result = mysqli_query($connection, $sql);
         $rowCount = mysqli_num_rows($result);
         if($rowCount>0){
            echo "
            <table>
                <thead>
                    <tr>
                    <th>id</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Class</th>
                    <th>Start time</th>
                    <th>End time</th>
                    <th>Visit purpose</th>
                    <th>medicine </th>
                   
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

   
</body>
</html>