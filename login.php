<?php
    session_start();
   
    include 'db.php';
    if(isset(($_POST['submit']))){
        $email= $_POST['email'];
        $password= $_POST['password'];

        $emailsearch= "select * from user_registration where email='$email'";
        $query= mysqli_query($con, $emailsearch);
        $emailcheck= mysqli_num_rows($query);
        if($emailcheck){
            $emailpass= mysqli_fetch_assoc($query);
            $dbpass= $emailpass['password'];
            $_SERVER['username']= $emailpass['username'];
            $passdequode= password_verify($password, $dbpass);
            if($passdequode){
                
                header('Location: Deshboard.php');
                
                
            }else{
                echo 'invalid password';
            }
        }else{
            echo 'plaese enter valid username or email';
        }
    }


   ?>