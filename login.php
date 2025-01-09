<?php
  if (isset($_POST['user_name']) && isset($_POST['password'])) {
   include "../DB_connection.php";

    function validdate_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }



    if (empty($uname)) {
      $em  = "Username is required";
      header("Location: ../login.php?error=$em");
      exit;
    }else if (empty($pass)) {
      $em  = "Password is required";
      header("Location: ../login.php?error=$em");
      exit;
    }else if (empty($role)) {
      $em  = "An error Occurred";
      header("Location: ../login.php?error=$em");
      exit;

    


    }else {
          
          if($role == '1'){
            $sql = "SELECT * FROM admin 
                    WHERE username = ?";
            $role = "Admin";
          }else if($role == '2'){
            $sql = "SELECT * FROM teachers 
                    WHERE username = ?";
            $role = "Teacher";
          }else if($role == '3'){
            $sql = "SELECT * FROM students 
                    WHERE username = ?";
            $role = "Student";
          }else if($role == '4'){
            $sql = "SELECT * FROM registrar_office 
                    WHERE username = ?";
            $role = "Registrar Office";
          }
  
          $stmt = $conn->prepare($sql);
          $stmt->execute([$uname]);
  
          if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();
            $username = $user['username'];
            $password = $user['password'];
            
              if ($username === $uname) {
                if (password_verify($pass, $password)) {
                  $_SESSION['role'] = $role;
                  if ($role == 'Admin') {
                          $id = $user['id'];
                          $_SESSION['id'] = $id;
                          header("Location: ../admin/home.php");
                          exit();
                    
                      }else {
                        $em  = "Incorrect Username or Password";
                  header("Location: ../login.php?error=$em");
                  exit();
                      }
              
                }else {
                $em  = "Incorrect Username or Password";
              header("Location: ../login.php?error=$em");
              exit();
              }
              }else {
              $em  = "Incorrect Username or Password";
            header("Location: ../login.php?error=$em");
            exit();
            }
          }else {
            $em  = "Incorrect Username or Password";
          header("Location: ../login.php?error=$em");
          exit();

          }
          
    }
  
  

  }else{
    $em = "unknown error occured";
     header("Location:../login.php?error=$em");
     exit();
  }