<!DOCtype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php require_once 'i.php' ?>

    <?php
 
        function addPatient(){
            $servername ='localhost';
            $username='root';
            $password='';
            $databasename='m_db';

            $connection=mysqli_connect($servername, $username, $password, $databasename);
            if(!$connection){
                die('connection un: '.mysqli_connect_error());
            }

            $Firstname = $_POST['Fname'];
            $Lastname =$_POST['Lname'];
            $age=$_POST['age'];
            $DOB=$_POST['DOB'];
            $Gender=$_POST['gender'];
            $Class=$_POST['class'];
            $Email=$_POST['email'];
            $phone=$_POST['ph'];
            $gnumber=$_POST['gh'];
          






            $sql="INSERT INTO `info`( `First name`, `Last name`, `Age`, `DOB`, `Gender`, `Class`, `Phone number`, `Guardian's number`, `Email`) VALUES ('$Firstname','$Lastname','$age','$DOB','$Gender','$Class','$phone','$gnumber','$Email')";

            if (mysqli_query($connection,$sql)) {
                echo '';
            }else{
                echo 'error '.$sql.mysqli_error($connection);
            }

            mysqli_close($connection);

            header('location: p2.php');
        };
            
        
        
        
        if(isset($_POST['patientButton'])){
            addPatient();
        }
 
 
    ?>
    </body>
</html>



