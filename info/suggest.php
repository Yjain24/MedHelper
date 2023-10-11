<DOCtype html>
<html>
<head>
</head>
<body>  

    <?php
        require_once 'suggestform.php';
        
    
         $name=$_POST['name'];
         $servername ='localhost';
         $username='root';
         $password='';
         $databasename='m_db';

         $connection=mysqli_connect($servername, $username, $password, $databasename);
                 
         $sql = "SELECT * FROM `medicines` WHERE `Medical condition` = '$name'";
         $result = mysqli_query($connection, $sql);
         $rowCount = mysqli_num_rows($result);
         if($rowCount>0){
            echo "
            <table>
                <thead>
                    <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Condition</th>
                    <th>Description</th>

                    </tr>
                
                </thead>
            
            
            
            ";
        }

    
    ?>
      <?php
        while($row=$result -> fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['Names'] ?></td>
                <td><?php echo $row['Medical condition'] ?></td>
                <td><?php echo $row['Descritpion'] ?></td>
               
    </tr>
    <?php endwhile ?>
        </table>

   
</body>
</html>