<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <title>SADGURU MOTOR</title>
</head>

<body>
  <style>
    body {
      font-family: 'Oswald', sans-serif;
      background-color: rgba(0, 255, 242, 0.847);
    }
  </style>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5"></div>
      <div class="col-sm-3">
        <img src="images/logo.png" alt="" srcset="">
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class=" col-sm-8 mainheading">
        <h1>SADGURU MOTARS</h1>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4 loginform">
        <form action="mainpage.php" method="post">
          <label for="">LOGIN ID : </label>
          <input type="text" name="loginid" required> <br> <br>
          <label for="">PASSKEY : </label>
          <input type="password" required name="passkey"> <br> <br>
          <button class="btn btn-success loginbtn"  value="Open Window" type="submit" onclick="openWin()">LOGIN</button>
          <button class="btn btn-danger" onclick="closeWindow()">CLOSE</button>
          <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">SignUp</button>
        </form>
        <br>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <i class='fas fa-phone-alt' style='font-size:30px;color:black'>+91 9309144577</i>
      </div>
    </div>
  </div>
  <div class="container">
    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <p>Some text in the modal.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
  </div>





  <script>
    function openWin() {
      var x = document.getElementById("loginid").value;
      var y = document.getElementById("passkey").value;
      if(x=='root' && y=='root')
      {
        this.close();
      window.open("mainpage.php",'_blank');
      }
    }
  </script>
</body>

</html>