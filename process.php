<?php


        session_start(); 
          $fullname = $_POST['fullname'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $major = $_POST['major'];
          $minor = $_POST['minor']; 
          $datee = $_POST['date']; 
          $A = $_POST['A']; 
          $B = $_POST['B']; 
          $C = $_POST['C']; 
          $G = $_POST['G']; 
          $S = $_POST['S']; 


  $_SESSION['fullname'] = $fullname; 
  $_SESSION['email'] = $email; 
  $_SESSION['major'] = $major; 
  $_SESSION['minor'] = $minor; 
  $_SESSION['datee'] = $datee; 




          try {
          $conn = new PDO("mysql:host=mysql.truman.edu;dbname=cef6418CS315", "cef6418", "ohbiethe");
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $stmt = $conn->prepare("INSERT INTO studentHack (name, email, password, Acred, Bcred, Ccred, general, major, minor, graduation, Scred)
          VALUES (:fullname, :email, :password, :A, :B, :C, :G, :major, :minor, :datee, :S)");
          $stmt->bindParam(':fullname', $fullname);
          $stmt->bindParam(':email', $email);
          $stmt->bindParam(':password', $password);
          $stmt->bindParam(':A', $A);
          $stmt->bindParam(':B', $B);
          $stmt->bindParam(':C', $C);
          $stmt->bindParam(':G', $G);
          $stmt->bindParam(':major', $major);
          $stmt->bindParam(':minor', $minor);
          $stmt->bindParam(':datee', $datee);
          $stmt->bindParam(':S', $S);


          $stmt->execute();
          }
          catch(PDOException $e)
          {
          echo "Error: " . $e->getMessage();
          }


          // end the DB connection.
          $conn = null;
       header("Location: main.php");

 

    ?>