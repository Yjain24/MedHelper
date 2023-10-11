<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background-color:white;
        }

        .container {
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }

        .container .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        

        .content form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        form .input-box span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: #9b59b6;
        }

        form .gender-details .gender-title {
            font-size: 20px;
            font-weight: 500;
        }

        form .category {
            display: flex;
            width: 80%;
            margin: 14px 0;
            justify-content: space-between;
        }

        form .category label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        form .category label .dot {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }

        #dot-1:checked~.category label .one,
        #dot-2:checked~.category label .two,
        #dot-3:checked~.category label .three {
            background: #9b59b6;
            border-color: #d9d9d9;
        }

        form input[type="radio"] {
            display: none;
        }

        form .button {
            height: 45px;
            margin: 35px 0
        }

        form .button input {
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: blue;
        }

        form .button input:hover {
            /* transform: scale(0.99); */
            background: blue;
        }

        @media(max-width: 584px) {
            .container {
                max-width: 100%;
            }

            form .user-details .input-box {
                margin-bottom: 15px;
                width: 100%;
            }

            form .category {
                width: 100%;
            }

            .content form .user-details {
                max-height: 300px;
                overflow-y: scroll;
            }

            .user-details::-webkit-scrollbar {
                width: 5px;
            }
        }

        @media(max-width: 459px) {
            .container .content .category {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <?php require_once 'createVisit.php' ; ?>
    <div class="container">
        <div class="title">New visit</div>
        <div class="content">
            <form action="visitform.php" method='POST'>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" placeholder="Enter first name " name="first_name" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" placeholder="Enter last name" name="last_name" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Class</span>
                        <input type="text" placeholder="Enter class" name="class" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Start time</span>
                        <input type="time" placeholder="Enter time" name="stime" required >
                    </div>
                    <div class="input-box">
                        <span class="details">End time</span>
                        <input type="time" placeholder="Enter time" name="etime" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Visit purpose</span>
                        <input type="text" placeholder="visit purpose" name="visit" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Medicine</span>
                        <input type="text" placeholder="Medicine given" name="med" required>
                    </div>
         
                     
                    
                </div>
               
                <div class="button">
                    <input type="submit" value=" Add visit" name="visitButton">
                </div>
            </form>
            <button><a style="text-decoration:none;color:black; "  href="/medical/homee.php">Dashboard</a></button>
        </div>
    </div>

    

</body>

</html>


<!-- 
<h1>Create new visit</h1>


<!-- <form action="visitform.php" method='POST'>
    <label for="label_name">First name:</label><br>
    <input type="text" name="first_name" id="label_name"><br>
    <label for="label_l">Last name:</label><br>
    <input type="text" name="last_name" id="label_l"><br>
    <label for="label_class">Class:</label><br>
    <input type="number" name="class" id="label_class"><br>
    <label for="label_time">Start time:</label><br>
    <input type="time" name="stime" id="labe_time"><br>
    <label for="label_etime">Start time:</label><br>
    <input type="time" name="etime" id="labe_etime"><br>
    <label for="label_visit">Visit purpose</label><br>
    <input type="text" name="visit" id="label_visit"><br>
    <label for="label_med">Medicine(s)</label><br>
    <input type="text" name="med" id="label_med"><br>
   
    <input type="submit" name="visitButton" id="">

</form> -->