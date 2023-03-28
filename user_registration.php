<!DOCTYPE html>

<html lang="en-US" class="no-js no-svg">

<head>

    <meta charset="UTF-8">

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="format-detection" content="telephone=no">

    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Lilita+One&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        crossorigin="anonymous"></script>
    <title>Sign In | Padigree</title>
<style>
.error{
    position: relative;
    font-size:14px;
    color:#FF4081 !important;
    
}
</style>
</head>

<body>

<?php
include 'db.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string( $con, $_POST['username']);
    $email = mysqli_real_escape_string( $con, $_POST['email']);
    $mobnumber = mysqli_real_escape_string( $con, $_POST['mobnumber']);
    $password = mysqli_real_escape_string( $con, $_POST['password']);
    $cpassword = mysqli_real_escape_string( $con, $_POST['cpassword']);
    
    $pass= password_hash($password, PASSWORD_BCRYPT);
    $cpass= password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery= "select * from user_registration where email='$email'";
    $query= mysqli_query($con, $emailquery);
    $emailcount= mysqli_num_rows($query);
    if($emailcount>0){
        ?>
        <script>
            alert('email  already exit')
        </script>
        <?php
        
    }else{
        if($password === $cpassword){
            $insertquery= " insert into user_registration( username,email,mobnumber,password,cpassword) values('$username','$email','$mobnumber','$pass','$cpass')";
            $iquery= mysqli_query($con,$insertquery);
            if($iquery){
                header("Location: index.php");
            }else{
                ?>
                <script>
                    alert('Db connection  error seccesful')
                </script>
                <?php
            }
        }else{
            ?>
                <script>
                    alert('password not match')
                </script>
                <?php
        }
    }
}

?>

     <section class="Login_sec" id="hbanner_sec">

<div class="login_cntbxmain">

    <div class="login_mnbx">

        <div class="container-fluid">

            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-6 col-sm-12 text-center">

                    <div class="login_img">
                        <div class="login_logo">
                            <img src="image/logo_login.png" alt="lg" class="img-fluid">
                        </div>
                        <div class="login_dog">
                            <img src="image/login_img1.png" alt="lg" class="img-fluid">
                        </div>
                    </div><!--lohin_img-->

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 lg_form_bx">
                    <div class="login_form">
                        <div class="lg_frm_txt">
                            <h1>Welcome to Pedigree</h1>
                            <h3>Create New account</h3>
                        </div>
                        <form class="form login-form" action="" method="post" id="registration-form" autocomplete="off">
                            <div class="lg-mb-3 mb-2 email_bx">
                                <label for="exampleInputEmail1" class="form-label">User Name</label>
                                <input type="text" class="form-control" id="" name="username" placeholder="User Name" autocomplete="off">
                            </div>
                            <div class="lg-mb-3 mb-2 email_bx">
                                <label for="exampleInputEmail1"  class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email"  name="email" placeholder="John.snow@gmail.com" 
                                    aria-describedby="emailHelp" >
                            </div>
                            <div class="lg-mb-3 mb-2 email_bx">
                                <label for="exampleInputEmail1" class="form-label">Mob Number</label>
                                <input type="text" class="form-control" id="mobnumber" name="mobnumber" placeholder="Mobile Number" 
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="lg-mb-3 mb-2">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="**********" >
                            </div>
                            <div class="lg-mb-3 mb-2">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <input type="password" name="cpassword" id="password-confirm" class="form-control" placeholder="**********">
                            </div>
                            <div class="frm_chck_main">
                                <div class="mb-3 form-check chck_bx">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" value="check">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <div class="forgt_btn">
                                    <a href="#">Forgot password?</a>
                                </div>
                            </div>
                            <div class="submit_btn pt-5"> 
                                <input type="submit" name="submit" value="Register" class="sub_btn">
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--row-->

        </div>

    </div><!--login_mnbx-->

</div>

</section><!--Login_sec-->


    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/general.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
$(".login-form").validate({
  rules: {
    username: {
      required: true,
     
    },     
    email: {
      required: true,
      email:true
    },
    mobnumber: {
      required: true,
      minlength:10
    },
    password: {
      required: true,
      minlength: 5
    },
    cpassword: {
      required: true,
      minlength: 5,
      equalTo: "#password"
    }
  },
  //For custom messages
  messages: {
    username:{
      required: "Enter a username",
     
    }
  },
  errorElement : 'div',
  errorPlacement: function(error, element) {
    var placement = $(element).data('error');
    if (placement) {
      $(placement).append(error)
    } else {
      error.insertAfter(element);
    }
  }
});
    </script>

    </div>


</body>

</html>