<!DOCTYPE html>
<html lang="zh-TW">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Project Management System</title>
    <!-- custom.css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
</head>
<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(img/banner-bk.jpg);">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-5 align-self-center ">
                    <h3 class="text-white">Project Management</h3>
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <a href="login" class="text-white lead" style="margin-right: 5%;">Login</a>
                        <a href="signup" class="text-white lead">Signup</a>
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
            	A New Way<br>
            	To Plan Your <br> 
                Projects
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
            With an intuitive user interface, robust task tracking, and real-time communication 
            <br>features, it empowers teams to streamline project timelines, allocate resources 
            <br>effectively, and achieve project milestones with precision.
            </p>
            <a href="signup" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Get Started</a>
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">Smart Project Organisation</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <!-- <img src="img/smart-protect-1.jpg" alt="Anti-spam" class="mx-auto"> -->
                <h4>Organise Projects</h4>
                <p>Where tasks, timelines, and resources seamlessly 
                    converge for optimal organizational efficiency</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <!-- <img src="img/smart-protect-2.jpg" alt="Phishing Detect" class="mx-auto"> -->
                <h4>Task Allocation</h4>
                <p>Facilitates the strategic assignment and distribution 
                    of tasks, optimizing the allocation process for enhanced 
                    project management efficiency</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <!-- <img src="img/smart-protect-3.jpg" alt="Smart Scan" class="mx-auto"> -->
                <h4>User Permissions</h4>
                <p>Defining permissions, and access levels 
                    to ensure that sensitive information is only accessible 
                    to authorized individuals</p>
            </div>
        </div>
    </div>
    <!-- feature (skew background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Take a look inside</h2>
                    <p class="my-4">Signup to manage your projects with ease and comfort</p>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                    <img src="img/feature-1.png" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- feature (purple background) -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold">Safe and reliable</h2>
                    <p class="my-4">
                    An impeccably secure and reliably robust project management tool, 
                    meticulously designed to safeguard sensitive project data while providing 
                    a steadfast foundation for seamless collaboration and effective project oversight.
                    </p>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center flex-md-first">
                    <img src="img/feature-2.png" alt="Safe and reliable" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(img/contact-bk.jpg);">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="offset-md-4 text-white text-center " >
                    <h2 class="font-weight-bold">Contact Us</h2>
                    <p class="my-4">
                        Let us know if you have any queries or suggestions,<br>
                        We'd love to hear from you!
                    </p>
                    <ul class="list-unstyled">
                        <li>Email : admin@projectmanagement.com</li>
                        <li>Phone : 123-456-789</li>
                    </ul>
                </div>
                <!-- <div class="col-md-6">
                    <form>
                    	<div class="row">
	                        <div class="form-group col-md-6">
	                            <label for="name">Your Name</label>
	                            <input type="name" class="form-control" id="name">
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="Email">Your Email</label>
	                            <input type="email" class="form-control" id="Email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Message</label>
	                        <textarea class="form-control" id="message" rows="3"></textarea>
	                    </div>
                        <button type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                </div> -->
            </div>
        </div>
    </div>

	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="text-white align-self-center text-center">
                    Copyright © 
                </div>
                <!-- <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-medium" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    
    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
      });
    </script>
</body>

</html>