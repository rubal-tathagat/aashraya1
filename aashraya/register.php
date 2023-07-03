
<!DOCTYPE php>
<php lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<title>register</title>

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


<!-- Registration Section Starts-->

<section class="reg_sec">
    <div class="register">
    <header>Registration Form</header>

    <form action="register_form.php" class="register_form" method="POST">

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
            <input type="text" name="city" placeholder="Enter your city" required />  
        </div>
        <div class="column">
          <input type="text" name="state" placeholder="Enter your state" required />
          <input type="number" name="pincode" placeholder="Enter postal code" required />
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


