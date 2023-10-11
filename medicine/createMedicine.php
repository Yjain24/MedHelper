<?php
                    function createRecord(){
                        $servername ='localhost';
                        $username='root';
                        $password='';
                        $databasename='m_db';

                        $connection=mysqli_connect($servername, $username, $password, $databasename);

                        if(!$connection){
                            die('connection un: '.mysqli_connect_error());
                        }

                        // storing user input values

                        $medicineName=$_POST['Medicine_name'];
                        $medicalCondition=$_POST['Mcondition'];
                        $description=$_POST['Mdescription'];
                        $sql = "INSERT INTO `medicines`( `Names`, `Medical condition`, `Descritpion`) VALUES ('$medicineName', '$medicalCondition', '$description')";
                        if (mysqli_query($connection,$sql)) {
                            echo '';
                        }else{
                            echo 'error '.$sql.mysqli_error($connection);
                        }
                        mysqli_close($connection);
                        header('location: index.php');
                    }
                    if(isset($_POST['submit-create'])){
                        createRecord();
                    }

                ?>