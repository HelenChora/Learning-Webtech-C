<?php
    session_start();
    $email = $_POST['email'];

  

    if($email == ""){
        header('location: Forgot Password.php?err=null');

    }
    
    else if($_SESSION['user']['email']== $email==true){
      //  $_SESSION['status'] = true;
        setcookie('status', 'true', time()+3600, '/');
        header('location: dashboard.php');
    }

    else if($_SESSION['user']['email']== $email==false ){
        //  $_SESSION['status'] = true;
          setcookie('status', 'true', time()+60, '/');
          header('location: Dashboard.php');
      }

    
    else{
        header('location: Forgot Password.php?err=invalid');
    }
