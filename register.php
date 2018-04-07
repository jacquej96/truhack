
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CS Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <div class="container-fluid p-0" >

      <section class="tinder-section p-1 p-lg-5 d-flex d-column" style="width: 100%;">
          <div class="tablehold" id="table">
             <div class="subheading mb-5" style="font-weight:bold; letter-spacing: 2px;padding-top: 10px;">REGISTER</div>
                 <form action="process.php" method="post">
                    Full Name:<br/>
                    <input type="text" name="fullname" pattern="^[a-zA-Z \-]+$" title="Please use alphabetic characters, hyphens and spaces." required="required"/><br/>
                    Email:<br/>
                    <input type="email" name="email" pattern="^[^@\s]+@[^@\s]+\.[^@\s]+$" title="Please input a valid email address. You will need this for others to contact you." required="required" /><br/>
                    Password:<br/>
                    <input id="eventID" type="text" name="password" maxlength="10"  pattern="^[a-zA-Z0-9 .+\-]+$" title="Alphanumeric and basic chars like hyphens and pluses supported." required="required" /><br/>
                    Major: Minor:<br/>
                    <input type="text" name="major" pattern="^[a-zA-Z \-]+$" title="Please use alphabetic characters, hyphens and spaces." />
                    <input type="text" name="minor" pattern="^[a-zA-Z \-]+$" title="Please use alphabetic characters, hyphens and spaces." /><br/>
                    Expected graduation date: <br/>
                    <input type="date" name="date" title="Please guess if you do not know." required="required"/><br/>
                    Below, input the credits you need for A courses, for B courses, for C courses, for General courses (non A B C), and for Seminar courses (may be 0, 1, or 2 only). Please do these in order.<br/>
                    <input type="number" class="cred" name="A"  title="A credits" required="required" value="0"/>
                    <input type="number" class="cred" name="B" title="B credits" required="required" value="0"/>
                    <input type="number" class="cred" name="C"  title="C credits" required="required" value="0"/>
                    <input type="number" class="cred" name="G" title="General credits" required="required" value="0"/>
                    <input type="number" class="cred" name="S" title="Seminars.Only 0 1 or 2 are valid " pattern="^(0 | 1 | 2)?$" required="required" value="0"/><br/>
                    <input class="inputbutton" type="submit" value="Submit"/>
                </form>
          </div>

    

      </section>


  </div>


    
  </body>

</html>
