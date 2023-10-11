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
    <?php require_once 'patientform.php' ; ?>
    <div class="container">
        <div class="title">Patient Registration</div>
        <div class="content">
            <form action="patientform.php" method='POST'>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" placeholder="Enter firstname" name="Fname"  required >
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" placeholder="Enter lastnmae" name="Lname" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="Enter your email" name="email" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="tel" placeholder="Enter your number" minlength="10" maxlength="10" name="ph" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Guardian's number</span>
                        <input type="tel" placeholder="Enter the number" minlength="10" maxlength="10" name="gh" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Age</span>
                        <input type="number" placeholder="Enter your age" name="age" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Date of birth</span>
                        <input type="text" placeholder="Date of birth" name="DOB" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Class</span>
                        <input type="number" placeholder="class" name="class" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Gender</span>
                        <input type="text" placeholder="gender" name="gender" required >
                    </div>
                    
                </div>
               
                <div class="button">
                    <input type="submit" value=" Add Patient" name="patientButton">
                </div>
            </form>
            <button><a style="text-decoration:none;color:black; "  href="/medical/homee.php">Dashboard</a></button>
        </div>
    </div>

    

</body>

</html>