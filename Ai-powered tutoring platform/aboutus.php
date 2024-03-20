<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>skillshaperhub.com</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styleaboutus.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"><span>Skill Shaper Hub</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a  href="home.php">Courses</a></li>
          <li><a  href="home.php">Features</a></li>
          <li><a  href="home.php">Conduct us</a></li>
          <li><a  href="aboutus.php">About Us</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Log in</a></li>
          <li class="btn-trial"><a href="#" data-target="#signin" data-toggle="modal">Sign in</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <br>
    <br>
    <br>
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title" style="color:white;">Login</h4>
        </div>
        <div class="modal-body padtrbl">
          <div class="login-box-body">
            <p class="login-box-msg">log in to begin your learning journey</p>
            <div class="form-group">
              <form  id="loginForm" action="loginltc.php" method="get" >
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname"/>
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <span class="glyphicon glyphicon-user form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Password" id="loginpsw" type="text" autocomplete="off" name="pwd"/>
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <span class="glyphicon glyphicon-lock form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" id="loginrem" > Remember Me
                        </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat">Log In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="signin" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title text-center form-title" style="color:white;">Create Account</h4>
        </div>
        <div class="modal-body padtrbl">
          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form name="" id="loginForm" method="post" action="signupltc.php">
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" name="fname"/>
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <span class=" form-control-feedback glyphicon glyphicon-user" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="E-mail"  type="text" autocomplete="off" name="email" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <span class="glyphicon glyphicon-envelope form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Password" id="loginpsw" type="text" autocomplete="off" name="pass"/>
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <span class="glyphicon glyphicon-lock form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" id="loginrem" > Remember Me
                        </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat" >Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
    <div class="parallax"></div>
    <center><div class="heading"><h1>About us</h1></div></center><hr>
    <div class="content">
      <p style="text-align:center">
        We are a team of seasoned full stack developers specializing in frontend and backend technologies, adept at crafting robust and scalable web applications.
        Our expertise spans various programming languages, frameworks, and databases, enabling us to deliver dynamic and user-centric solutions. As Python developers, we leverage the language's versatility and simplicity to build elegant solutions, particularly in Django and Flask frameworks. Similarly, our proficiency in Java allows us to create enterprise-level applications using Java EE and Spring frameworks. 
        With a passion for coding and a commitment to delivering high-quality software, we continuously innovate and thrive on turning complex ideas into functional solutions.
      </p>
      </div>
   <hr>
     <div class="parallax" style="background-image:url('aboutus2.jpg')"></div>
     <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Introducing our esteemed faculty member</h2>
          <p>
            Allow us to introduce one of our distinguished faculty members who bring a wealth of expertise and experience to our institution.<br> Get to know our esteemed instructor who is dedicated to guiding and inspiring students on their educational journey. Meet our faculty member and discover the depth of knowledge and passion they bring to the classroom.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="images\anandhaparkash.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Mr. Anandha Prakash S</p>
              <p class="pm-staff-profile-title">Full Stack Developer</p>
              <p class="pm-staff-profile-bio text-justify">
                <ul class="text-left">
                  <li><b>Education</b> :  Karunya Institute of Technology and Sciences</li>
                  <li><b>Degree</b> :  Batchelor of Technology</li>
                  <li><b>Stream</b> :  Computer Science and Engineering</li>
                  <li><b>Batch</b> :  2020-2024</li>
                  <li><b>Email</b> :  anandhaprakash@gmail.com</li>
                  <li><b>Contact</b> :  63832965196</li>
                </ul>
             </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="images\saran raj.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Mr. Saran Raj S</p>
              <p class="pm-staff-profile-title">Lead Python Developer</p>

              <p class="pm-staff-profile-bio text-justify">
              <ul class="text-left">
                  <li><b>Education</b> :  Karunya Institute of Technology and Sciences</li>
                  <li><b>Degree</b> :  Batchelor of Technology</li>
                  <li><b>Stream</b> :  Computer Science and Engineering</li>
                  <li><b>Batch</b> :  2020-2024</li>
                  <li><b>Email</b> :  saranraj@karunya.edu.in</li>
                  <li><b>Contact</b> :  6374955489</li>
                </ul></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="images\abinayshri.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Ms. Abinay Shri J</p>
              <p class="pm-staff-profile-title">Lead Java Developer</p>

              <p class="pm-staff-profile-bio text-justify">
              <ul class="text-left">
                  <li><b>Education</b> :  Karunya Institute of Technology and Sciences</li>
                  <li><b>Degree</b> :  Batchelor of Technology</li>
                  <li><b>Stream</b> :  Computer Science and Engineering</li>
                  <li><b>Batch</b> :  2020-2024</li>
                  <li><b>Email</b> :  abinayshri@karunya.edu.in</li>
                  <li><b>Contact</b> :  6379922380</li>
                </ul></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <center><div class="heading"><h1>See yaa!</h1></div></center><hr>
<div id="skrollr-body">
    <div class="gallery"></div>
</div>
<div class="scroll-pause" data-anchor-target=".gallery" data-100p-top-top="transform:translateY(100%);" data-top-top="transform:translateY(0%)" data--150p-top-top="" data--300p-top-top="transform:translateY(-100%)">

    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(0%);" data--150p-top-top="transform: translateX(-50%);">
        <div style="background-image:url('course1.jpg');" ></div>

        <div style="background-image:url('course2.jpg');" ></div>

        <div style="background-image:url('course3.jpg');" ></div>

        <div style="background-image:url('course4.png');" ></div>

        <div style="background-image:url('course5.jpg');" ></div>

        <div style="background-image:url('course6.jpg');" ></div>

        <div style="background-image:url('course7.jpg');" ></div>

        <div style="background-image:url('course8.jpg');" ></div>
</div>
    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(-50%);" data--150p-top-top="transform: translateX(0);">

        <div style="background-image:url('course9.png');" ></div>

        <div style="background-image:url('course10.png');" ></div>

        <div style="background-image:url('course11.png');" ></div>

        <div style="background-image:url('course13.png');" ></div>

        <div style="background-image:url('course14.png');" ></div>

        <div style="background-image:url('course15.jpg');" ></div>

        <div style="background-image:url('course16.png');" ></div>

        <div style="background-image:url('course1.jpg');" ></div>
    </div>
</div>
<script src="assets/skrollr.min.js"></script>

<script>
    skrollr.init();
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
  <footer id="footer" class="footer">
    <div class="container text-center">
      <h3>Suggestions Are Welcomed</h3>
      <form class="mc-trial row" action="review.php" method="get">
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="username" placeholder="Enter Your FullName" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="comment" placeholder="Enter Your Suggestion" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Suggest this! <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
      ©2016 Learn To Code  All rights reserved
      <div class="credits">
        Designed by Mr. S.Anandha Prakash, Mr. S.Saran Raj S
      </div>
    </div>
  </footer>
</body>
</html>