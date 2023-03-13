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
    <title>Add Breeder | Padigree</title>

</head>

<body>

    <div class="site-main">

        <noscript>

            <div class="noscript">

                <p><i class="fa fa-exclamation-triangle fa-1"></i>Please enable JavaScript in your browser.</p>

            </div>

        </noscript>

        <!--header section starts-->

        <header>
            <div class="header_mainbx">
                <div class="container">
                    <div class="row align-items-center">
                        <div class=" col-lg-2 col-md-4 col-sm-4 head_logo">
                            <a href="Admin_Deshboard.html">
                                <img src="image/head_logo.png" alt="logo" class="img-fluid">
                            </a>
                        </div>
                        <div class="  col-lg-8 col-md-4 col-sm-4 welcombx">
                            <div class="Breeder_hdtxt">
                                <p><span>Welcome Back!</span>Admin</p>
                            </div>
                        </div>
                        <div class="  col-lg-2 col-md-4 col-sm-4 admnbx">
                            <div class="dropdown drop_mnbx">
                                <button class="btn dropdown-toggle logoutbtn" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="image/admin_icon.png" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><img src="image/logout.png" alt="">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <section class="Add_Breeder_sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 addbr_form_bx">
                        <div class="addbreeder_form">
                            <form>
                                <div class="mb-lg-3 mb-2 name_bx">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="Luram ipsuma" >
                                </div>
                                <div class="mb-lg-3 mb-2 lastnm_bx">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Luram ipsuma" >
                                </div>
                                <div class="mb-lg-3 mb-2 mob_bx">
                                    <label  class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="+91 1234567890">
                                </div>
                                <div class="mb-lg-3 mb-2 state_bx">
                                    <label  class="form-label">State</label>
                                    <input type="text" class="form-control" placeholder="Luram ipsuma">
                                </div>
                                <div class="mb-lg-3 mb-2 address_bx">
                                    <label  class="form-label">Address</label>
                                    <input type="text" class="form-control" placeholder="Luram ipsuma">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 addbr_form_bx">
                        <div class="addbreeder_form">
                            <form>
                                <div class="mb-lg-3 mb-2 email_bx">
                                    <label  class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="aaron.ipsum@gmail.com">
                                </div>
                                <div class="mb-lg-3 mb-2 password_bx">
                                    <label  class="form-label">Password</label>
                                    <input type="text" class="form-control" placeholder="ABC@1234">
                                </div>
                                <div class="mb-lg-3 mb-2 city_bx">
                                    <label  class="form-label">City</label>
                                    <input type="text" class="form-control" placeholder="Luram ipsuma">
                                </div>
                                <div class="mb-lg-3 mb-2 pin_bx">
                                    <label  class="form-label">Pincode</label>
                                    <input type="text" class="form-control" placeholder="600005">
                                </div>
                                <div class="mb-lg-3 mb-2 brcode_bx">
                                    <label  class="form-label">Breeder Code</label>
                                    <input type="text" class="form-control" placeholder="#B001">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="breeder_savefrm pb-5 text-center">
                            <a href="Breeder.html">Save</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/general.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    </div>

</body>

</html>