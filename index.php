<?php
  include_once("main/header.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beyond Class</title>
    <meta name="description" content="Course Project">
    <meta name="keywords" content="BeyondClass, Beyond Class, Tutoring, UOIT, Database Management">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
 
   <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <p><center><h3>Login</h3>
                <fieldset>
                    <form action="/beyondclass/main/login.php" method="post" enctype="multipart/form-data">
                        <input  class="form-control" placeholder="Username" type="username" name="username" type="text"></br>
                        <input  class="form-control" placeholder="Password" type="password" name="password" type="password"></br>
                        <input  class="btn btn-primary" name="login" type="submit" value="Login">
                        <footer class="clearfix">
                    </form>
                </fieldset><center></p>
        </div>
  
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<div class="modal fade" id="signup">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <p><center><h3>New Student</h3>
                <fieldset>
                    <form action="/beyondclass/main/signup.php" method="post" enctype="multipart/form-data">
                        <input  class="form-control" placeholder="Name" name="name" type="text"></br>
                        <input  class="form-control" placeholder="Student ID" name="sid" type="text"></br>
                        <input  class="form-control" placeholder="GPA" name="gpa" type="text"></br>
                        <input  class="form-control" placeholder="Email" name="email" type="text"></br>
                        <input  class="form-control" placeholder="Cell Number" name="cellno" type="text"></br>
                        <input  class="form-control" placeholder="Department Name" name="dept" type="text"></br>
                        <input  class="form-control" placeholder="Password" name="pwd" type="password"></br>
                        <input  class="btn btn-primary" name="signup" type="submit" value="Sign Up">

                        <footer class="clearfix">
                    </form>
                </fieldset><center></p>
        </div>
  
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


  <div class="modal fade" id="signupTutor">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <p><center><h3>Become a Tutor</h3>
                <fieldset>
                    <form action="/beyondclass/main/signup.php" method="post" enctype="multipart/form-data">
                        <input  class="form-control" placeholder="Name" name="name" type="text"></br>
                        <input  class="form-control" placeholder="Tutor ID" name="tid" type="text"></br>
                        <input  class="form-control" placeholder="GPA" name="gpa" type="text"></br>
                        <input  class="form-control" placeholder="Course ID" name="courseid" type="text"></br>
                        <input  class="form-control" placeholder="Cost" name="cost" type="text"></br>
                        <input  class="form-control" placeholder="Date Available" name="date" type="date"></br>
            <input  class="form-control" placeholder="Time" name="time" type="text"></br>
                        <input  class="form-control" placeholder="Password" name="pwd" type="password"></br>
                        <input  class="btn btn-primary" name="signupTutor" type="submit" value="Sign Up">

                        <footer class="clearfix">
                    </form>
                </fieldset><center></p>
        </div>
  
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url(img/slider_1.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Your Bright Future is Our Mission</h1>
                    <br>
                    <a data-target ="#signup" data-toggle="modal" class="btn btn-success">New Student</a>
                    <a data-target ="#signupTutor" data-toggle="modal" class="btn btn-danger">Become  Tutor</a></div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(img/slider_2.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Education is Life</h1>
                    <br>
                    <a data-target ="#signup" data-toggle="modal" class="btn btn-success">New Student</a>
      <a data-target ="#signupTutor" data-toggle="modal" class="btn btn-danger">Become  Tutor</a>
                  </div>
                </div>
              </div>
            </div>
            
          </li>
          <li style="background-image: url(img/slider_3.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students Fulfill the Potential</h1>
                    <br>
                    <a data-target ="#signup" data-toggle="modal" class="btn btn-success">New Student</a>
                    <a data-target ="#signupTutor" data-toggle="modal" class="btn btn-danger">Become  Tutor</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="15" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Students Booked</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="8" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Certified Tutors</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="6" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Courses</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="29" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Bookings Completed</span>
                </div>
              </div>
            </div>
      </section>
      <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Courses Offered</h2>
              <p class="lead">3rd and 4th Year Courses Currently Available</p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/mech.png" alt="placeholder">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> January, 1, 2000</span>
                  <h3>Mechatronics</h3>
                  <p><a href="#" class="btn btn-primary">Book now!</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/linux.png" alt="Systems Programming">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> March, 3, 2000</span>
                  <h3>Systems Programming</h3>
                  <p><a href="#" class="btn btn-primary">Book now!</a></p>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/heat.jpg" alt="placeholder">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> February, 2, 2000</span>
                  <h3>Heat Transfer</h3>
                  <p><a href="#" class="btn btn-primary">Book now!</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/bio.jpg" alt="placeholder">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> April, 4, 2000</span>
                  <h3>Field Biology</h3>
                  <p><a href="#" class="btn btn-primary">Book now!</a></p>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/tax.jpg" alt="placeholder">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> May, 5, 2000</span>
                  <h3>Introduction to Taxation</h3>
                  <p><a href="#" class="btn btn-primary">Book now!</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/comm.jpg" alt="placeholder">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> June, 6, 2000</span>
                  <h3>Communication Systems</h3>
                  <p><a href="#" class="btn btn-primary">Book now!</a></p>
                </div>
              </div>
            </div>
        </div>
      </section>
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Meet Our Qualified Tutors</h2>
              <p class="lead">Best Tutors at UOIT</p>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/person_1.jpg" alt="placeholder" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Aditya Kartik</h3>
                  <p>Systems Programming</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/person_5.jpg" alt="placeholder" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Amit Kumar</h3>
                  <p>Heat Transfer</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/person_6.jpg" alt="placeholder" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Raj Kapoor</h3>
                  <p>Mechatronics</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/person_7.jpg" alt="placeholder" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Jamie Mehta</h3>
                  <p>Communication Systems</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/slider_5.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Alumni Testimonial</h2>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                <div class="item">

                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_1.jpg" alt="placeholder">
                    </figure>
                    <blockquote class="quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author"> &mdash; <span>Mike Fisher</span></cite></blockquote>
                  </div>

                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_2.jpg" alt="placeholder">
                    </figure>
                    <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_3.jpg" alt="placeholder">
                    </figure>
                    <blockquote class="quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite class="author">&mdash; <span>Brandon White</span></cite></blockquote>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- END row -->
        </div>
      </section>      
        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2017 <a href="https://probootstrap.com/">ProBootstrap:Enlight</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://probootstrap.com/">ProBootstrap.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>