<!DOCtype html>
<html>
    <head>
        <title>Medical</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <style>

            body{
                font-family: 'Roboto', sans-serif;
            }
            #create-form, #update-form, #delete-form{
                display: none;
            }

              .main-div{
                  width: 80vw;
                  margin: 0 auto;
              } 
              h2{
                  text-align: center;
              }

              table{
                  margin: 15px auto;
                  width: 50vw;
                  text-align: center;
              }
              table tr td{
                  padding: 12px;
              }
              .content-wrapper{
                  width: 100%;
                  margin: 0 auto;
                  text-align: center;
              }

              #create-button, #edit-button, #delete-button{
                  width: 140px;
                  height: 37.5px;
                  background-color: blue;
                  color: #FFFFAA;
                  border-radius: 4px;
                  border: 1.5px solid black;
                  letter-spacing: 1.5px;
                  cursor: pointer;
              }

              .small-button{
                  width: 76px;
                  height: 30px;
                  background-color: blue;
                  color: #FFFFAA;
                  border-radius: 2px;
                  border: none;
                  cursor: pointer;
              }

              input[type='text']{
                  margin: 6px;
                  width: 260px;
                  height: 32;
                  padding: 3px;
              }



        </style>
    </head>
    <body>
              <button><a href="../info/suggest.php">Suggest medicine</a></button>
            <div class="main-div">
            <?php require_once 'create.php' ;?>
            <div>
                <h2><a style="text-decoration:none;color:black;"  href="/medical/homee.php">Medicines</a></h2>
                <?php
                
                    $servername ='localhost';
                    $username='root';
                    $password='';
                    $databasename='m_db';

                    $connection=mysqli_connect($servername, $username, $password, $databasename);
                            
                    $sql = "SELECT * FROM medicines";
                    $result = mysqli_query($connection, $sql);
                    $rowCount = mysqli_num_rows($result);

                    if ($rowCount>0) {
                        echo "
                            <table>
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th> Condition</th>
                                        <th>Description</th>

                                    </tr>
                                </thead>
                            
                        ";
                    }
                
                ?>

                <?php
                    while($row = $result -> fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['Names'] ?></td>
                            <td><?php echo $row['Medical condition'] ?></td>
                            <td><?php echo $row['Descritpion'] ?></td>

                        </tr>
                    <?php endwhile ?>
                </table>
                <div class="content-wrapper">
                    <button id="create-button">Create record</button>
                    <button id="edit-button">Edit record</button>
                    <button id="delete-button">Delete record</button>

                    <form action="create.php" method="POST" id="create-form">
                        <input type="text" placeholder="Medicine name" name="Medicine_name"><br>
                        <input type="text" placeholder="Medical condition" name="Mcondition"><br>
                        <input type="text" placeholder="Description" name="Mdescription"><br>
                        <input type="submit" value="Save" name="submit-create" class="small-button">
                    </form>

                    <form action="update.php" method="POST" id="update-form">
                        <input type="text" placeholder="ID" name="update-ID"><br>
                        <input type="text" placeholder="Name" name="update-name"><br>
                        <input type="text" placeholder="Medical condition" name="update-condition"><br>
                        <input type="text" placeholder="Description" name="update-description"><br>
                        <input type="submit" value="Save" name="submit-update" class="small-button">
                    </form>

                    <form action="delete.php" method="POST" id="delete-form">
                        <input type="text" placeholder="enter id" name="delete-id" ><br>
                        <input type="submit" value = "Save" name="submit-delete" class="small-button">
                    </form>

                    

                    
                </div>

            </div>
            <script src='script.js'></script>
        </body>
    </html>
