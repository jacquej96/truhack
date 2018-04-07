<?php

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

            $count = mysql_num_rows($stmt);
            if($count > 1){
              header("Location: main.php");
            }
          }
          catch(PDOException $e)
          {
          echo "Error: " . $e->getMessage();
          }

          // end the DB connection.
          $conn = null;
       header("Location: register.php");

    ?>
