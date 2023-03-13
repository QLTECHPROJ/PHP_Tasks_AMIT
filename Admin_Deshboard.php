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
    <title>Admin Dashboard | Padigree</title>

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
                        <div class=" col-lg-2 col-md-2 col-sm-12 head_logo">
                            <a href="Admin_Deshboard.html">
                                <img src="image/head_logo.png" alt="logo" class="img-fluid">
                            </a>
                        </div>
                        <div class="  col-lg-5 col-md-4 col-sm-12 serach_bx">
                            <div class="form">
                                <div class="serch_icon">
                                    <i class="fa fa-search icn"></i>
                                </div>
                                <input type="text" class="form-control form-input srchinput"
                                    placeholder="Search anything...">

                            </div>
                        </div>
                        <div class="  col-lg-3 col-md-4 col-sm-12 filtr_bx">
                            <div class="select_box">
                                <span class="datebx"><i class="far fa-calendar-alt"></i></span>
                                <span class="select_arrow"></span>
                                <select class="form-control dropdown-toggle slctbx" name="person" id="PAX2"
                                    data-parsley-type="number" data-parsley-errors-container="#PAX2_error" required=""
                                    data-parsley-type-message="Enter valid no. of persons"
                                    data-parsley-required-message="No. of people is required">
                                    <option value="">Aug 20th - Oct 20th, 2022</option>
                                    <option value="1">Aug 20th - Oct 20th, 2022</option>
                                    <option value="2">Aug 20th - Oct 20th, 2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="  col-lg-2 col-md-2 col-sm-12 admin_bx">
                            <div class="dropdown drop_mnbx">
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
        <section class="welcome_bck_admn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="bck_title">
                            <p><span>Welcome Back!</span>Admin</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="Breeder.html">
                            <div class="bckadmn_bx">
                                <div class="bckcnt">
                                    <div class="bckimg_bx">
                                        <img src="image/brd_ad1.png" alt="" class="image-fluid">
                                    </div>
                                    <div class="bck_txtbx">
                                        <h4>Breeder</h4>
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
                                    <img src="image/brd_ad4.png" alt="" class="image-fluid">
                                </div>
                                <div class="bck_txtbx">
                                    <h4>Inactive Breeder</h4>
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
                                    <h4>Breeder
                                        Earning</h4>
                                    <p>$2500</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="bckadmn_bx">
                            <div class="bckcnt">
                                <div class="bckimg_bx">
                                    <img src="image/brd_ad3.png" alt="" class="image-fluid">
                                </div>
                                <div class="bck_txtbx">
                                    <h4>Total
                                        Sales</h4>
                                    <p>$12500</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="dshboard_data_sec pb">
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
                                            <li>Breeder name</li>
                                            <li>Breeder Code</li>
                                            <li>Total Earning </li>
                                            <li>Total number of sales </li>
                                        </ul>
                                    </li>
                                    <ul class="htnkh">
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Aaron Ipsum</li>
                                                <li>#B001</li>
                                                <li>$2500</li>
                                                <li>25 Sold</li>
                                                <li class="sale_vie_list">
                                                    <div class="view_salebx">
                                                        <a href="View_breeder_pro_info.html">View Profile</a>
                                                        <a href="View_breeder.html">View Sales</a>
                                                    </div>
                                                </li>
                                                <li class="deactivate_list">
                                                    <div class="deactivatebx">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Deactivate</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Alexei</li>
                                                <li>#B002</li>
                                                <li>$2500</li>
                                                <li>25 Sold</li>
                                                <li class="sale_vie_list">
                                                    <div class="view_salebx">
                                                        <a href="View_breeder_pro_info.html">View Profile</a>
                                                        <a href="View_breeder.html">View Sales</a>
                                                    </div>
                                                </li>
                                                <li class="deactivate_list">
                                                    <div class="deactivatebx">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Deactivate</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Diarmuid</li>
                                                <li>#B0030</li>
                                                <li>$2500</li>
                                                <li>25 Sold</li>
                                                <li class="sale_vie_list">
                                                    <div class="view_salebx">
                                                        <a href="View_breeder_pro_info.html">View Profile</a>
                                                        <a href="View_breeder.html">View Sales</a>
                                                    </div>
                                                </li>
                                                <li class="deactivate_list">
                                                    <div class="deactivatebx">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Deactivate</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Marcello</li>
                                                <li>#B00125</li>
                                                <li>$2500</li>
                                                <li>25 Sold</li>
                                                <li class="sale_vie_list">
                                                    <div class="view_salebx">
                                                        <a href="View_breeder_pro_info.html">View Profile</a>
                                                        <a href="View_breeder.html">View Sales</a>
                                                    </div>
                                                </li>
                                                <li class="deactivate_list">
                                                    <div class="deactivatebx">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Deactivate</a>
                                                    </div>
                                                </li>
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
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content model_maincnt">
                    <div class="modal_txt">
                        <p>Are you sure you want to<br>
                            Inactive Breeder?</p>
                    </div>
                    <div class="modal_midtxt">
                        <p>Lörem ipsum vahet musade i sosk sedan Rolf Olsson.
                            Reklejma ding. Pur sygen. </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modelbtn1" data-dismiss="modal" data-toggle="modal" data-target="#sumbitpass" data-dismiss="modal">Yes</button>
                        <button type="button" class="btn modelbtn2" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="sumbitpass" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content model_maincnt">
                    <div class="modal_txt">
                        <p>Enter Your Password</p>
                    </div>
                    <div class="modal_midtxt">
                        <p>Lörem ipsum vahet musade i sosk sedan Rolf Olsson.
                            Reklejma ding. Pur sygen. </p>
                    </div>
                    <form>
                        <div class="mb-lg-3 mb-2 name_bx">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn modelbtn1" data-dismiss="modal" >Yes</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/general.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    </div>

</body>

</html>