<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
        $servername ='localhost';
        $username='root';
        $password='';
        $databasename='m_db';

        $connection=mysqli_connect($servername, $username, $password, $databasename);
        if(!$connection){
            die('connection un: '.mysqli_connect_error());
        }

        $email=$_POST['profile']
    
    ?>
    
</body>
</html>