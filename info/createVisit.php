<DOCtype html>
<html>
    <head></head>
    <body>
        <?php require_once 'visitform.php' ?>

        <?php
            function createVisit(){
                $servername ='localhost';
                $username='root';
                $password='';
                $databasename='m_db';
    
                $connection=mysqli_connect($servername, $username, $password, $databasename);
                if(!$connection){
                    die('connection un: '.mysqli_connect_error());
                }
                $Firstname=$_POST['first_name'];
                $Lastname=$_POST['last_name'];
                $Class=$_POST['class'];
                $Stime=$_POST['stime'];
                $Endtime=$_POST['etime'];
                $purpose=$_POST['visit'];
                $med=$_POST['med'];


                $sql= "INSERT INTO `visit_history`( `Fname`, `Lname`, `Class`, `Start time`, `End time`, `Visit`, `Medicine`) VALUES ('$Firstname', '$Lastname', '$Class', '$Stime', '$Endtime', '$purpose', '$med')";

                if (mysqli_query($connection,$sql)) {
                    echo '';
                }else{
                    echo 'error '.$sql.mysqli_error($connection);
                }
    
                mysqli_close($connection);
    
                header('location: visit.php');
            }
        
        
        
        
        
        
        if(isset($_POST['visitButton'])){
            createVisit();
        }
        ?>


        
    </body>
</html>