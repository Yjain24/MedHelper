<?php

function vinfo(){
    $servername ='localhost';
    $username='root';
    $password='';
    $databasename='m_db';

    $connection=mysqli_connect($servername, $username, $password, $databasename);

    if(!$connection){
        die('connection un: '.mysqli_connect_error());
        }
    $name=$_POST['name'];
    $sql="SELECT * FROM `visit_history` WHERE `Fname` = 'Yash'";
    if (mysqli_query($connection,$sql)) {
        echo '';
    }else{
        echo 'error '.$sql.mysqli_error($connection);
    }

    mysqli_close($connection);

}

if(isset($_POST['submit-info'])){
    vinfo();
}
?>