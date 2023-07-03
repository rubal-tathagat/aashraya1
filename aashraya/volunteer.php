<!DOCTYPE php>
<php lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<title>Volunteer</title>

<!-- FAVICON -->
<link rel="icon" type="image/png" href="images/favicon.png">

<!-- Bootstrap 5 CDN Links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Owl Carousel CSS Links-->
<link rel="stylesheet" href="css/owl/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl/owl.theme.default.min.css">

<!-- Custom File's Link -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive-style.css">

</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="85">

<!-- Navbar Section Start -->
<header class="header_wrapper">
  <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img decoding="async" src="images/logo.jpeg" class="img-fluid" alt="logo">
          </a>
          <button class="navbar-toggler pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <i class="fas fa-stream navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav menu-navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="about.php">About</a>
                  </li> 
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Activities
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <ul>
                          <li><a class="dropdown-item" href="helpline.php">Helpline</a></li>
                          <li><a class="dropdown-item" href="adoption.php">Adoption</a></li>
                          <li><a class="dropdown-item" href="clinic.php">Animal Clinic</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Get Involved
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <ul>
                          <li><a class="dropdown-item" href="volunteer.php">Volunteer with Us</a></li>
                          <li><a class="dropdown-item" href="donate.php">Donate</a></li>
                        </ul>
                      </div>
                    </li>  
                  <li class="nav-item">
                      <a class="nav-link" href="adoption.php">Adoption</a>
                  </li> 
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Help
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <ul>
                          <li><a class="dropdown-item" href="get_help.php">Get Help</a></li>
                          <li><a class="dropdown-item" href="locate_help.php">Locate Help</a></li>
                          <li><a class="dropdown-item" href="register.php">Register with Us</a></li>
                        </ul>
                      </div>
                    </li>
              </ul>
              <ul class="navbar-nav">
                  <li class="nav-item text-center">
                      <a class="nav-link learn-more-btn btn-extra-header" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item text-center">
                      <a class="nav-link learn-more-btn" href="donate.php">Donate</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
</header>
<!-- Navbar Section Exit -->

<!-- Banner section --> 
<section id="home" class="banner_wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 header-img-section">
                <img decoding="async" src="images/volunteer_cover.jpg" class="img-fluid" alt="Banner">
            </div>
            <div class="col-md-6 my-5 my-md-0 text-center text-md-start">
                
                <h1 class="banner-title"><span>Volunteer</span> with Us.</h1>
                <p class="banner-title-text">Our Volunteers and members, form a part of a growing network of animal lovers who support AASHRAYA’s mission. Our members believe that animal abuse and their ill treatment are deep rooted in the cultural and social mind-sets of the people and these require fundamental changes in how people think about their relationship with the animals</p>
                <p class="banner-title-text">If you care for animals and other creatures that we share this earth with and would like to contribute your efforts that could have a multiplier effect in building a compassionate society in India, come join us as a volunteer.</p>
            </div> 
        </div>  
    </div>
</section>  
<!-- Banner section exit -->

<!-- Send message -->
<div class="free_trial">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-lg-6 text-center text-lg-start">
                <h2 class="free_title">If you want to volunteer us, the form is provided below.</h2>
            </div>
            <div class="col-sm-12 col-lg-6 text-center text-lg-end mt-4 mt-lg-0"> 
                <a class="learn-more-btn" href="#contact"><i class="fa fa-rocket" aria-hidden="true"></i>Free Consultation</a> 
            </div>
        </div>
    </div>
</div>

<!-- Registration Section Starts-->

<section class="reg_sec">
    <div class="register">
    <header>Volunteer Us</header>

    <form action="volunteer_form.php" class="register_form" method="POST">

      <div class="input-box-register">
        <label>Full Name</label>
        <input type="text" name="fullname" placeholder="Enter full name" required />
      </div>

      <div class="input-box-register">
        <label>Email Address</label>
        <input type="text" name="email" placeholder="Enter email address" required />
      </div>

      <div class="column">
        <div class="input-box-register">
          <label>Phone Number</label>
          <input type="number" name="number" placeholder="Enter phone number" required />
        </div>
        <div class="input-box-register">
          <label>Birth Date</label>
          <input type="date" name="date" placeholder="Enter birth date" required />
        </div>
      </div>
      <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender" value="Male"  />
            <label for="check-male">male</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" value="Female"  />
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-other" name="gender" value="Not Prefered" />
            <label for="check-other">prefer not to say</label>
          </div>
        </div>
      </div>
      <div class="input-box-register address">
        <label>Address</label>
        <input type="text" name="add1" placeholder="Enter street address" required />
        
        
        <div class="column">
             <!-- <input type="text" placeholder="Enter street address line 2" required /> -->
            <input type="text" name="city" placeholder="Enter your city" required />
           
          
        </div>
        <div class="column">
          <input type="text" name="state" placeholder="Enter your state" required />
          <input type="number" name="pincode" placeholder="Enter postal code" required />
        </div>
      </div>


      <div class="column">
        <div class="input-box-register">
          <label>Occupation</label>
          <div class="select-box">
            <select name="occupation">
              <option >Student</option>
              <option>Self Employed</option>
              <option>Professional</option>
              <option>Not Employed Yet</option>
           </select>
        </div>
        </div>
        <div class="input-box-register">
          <label>Time you can dedicate</label>
          <div class="select-box">
            <select name="time">
              <option >Weekends</option>
              <option>2-4 Hours per week</option>
              <option>5-8 Hours per week</option>
              <option>More than 8 hours per week</option>
              <option>Other</option>
           </select>
        </div>
        </div>

        <div class="input-box-register">
            <label>Minimum Duration</label>
            <div class="select-box">
              <select name="duration">
                <option >1 Month</option>
                <option>3 Months</option>
                <option>6 Months</option>
             </select>
          </div>
          </div>
      </div>
    <button input name="submit" value="Save">Submit</button>
    </form>
</div>
  </section>

<!-- Registration Section Ends-->

<!-- Footer section -->
<section id="contact" class="footer_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 footer_logo mb-4 mb-lg-0">
                <img decoding="async" src="images/logo.jpeg">
                <p class="footer_text">We aim to prevent cruelty to animals and protect them from injury, to promote animal care, welfare and foster the human-animal relationship.

                </p>
            </div>
            <div class="col-lg-4 px-lg-5 mb-4 mb-lg-0">
                <h3 class="footer_title">Contact</h3>
                <p class="footer_text">
                    <a href="#">aashraya@gmail.com</a><br>
                    <a href="#" class="footer-address">Jankipuram <br>Lucknow, 226021, India</a>
                </p>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <h3 class="footer_title">Social Media</h3>
                <p>
                    <a href="#" class="footer_social_media_icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="footer_social_media_icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="footer_social_media_icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="footer_social_media_icon"><i class="fab fa-dribbble"></i></a>
                </p>
            </div>
            <div class="col-12 footer_credits text-center">
                <span>© 2023 <a href="#" target="_blank" title="AASHRAYA">Aashraya</a>™. All Rights Reserved.</span>
            </div>
        </div>
    </div>
</section>
<!-- Footer section exit -->



<!-- jQuery CDN Link -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap 5 JS CDN Links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

<!-- Owl Carousel JS Links
<script src="js/owl/owl.carousel.js"></script>-->

<!-- Custom Js Link -->
<script src="js/main.js"></script>
</body>
</php>


