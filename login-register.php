<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
      <!-- PAGE TITLE -->
      <title>Login - RENT A CAR</title>

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
      <div class="r-wrapper">
        <header>
          <div class="r-header r-header-inner">
            <div class="r-header-strip">
              <div class="container">
                <div class="row clearfix">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="r-logo">
                      <a href="index.html" class="d-inline-block"><img src="assets/images/logo-black.png" class="img-fluid d-block" alt=""></a>
                    </div>
                    <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="r-header-action float-right">
                      <a href="login-register.html"> <img src="assets/images/icon-lock.png" alt='' /> <span>Login</span></a>
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
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="r-header-inner-banner">
              <div class="r-header-in-over">
                <h1><b>Login or Register</b></h1>
                <div class="r-breadcrum">
                  <ul>
                    <li><a href="#">HOME</a></li>
                    <li><span>Login</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </header>
        <section id="r-login-register">
          <div class="r-login-register">
            <div class="r-login-register-in">
              <div class="r-auth-or">
                <span>OR</span>
              </div>
              <div class="clearfix">
                <div class="r-auth-outer r-login">
                  <div class="r-auth-head">
                    <h2><b>Login</b> Now</h2>
                    <span>Login to our website</span>
                  </div>
                  <div class="r-auth-form">
                    <div class="r-or-line"><span>SIGN IN</span></div>
										   <form  method="POST" action="login.php" >
                      <div class="form-group">
                        <input type="text" name="username" class="form-control" required placeholder="Username">
                      </div>
                      <div class="form-group">
                        <input type="password"  name="password" class="form-control" required placeholder="Password">
                      </div>
                      <div class="form-group">
                        <button type="submit"  value="login" name="sumbit"  class="btn btn-full">LOGIN NOW</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="r-auth-outer r-register">
                  <div class="r-auth-head">
                    <h2><b>Register</b> Now</h2>
                    <span>Required information for account creation</span>
                  </div>
                  <div class="r-auth-form">
                    <form method="post" action="register.php">
                      <div class="form-group">
                        <input type="text"  name="fname" required class="form-control" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <input type="text"   name="username" required class="form-control" placeholder="User name">
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" required class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="text"  name="phone" required class="form-control" placeholder="Phone Number">
                      </div>
                      <div class="form-group">
                        <input type="email"  name="email" required class="form-control" placeholder="Email Address">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-full" input type="sumbit" name="register_btn" value="Register" >SIGN UP NOW</button>
                      </div>
                    </form>


                  </div>
                </div>
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

      <!-- JQUERY:: PLUGINS -->
      <script src="assets/js/plugins/owl/owl.carousel.min.js"></script>

    <!-- JQUERY:: CUSTOM -->
      <script src="assets/js/custom.js"></script>

  </body>

</html>
