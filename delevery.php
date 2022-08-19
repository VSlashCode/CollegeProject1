
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN PAGE</title>
    <!-- head link important  -->
    <link rel="stylesheet" href="Bootstrap/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/mainstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!-- fonticonlink -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- head links ends -->

</head>

<body>


    <style>
        body
        {
            background-color: aliceblue;
        }
         
       .inputform
       {
        padding: 30px;
        margin-top:150px;
        width:50%;
       }

        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: beige;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav button {
            margin-top: 20px;
          
            text-decoration: none;
            padding: 5px;
            width:100%;
        }

        .sidenav button:hover {
            color: #f1f1f1;
        }

    

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
    <div class="sidenav">
        
    <button onclick="location.href='mainpage.php'" class="btn btn-success block" onclick="myFunction()">HOME</button>
        <button onclick="location.href='newcustomer.php'" class="btn btn-success block">NEW CUSTOMER</button>
        <button onclick="location.href='quatation.php'" class="btn btn-success">QUATATAION</button>
        <button onclick="location.href='addstock.php'" class="btn btn-success">ADD STOCK</button>
        <button onclick="location.href='checkstock.php'" class="btn btn-success">CHECK STOCK</button>
        <button onclick="location.href='cancelbooking.php'" class="btn btn-success">CANCEL BOOKING</button>
        <button onclick="location.href='servicing.php'" class="btn btn-success">SERVICING</button>
        <button onclick="location.href='delevery.php'" class="btn btn-success">DELIVERY</button>
        <button class="btn btn-success" onclick="close()">LOGOUT</button>

    </div>

    <div class="main">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 inputform">
                   <h2> THIS PAGE IS IN UNDER CONSTURUCTION ....</h2>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>

    </div>


    <!-- new customer page open  -->

    <script>
        function myFunction() {
            var txt;
            if (confirm("DO YOU WANT TO CLOSE THIS PROJECT...!")) {
                window.close();
            }

        }
    </script>



</body>

</html>