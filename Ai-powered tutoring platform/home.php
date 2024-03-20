<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>skillshaperhub.com</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script src="https://kit.fontawesome.com/41fa915ae8.js" crossorigin="anonymous"></script>


  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="stylehome.css">
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
        <a class="navbar-brand" href="home.php"><span> Skill Shaper Hub</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#courses">Courses</a></li>
          <li><a href="#feature">Features</a></li>
          <li><a href="#contactus">Contact Us</a></li>
          <li><a href="aboutus.php">About us</a></li>        
          <li><a href="#" data-target="#login" data-toggle="modal">Log in</a></li>
          <li class="btn-trial"><a href="#" data-target="#signin" data-toggle="modal">Sign in</a></li>
        </ul>
      </div>
    </div>
  </nav>
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
                  <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" name="pwd"/>
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
                    <button type="submit" class="btn btn-green btn-block btn-flat"  >Log In</button>
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
              <p class="login-box-msg">Sign in to begin your learning journey</p>
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
                  <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" name="pass"/>
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
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">Skill Shaper Hub</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Learning gives creativity. Creativity leads to thinking. Thinking provides knowledge. Knowledge makes you great - APJ Abdul Kalam</p>
              <p class="small-text">Discover the world of coding effortlessly and systematically through our website's interface</p>
              <a href="#footer" class="btn get-quote">Here's an alternative idea for your consideration</a>
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>
            Features
          </h2>
          <p>
            We endeavor to offer our dedicated users a fulfilling and comforting journey in their pursuit of learning. While we strive for excellence, we also value and welcome any suggestions for improvement
          </p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Cutting-edge Technologies</h4>
                <p class="text-justify">
                  Innovative technologies are rapidly transforming our world, from AI and blockchain to IoT and 5G, promising groundbreaking solutions and unprecedented opportunities for advancement. Embracing these advancements while navigating their complexities is crucial for shaping a sustainable and prosperous future.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-css3"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Full Stack Development</h4>
                <p class="text-justify">
                  Full stack development encompasses both frontend and backend technologies, enabling developers to create dynamic and interactive web applications from start to finish. It involves proficiency in languages and frameworks such as HTML/CSS/JavaScript, along with server-side languages like Node.js, and databases like MongoDB or SQL.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-drupal"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Interview Tips</h4>
                <p class="text-justify">
                  In your interview, be prepared to confidently discuss your relevant experiences and skills. Research the company thoroughly to demonstrate your interest and understanding. Listen attentively, respond thoughtfully, and ask insightful questions to showcase your enthusiasm and engagement. Finally, maintain a professional demeanor, express gratitude, and follow up with a thank-you note to leave a lasting impression.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-trophy"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>70%</h3>
              <p>Say NO!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>20%</h3>
              <p>Says Yes!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>10%</h3>
              <p>Can't Say!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt">Enjoy the quality contents to increase your skill</h3>
              <h4 class="sm-txt">(Updated topic upto 2024)</h4>
            </hgroup>
            <p class="det-p">
              Enhance your skills with enriching content designed to deliver quality learning experiences. Engage with diverse resources and interactive materials to foster continuous improvement and mastery. Embrace the journey of self-development through accessible and valuable educational content tailored to your growth. Immerse yourself in high-quality resources to elevate your knowledge and expertise effectively.</p>
          </div>
        </div>
  </section>
  <section id="cta-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-center">Subscribe Now</h2>
          <p class="cta-2-txt text-center">
              Enroll in our complimentary weekly software design courses, and receive them directly in your email inbox.</p>
          <div class="cta-2-form text-center">
            <form action="#" method="post" id="workshop-newsletter-form">
              <input name="" placeholder="Email Address" type="email">
              <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Cta-->
  <!--work-shop-->
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>
            Upcoming Seminar</h2>
          <p>Exclusive upcoming workshops tailored just for you. <br> Act quickly!</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-html5 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor Front-End Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-css3 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor Back-end Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-joomla color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor C Workshop</h4>
            </div>
          </div>
            <br>
            <button class="mybutton m-5" style="float: right;"><span><a href="courses.php" style='text-decoration:none;color:black;'>More..</a></span></button>
        </div>
      </div>
    </div>
  </section>
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
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Mr. Anandha Prakash S</p>
              <p class="pm-staff-profile-title">Full Stack Developer</p>
              <p class="pm-staff-profile-bio text-justify">
                I am a seasoned full stack developer proficient in frontend and backend technologies, with a strong focus on delivering robust and scalable web applications. My expertise spans across a variety of programming languages, frameworks, and databases, enabling me to craft dynamic and user-centric solutions. With a passion for innovation and problem-solving, I thrive on turning complex ideas into functional and intuitive software solutions.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Mr. Saran Raj S</p>
              <p class="pm-staff-profile-title">Lead Python Developer</p>

              <p class="pm-staff-profile-bio text-justify">
                As a Python developer, I specialize in leveraging the language's versatility and simplicity to build efficient and elegant solutions. With extensive experience in Python frameworks like Django and Flask, I excel in developing web applications and backend systems. My passion for coding and commitment to delivering high-quality software drive me to continually expand my skills and innovate in the field.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Ms. Abinay Shri J</p>
              <p class="pm-staff-profile-title">Lead Java Developer</p>

              <p class="pm-staff-profile-bio text-justify">
                I am a skilled Java developer proficient in building robust and scalable software solutions using the language's rich ecosystem of libraries and frameworks. With expertise in Java EE and Spring frameworks, I excel in developing enterprise-level applications and backend systems. My dedication to clean code and software craftsmanship ensures the delivery of high-quality and maintainable codebases.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">Explore the feedback from our valued customers.</h2>
          <p class="white">We extend our gratitude to our loyal customers for their invaluable feedback and suggestions.<br> Your support is deeply appreciated.</p>
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"I really appreciate the efforts of the team in continuously improving the platform. Keep up the great work!" commented a satisfied customer."</p>
            <p class="text-name">Mr.M. Thanush - Creative Dırector</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"It would be great if we could save our favorite items for later. It would make the platform much more convenient to use."</p>
            <p class="text-name">Mr. M. Thanush - Creative Dırector</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonial-->
  <!--Courses-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Courses</h2>
          <p>With thousands of coding courses available, there's no reason to wait any longer.<br> Start learning now!</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <i class="fa-brands fa-html5 fa-3x"></i>
            <figcaption>
              <h3>HTML5, CSS3 and Bootstrap</h3>
              <p class="text-justify">
                Our course covers HTML, CSS, and Bootstrap, providing a solid foundation in front-end web development. With hands-on exercises and practical projects, you'll learn to create responsive and visually appealing websites. Whether you're new to coding or seeking to enhance your skills, this course offers valuable insights for aspiring web developers.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
          <i class="fa-brands fa-js fa-3x"></i>
            <figcaption>
              <h3>JavaScript</h3>
              <p class="text-justify">
                Our JavaScript course offers comprehensive instruction in programming fundamentals, covering topics such as syntax, data types, and functions. Through practical examples and coding exercises, you'll gain the skills needed to build dynamic and interactive web applications. Whether you're a beginner or looking to advance your coding abilities, this course provides a structured learning path to help you master JavaScript.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
          <i class="fa-brands fa-react fa-3x"></i>
            <figcaption>
              <h3>ReactJS</h3>
              <p class="text-justify">
                Our ReactJS course provides in-depth training on one of the most popular JavaScript libraries for building user interfaces. You'll learn React fundamentals, including components, state management, and routing, through hands-on projects and real-world examples. Whether you're a beginner or an experienced developer, this course will equip you with the skills needed to create powerful and scalable web applications using ReactJS.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
          <i class="fa-brands fa-node fa-3x"></i>
            <figcaption>
              <h3>NodeJS and ExpressJS</h3>
              <p class="text-justify">
                Our Node.js and Express.js course offers comprehensive training on backend development using these powerful JavaScript frameworks. Learn to build efficient and scalable web applications, APIs, and server-side applications. With practical projects and hands-on exercises, you'll gain the skills needed to become proficient in Node.js and Express.js development.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
          <i class="fa-sharp fa-solid fa-database fa-3x"></i>
            <figcaption>
              <h3>MySQL and NoSQL</h3>
              <p class="text-justify">Our MySQL and NoSQL course provides thorough instruction on database management using both relational and non-relational databases. Learn essential concepts, SQL queries, and database administration skills to effectively store and retrieve data. Whether you're new to databases or seeking to broaden your expertise, this course offers valuable insights into both MySQL and NoSQL technologies.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
          <i class="fa-brands fa-python fa-3x"></i>
            <figcaption>
              <h3>Python and Java fundamentals</h3>
              <p class="text-justify">
                Our Python and Java Fundamentals course offers comprehensive training in two of the most widely used programming languages. Learn the basics of Python, including syntax, data types, and control structures, as well as the fundamentals of Java, such as object-oriented programming and exception handling. With practical examples and hands-on exercises, you'll gain a solid understanding of both languages, empowering you to tackle a wide range of programming tasks and projects.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Information regarding our pricing</h2>
          <p>
            Gain full access to our website and unlock professional resources to kickstart your learning journey today!</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <div class="pricing-head">
              <h4>
                 Our monthly subscription plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">300</span>
            </div>
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg green btn-block">To complete your transaction.</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <div class="pricing-head">
              <h4>Our quarterly subscription plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">500</span>
            </div>
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg yellow btn-block">To complete your transaction.</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <div class="pricing-head">
              <h4>
                  Our annual subscription plan.</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">700</span>
            </div>
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg red btn-block">To complete your transaction.</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contactus" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>
            Feel free to reach out to us</h2>
          <p>
            Visitors to our website can contact us at any time by sending their messages, <br>and we'll strive to resolve their inquiries promptly.</p>
          <hr class="bottom-line">
        </div>
        <form action="contact.php" method="get"  >
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="fullname" class="form-control form required"  placeholder="Your good Name"  />         
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email"  placeholder="Your Email"  />
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="phone number"  placeholder="Phone number"  />
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5"  placeholder="Message">Feel free to send us a message</textarea>
            </div>
            </div>
          <div class="col-xs-12">
              <input  type="submit"  class="form contact-form-button light-form-button oswald light" value="Send message">
          </div>
        </form>
      </div>
    </div>
  </section>
  <footer id="footer" class="footer">
    <div class="container text-center">
      <h3>We welcome suggestions</h3>
      <form class="mc-trial row" action="review.php" method="get">
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="username" placeholder="Enter Your FullName" class="form-control" type="text">
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="comment" placeholder="Enter Your Suggestion" class="form-control" type="text">
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Suggest this! <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
      ©2024 skill shaper hub  All rights reserved
      <div class="credits">
        Designed by <a href="https://amoldalwai.com/">Anandha Prakash S, Saran Raj S</a>
      </div>
    </div>
  </footer>
</body>

<?php
     if($_SERVER['REQUEST_METHOD']=="GET"){
       $localhost = "localhost";
       $usernamew = "root";
       $passwordw = "";
          $db = "expdb";
      $conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
      if(!$conn){
       echo "Connection error";
       }
         else{
     
     $sql = "UPDATE counter SET visit=visit+1 WHERE id = 0";
    $result = mysqli_query($conn,$sql);
 }

}
?>
</html>