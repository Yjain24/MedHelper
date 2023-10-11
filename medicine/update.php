<?php

function updateRecord(){
    $servername ='localhost';
            $username='root';
            $password='';
            $databasename='m_db';

            $connection=mysqli_connect($servername, $username, $password, $databasename);


            $id=$_POST['update-ID'];
            $Name=$_POST['update-name'];
            $Condition=$_POST['update-condition'];
            $Description=$_POST['update-description'];
            $sql = "UPDATE `medicines` SET `Name`='$Name',`Medical condition`='$Condition',`Descritpion`='$Description' WHERE id='$id'" ;
            $updateQuery = mysqli_query($connection, $sql); //execute our SQL query
            if(!$updateQuery){
            echo 'error '.$sql.mysqli_error($connection);
            } mysqli_close($connection);
            header('location: index.php');
           }if(isset($_POST['submit-update'])){
             updateRecord();}


?>