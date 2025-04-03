<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Book A School Tour | CT World School</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- favicon -->
        <link rel="shortcut icon" href="img/favicon_io/favicon.ico">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
       <!-- new stylesheet -->
        <link href="newcss/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 

      <style>

/*** Single Page Hero Header Start ***/
.bg-breadcrumb {
    position: relative;
    overflow: hidden;
    background:  url('img/header/online.gif');
    background-position: center top;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 120px 0 60px 0;
    transition: 0.5s;
    margin-bottom: 30px;
}

.bg-breadcrumb .breadcrumb {
    position: relative;
    background-color: #198754;
}

.bg-breadcrumb .breadcrumb .breadcrumb-item a {
    color: aliceblue;
}

@media (max-width: 992px) {
    .bg-breadcrumb {
        padding: 60px 0 60px 0;
    }
}
/*** Single Page Hero Header End ***/

    </style>

      
    </head>

    <body>

<!-- header include -->
 <?php
 include('inc/menu.php');?>
 <!-- header include -->
   <!-- page header starts -->
   <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-5 wow fadeInDown" data-wow-delay="0.1s">Book A School Tour</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                
            </ol>    
        </div>
    </div>

   
    <div class="container-fluid contact  py-5" >
            <div class="container py-5" >
                <div class="row g-5 mb-5" >
                    <div class="col-12" style="background: #fff4d5" >
                        <p class="text-dark lead" align="justify">Discover the heart of CT World School through our engaging school tour. Explore our state-of-the-art facilities, vibrant classrooms, and welcoming community spaces. Our tours offer a glimpse into the enriching environment where students learn, grow, and thrive. Join us to experience firsthand the commitment to excellence and the supportive atmosphere that sets our school apart. 
                        </p>
                        <p class="text-dark lead" align="justify">Schedule your appointment for the visit today and see why CT World is the perfect place for your child’s educational journey.</p>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s" style="background: #fff4d5">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    </div>
                        <form action="submit.php" method="post">
                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating border border-warning">
                                        <input type="text" class="form-control" id="Name" name="Name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating border border-warning">
                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-12  col-md-12">
                                    <div class="form-floating border border-warning">
                                        <input type="tel" class="form-control" id="Phone" name="Phone" placeholder="Phone" required>
                                        <label for="tel">Your Phone</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating border border-warning">
                                        <textarea class="form-control" placeholder="Leave a message here" id="Message" name="Message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-success w-100 py-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="sports-image h-100 w-100">
                           <img src="img/schooltour.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row g-5" style="background: #fff4d5">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="d-inline-flex bg-white w-100 border border-warning p-4">
                            <i class="fas fa-map-marker-alt fa-2x text-warning me-4"></i>
                            <div>
                                <h4>Address</h4>
                                <p class="mb-0">66 Feet Road, Near
                                CT Institutions Jalandhar-144020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="d-inline-flex bg-white w-100 border border-warning p-4">
                            <i class="fas fa-envelope fa-2x text-warning me-4"></i>
                            <div>
                                <h4>Mail Us</h4>
                                <p class="mb-0">ctworldschool@ctgroup.in</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="d-inline-flex bg-white w-100 border border-warning p-4">
                            <i class="fa fa-phone-alt fa-2x text-warning me-4"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class="mb-0">0181-5032700, +91 78884-99128</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    <!-- Footer Start -->
    <?php
       include('inc/footer.php');?>
        <!-- Footer End -->

        
        
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>  -->
  
 <!-- Script for New Day End -->
<!-- Back to Top -->

        <a href="#" class="btn btn-success btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   
       
        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
   
    </body>

</html>