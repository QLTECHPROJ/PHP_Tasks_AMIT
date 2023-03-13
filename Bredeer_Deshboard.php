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
    <title>Breeder dashboard | Padigree</title>

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
                            <a href="Bredeer_Deshboard.html">
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
                                <span class="usercode">
                                    #B001
                                </span>
                                <button class="btn dropdown-toggle logoutbtn" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="image/admin_icon.png" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="logout.php"><img src="image/logout.png" alt="">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <section class="welcome_bck_admn breder_shbord">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="Breeder_sales.html">
                            <div class="bckadmn_bx">
                                <div class="bckcnt">
                                    <div class="bckimg_bx">
                                        <img src="image/brd_ad1.png" alt="" class="image-fluid">
                                    </div>
                                    <div class="bck_txtbx">
                                        <h4>This month 
                                            Sales</h4>
                                        <p>200</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="bckadmn_bx">
                            <div class="bckcnt">
                                <div class="bckimg_bx">
                                    <img src="image/brd_ad1.png" alt="" class="image-fluid">
                                </div>
                                <div class="bck_txtbx">
                                    <h4>YTD
                                        Sales</h4>
                                    <p>20</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="bckadmn_bx">
                            <div class="bckcnt">
                                <div class="bckimg_bx">
                                    <img src="image/brd_ad2.png" alt="" class="image-fluid">
                                </div>
                                <div class="bck_txtbx">
                                    <h4>YTD
                                        Commison</h4>
                                    <p>$2500</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="breeder_dshboard_data_sec pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="desb_toptxt">
                            <p>Recent Added</p>
                        </div>
                        <div class="table_data">
                            <div class="liset trfgb">
                                <ul class="v_cart frd">
                                    <li class="head_top_u">
                                        <ul>
                                            <li>Customer name</li>
                                            <li>Amount Spent</li>
                                            <li>No. Of Orders </li>
                                            <li>
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle breder_viewbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Last Purchase Date
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                      <div class="dropdown-item">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                          </div>
                                                      </div>
                                                      <div class="dropdown-item">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                          </div>
                                                      </div>
                                                      <div class="dropdown-item">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                          </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </li>
                                            <li>Commission Amount </li>
                                        </ul>
                                    </li>
                                    <ul class="htnkh">
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Aaron Ipsum</li>
                                                <li>$2500</li>
                                                <li>25 Sold</li>
                                                <li>27-12-2022</li>
                                                <li>$500</li>
                                                
                                            </ul>
                                        </li>
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Aaron Ipsum</li>
                                                <li>$2500</li>
                                                <li>25 Sold</li>
                                                <li>27-12-2022</li>
                                                <li>$500</li>
                                            </ul>
                                        </li>
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Aaron Ipsum</li>
                                                <li>$2500</li>
                                                <li>25 Sold</li>
                                                <li>27-12-2022</li>
                                                <li>$500</li>
                                            </ul>
                                        </li>
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Aaron Ipsum</li>
                                                <li>$2500</li>
                                                <li>25 Sold</li>
                                                <li>27-12-2022</li>
                                                <li>$500</li>
                                            </ul>
                                        </li>


                                    </ul>

                                   


                                </ul>
                                
                            </div>
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