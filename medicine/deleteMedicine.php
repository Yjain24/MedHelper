<?php


function deleteRecord(){
    $servername ='localhost';
    $username='root';
    $password='';
    $databasename='m_db';

    $connection=mysqli_connect($servername, $username, $password, $databasename);

    $id = $_POST['delete-id'];
    $sql = "DELETE FROM `medicines` WHERE id='$id'";
    $deleteQuery = mysqli_query($connection,$sql);
    if(!$deleteQuery){
        echo 'error '.$sql.mysqli_error($connection);
    }
        mysqli_close($connection);
        header('location: index.php');
}
if(isset($_POST['submit-delete'])){
    deleteRecord();
}

?>