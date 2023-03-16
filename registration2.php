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

</head>

<body>
<?php
    require('db.php');
    
    if (isset($_REQUEST['username'])) {
       
        $username = stripslashes($_REQUEST['username']);
        
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
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
                        <form class="form" action="" method="post">
                            <div class="lg-mb-3 mb-2 email_bx">
                                <label for="exampleInputEmail1" class="form-label">User Name</label>
                                <input type="text" class="form-control" name="username" placeholder="User Name" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="lg-mb-3 mb-2 email_bx">
                                <label for="exampleInputEmail1"  class="form-label">Email address</label>
                                <input type="email" class="form-control"  name="email" placeholder="John.snow@gmail.com" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="lg-mb-3 mb-2">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="**********" id="exampleInputPassword1">
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
<?php
    }
?>

    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/general.js"></script>

    </div>

</body>

</html>