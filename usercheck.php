
<?php
session_start(); 
          $email = $_POST['email'];
          $password = $_POST['password'];

 


          try {
            $conn = new PDO("mysql:host=mysql.truman.edu;dbname=cef6418CS315", "cef6418", "ohbiethe");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT *
            FROM studentHack
            WHERE email = :email AND password = :password");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            $id = 0; 
            while( $row = $stmt->Fetch(PDO::FETCH_ASSOC))
          {
            $id = $row['id']; 
            $fullname = $row['name'];
            $major = $row['major'];
            $minor = $row['minor']; 
            $datee = $row['graduation'];
            }





            if($id){
               $_SESSION['fullname'] = $fullname; 
                $_SESSION['email'] = $email; 
                $_SESSION['major'] = $major; 
                $_SESSION['minor'] = $minor; 
                $_SESSION['datee'] = $datee; 
              header("Location: main.php");
            }
            else {
              header("Location: register.php");
            }
          }
          catch(PDOException $e)
          {
          echo "Error: " . $e->getMessage();
          }
          // end the DB connection.
          $conn = null;
    ?>
