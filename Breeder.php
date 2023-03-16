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
    <title>Breeder | Padigree</title>

</head>

<body>
<?php

?>
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
        <section class="Breeder_top_sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="breeder_btn">
                            <a href="#"><img src="image/brer_btnimg.png">Add Breeder</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="dshboard_data_sec pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
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
                                        <?php
                                            // LOOP TILL END OF DATA
                                            $data = $_GET['data'];
                                            while($rows=$data)
                                            {
                                        ?>
                                        <li class="inner_data frdtgh">
                                            <!-- FETCHING DATA FROM EACH
                                                ROW OF EVERY COLUMN -->
                                            <ul>
                                            <li><?php echo $rows['Breedername'];?></li>
                                            <li><?php echo $rows['BreederCode'];?></li>
                                            <li><?php echo $rows['totalearning'];?></li>
                                            <li><?php echo $rows['totalsales'];?></li>
                                            <li class="sale_vie_list">
                                                    <div class="view_salebx">
                                                        <a href="View_breeder_pro_info.php">View Profile</a>
                                                        <a href="View_breeder.php">View Sales</a>
                                                    </div>
                                                </li>
                                                <li class="deactivate_list">
                                                    <div class="deactivatebx">
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Deactivate</a>
                                                    </div>
                                                </li>
                                            </ul>

                                            </li>
                                        <?php
                                            }
                                        ?>
                                    </ul>

                                   


                                </ul>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
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
                        <button type="button" class="btn modelbtn1" data-dismiss="modal" data-toggle="modal" data-target="#sumbitpass">Yes</button>
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