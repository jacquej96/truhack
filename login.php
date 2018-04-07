<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Login </title>

    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <div class="container-fluid p-0" >

      <section class="tinder-section p-1 p-lg-5 d-flex d-column" style="width: 100%;">
          <div class="tablehold" id="table">
             <div class="subheading mb-5">Login</div>
                 <form action="process.php" method="post">
                    Email:<br/>
                    <input type="email" placeholder="Enter Email" name="email" required/><br/>
                    Password:<br/>
                    <input type="password" placeholder="Enter Password" name="password" required/> <br/>
                </form>
                <button class = "login-register" >Login</button>
                <button class = "login-register" >Register</button>
          </div>



      </section>

  </div>

  </body>

</html>
