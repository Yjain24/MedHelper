
<!DOCtype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="icons/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
         body{
                font-family: 'Roboto', sans-serif;
            }
        
            /* The sidebar menu */
.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 160px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color:rgb(48,108,240) ;
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
  margin-top: 55px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Style page content */
.main {
  margin-left: 160px; /* Same as the width of the sidebar */
  padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
        </style>
    </head>
    <body>

   





        <!-- Side navigation -->
        <!-- <div class="sidenav">
        <a href="#">Dashboard</a>
        <a href="#">Patients</a>
        <a href="#">Add patient</a>
        <a href="#">Medicine</a>
        <a href="login/loginform.php">Logout</a>
        </div> -->

        <!-- Page content -->
        <!-- <div class="main">

        </div> -->
        




  <div class="container">
    <h1 style="margin-top:50px; margin-left:550px">MedHelper</h1>
  <div style="margin-top: 100px; margin-left:150px;" class="row">
    <div class="col-sm">
    <a style="height:100px; width: 200px; font-size:25px"   class="btn btn-primary " href="info/p2.php"><i class="fas fa-users"></i><br>Patients</a>
    </div>
    <div class="col-sm">
    <a style="height:100px; width: 200px; font-size:25px" class="btn btn-primary " href="info/i.php"><i class="fas fa-user-plus"></i><br>Add patient</a>
      
    </div>
    <div class="col-sm">
    <a style="height:100px; width: 200px; font-size:25px" class="btn btn-primary" href="medicine/index.php"><i class="fas fa-book-medical"></i><br>Medicines</a>
    </div>
  </div>

  <div style="margin-top: 100px;margin-left:150px;" class="row">
    <div class="col-sm">
    <a style="height:100px; width: 200px; font-size:25px" class="btn btn-primary" href="info/visit.php"><i class="fas fa-book-medical"></i><br>Visit history</a><br>
    </div>
    <div class="col-sm">
    <a  style="height:100px; width: 200px; font-size:25px" class="btn btn-primary" href="pdf/index.php"><i class="fas fa-book-medical"></i><br>Clinic visit</a>
      
    </div>
    <div class="col-sm">
   <a style="height:100px; width: 200px; font-size:25px" class="btn btn-primary" href="charts/chart222.php"><i class="fas fa-book-medical"></i><br>Data analysis</a>
    </div>
  </div>
</div>

        

        
</body>
</html>
    
