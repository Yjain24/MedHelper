<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-12 d-flex justify-content-center">
            <div class=" col-md-5 ">
                <form action="generate.php" method="POST">
                    <label for="">Clinic/Hosital name</label>
                    <input type="text" class="form-control" name="clinic" id="" required>
                    <label for="">Firstname</label>
                    <input type="text" class="form-control" name="fname" id="" required>
                    <label for="">Lastname</label>
                    <input type="text" class="form-control" name="lname" id="" required>
                    <label for="">Visit purpose</label>
                    <input type="text" class="form-control" name="purpose" id="" required>
                    <label for="">Dr name</label>
                    <input type="text" class="form-control" name="dname" id="" required>
                    <label for="">Cost of visit(rupees)</label>
                    <input type="text" class="form-control" name="cost" id="" required>
                    <label for="">Visit date</label>
                    <input type="date" class="form-control" name="vdate" id="" >
                    <label for="">Next appointment</label>
                    <input type="date" class="form-control" name="date" id="" >
                    <input type="submit" value="generate pdf" name="create" id="">
                </form>
            </div>
        </div>
    </div>
</body>
</html>