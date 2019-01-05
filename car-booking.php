<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
      <!-- PAGE TITLE -->
      <title>Reserve - RENT A CAR</title>

      <!-- META-DATA -->
      <meta http-equiv="content-type" content="text/html; charset=utf-8" >
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta name="description" content="" >
      <meta name="keywords" content="" >

      <!-- FAVICON -->
      <link rel="shortcut icon" href="assets/images/favicon.png">

      <!-- CSS:: FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

      <!-- CSS:: MAIN -->
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

  </head>
  <body>
    <?php
       include("DBConnection.php");
       ?>
      <div class="r-wrapper">
        <header>
          <div class="r-header r-header-inner">
            <div class="r-header-strip">
              <div class="container">
                <div class="row clearfix">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="r-logo">
                      <a href="index.html" class="d-inline-block"><img src="assets/images/logo-black.png" class="img-fluid d-block" alt=""></a>
                    </div>
                    <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="r-header-action float-right">
                      <a href="index.html">  <span>LOG OUT</span></a>
                      </div>
                    <div class="r-nav-section float-right">
                      <nav>
                        <ul>
                          <li>
                            <a href="index.html">HOME</a>

                          </li>
                          <li>
                            <a href="about.html">ABOUT US</a>
                          </li>
                          <li>
                            <a href="vehicles.html">VEHICLES</a>

                          </li>
                          <li><a href="gallery.html">GALLERY</a></li>
                          <li><a href="car-booking.php">BOOK NOW</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="r-header-inner-banner">
              <div class="r-header-in-over">
                <h1>RENT A<b> CAR</b> </h1>
                <div class="r-breadcrum">
                  <ul>
                    <li><a href="#">HOME</a></li>
                    <li><span>BOOK NOW</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </header>

        <section class="r-car-info-wrapper">
          <div class="container">




            <div class="row">


              <div class="col-lg-12 col-md-8 col-sm-12">
                <div class="r-site-default-accordion">
                  <div class="r-accordion-header">
                    <h2 class="r-accordion-heading">Booking Detail</h2>
                    <i class="fa fa-angle-up"></i>
                  </div>
                  <div class="r-accordion-body">
                    <form>
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Pickup Address</label>
                            <div class="input-group">
                               <input type="text" class="form-control" placeholder="Airport or anywhere" />
                               <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Drop Off Address</label>
                            <div class="input-group">
                               <input type="text" class="form-control" placeholder="Airport or anywhere" />
                               <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Pickup date </label>
                            <div class="input-group">
                               <input type="date" class="form-control" placeholder="dd.mm.yy" />
                               <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Drop Off date </label>
                            <div class="input-group">
                               <input type="date" class="form-control" placeholder="dd.mm.yy" />
                               <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Pickup Time </label>
                            <div class="input-group">
                               <input type="time" class="form-control" placeholder="12.00AM" />
                               <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label>Drop off Time </label>
                            <div class="input-group">
                               <input type="time" class="form-control" placeholder="12.00PM" />
                               <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="r-site-default-accordion">
                  <div class="r-accordion-header">
                    <h2 class="r-accordion-heading">Customer Information</h2>
                    <i class="fa fa-angle-up"></i>
                  </div>
                  <div class="r-accordion-body">
                    <form>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="r-site-checkbox">
                              <label>
                                Mr.
                                <input type="checkbox" />
                                <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                              </label>
                              <label>
                                Mrs.
                                <input type="checkbox" />
                                <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" placeholder="Your full name"/>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control" placeholder="Example@gmail.com"/>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" placeholder="Phone Number"/>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <label>Nationality</label>
                            <select class="form-control">
                              <option value="">India</option>
                              <option value="">United State</option>
                              <option value="">Russia</option>
                              <option value="">China</option>
                              <option value="">Australia</option>
                            </select>
                          </div>
                        </div>

                      </div>

                    </form>
                  </div>
                </div>

                <div class="r-site-default-accordion">
                  <div class="r-accordion-header">
                    <h2 class="r-accordion-heading">Payment Options</h2>
                    <i class="fa fa-angle-up"></i>
                  </div>
                  <div class="r-accordion-body">
                    <form>
                      <div class="r-payment-options">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <div class="r-site-checkbox">
                              <label>
                                <input type="checkbox" />
                                <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                                <span class="r-site-checkbox-text">Direct bank Transfer</span>
                              </label>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <div class="r-site-checkbox">
                              <label>
                                <input type="checkbox" />
                                <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                                <span class="r-site-checkbox-text">Credit Card</span>
                              </label>
                              <img src="assets/images/payment-icons.jpg" alt="" class="" />
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <div class="r-site-checkbox">
                              <label>
                                <input type="checkbox" />
                                <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                                <span class="r-site-checkbox-text">Cheque Payment</span>
                              </label>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <div class="r-site-checkbox">
                              <label>
                                <input type="checkbox" />
                                <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                                <span class="r-site-checkbox-text">Paypal</span>
                              </label>
                              <img src="assets/images/paypal-icon.jpg" alt="" class="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="r-site-default-accordion">
                  <div class="r-accordion-header">
                    <h2 class="r-accordion-heading">Addition Information</h2>
                    <i class="fa fa-angle-up"></i>
                  </div>
                  <div class="r-accordion-body">
                    <form>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea class="form-control" placeholder="Additional note"></textarea>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="r-booking-form-submission">
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <div class="r-site-checkbox">
                        <label>
                          <input type="checkbox" />
                          <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                          <span class="r-site-checkbox-text">I accept all informations & payment eyc</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 r-submission-btn-wrapper">
                      <input type="reset" class="btn-default" value="Cancel This" />
                      <input type="submit" class="btn-primary" value="Reserve Now" />
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </section> <!-- /r-car-info -->

        <section id="r-get-in-touch">
          <div class="r-get-in-touch">
            <div class="container">
              <div class="r-get-header">
                <span>BOOK NOW NOW</span>
                <h2>Keep <b>In Touch.</b></h2>
              </div>
              <div class="r-get-form">
                <form action="#">
                  <div class="clearfix">
                    <div class="form-group"><input type="text" placeholder="User name"></div>
                    <div class="form-group"><input type="email" placeholder="Email Address"></div>
                  </div>
                  <div class="form-group"><input type="email" placeholder="Title Message"></div>
                  <div class="form-group">
                    <textarea placeholder="Message"></textarea>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-full">SEND MESSAGE NOW</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>

      </div>
      <div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>
      <!-- JQUERY:: JQUERY.JS -->
      <script src="assets/js/jquery.min.js"></script>

      <!-- JQUERY:: BOOTSTRAP.JS -->
      <script src="assets/js/tether.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/plugins/owl/owl.carousel.min.js"></script>
      <script src="assets/js/plugins/owl/owl.carousel2.thumbs.js"></script>
      <script src="assets/js/custom.js"></script>

  </body>


</html>
