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
    <title>Breeder detail screen | Padigree</title>

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
                            <a href="Bredeer_Deshboard.html">
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
                        <div class="breder_rvmnbx">
                            <div class="breder_riewtxt">
                                <div class="bck_title">
                                    <p><span>SKU List of</span>James</p>
                                </div>
                            </div>
                            <div class="breeder_btn breder_rwbtn">
                                <a href="#">
                                    <span><img src="image/doenloadimg.png"></span>
                                    Download Report</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="dshboard_data_sec dt_screenpg pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table_data">
                            <div class="liset trfgb">
                                <ul class="v_cart frd">
                                    <li class="head_top_u">
                                        <ul>
                                            <li>
                                                
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle breder_viewbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Product name
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
                                            <li>Product SKU</li>
                                            <li>
                                                
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle breder_viewbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Product Amount
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
                                        </ul>
                                    </li>
                                    <ul class="htnkh">
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Product Name 1</li>
                                                <li>#JKI0245</li>
                                                <li>$200</li>
                                               
                                                
                                            </ul>
                                        </li>
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Product Name 1</li>
                                                <li>#JKI0245</li>
                                                <li>$200</li>
                                                
                                            </ul>
                                        </li>
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Product Name 1</li>
                                                <li>#JKI0245</li>
                                                <li>$200</li>
                                               
                                            </ul>
                                        </li>
                                        <li class="inner_data frdtgh">
                                            <ul>
                                                <li>Product Name 1</li>
                                                <li>#JKI0245</li>
                                                <li>$200</li>
                                               
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