<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Contact Us | CT World School</title>
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
        <!-- <link href="newcss/style.css" rel="stylesheet"> -->
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
            <h1 class="text-white display-4 mb-5 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                
            </ol>    
        </div>
    </div>

   
    <div class="container-fluid contact bg-- py-5">
        <div class="container py-5" style="background: #fff4d5">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <p class="text-uppercase text-warning fs-5 mb-0">Let’s Connect</p>
                        <h2 class="display-4 text-capitalize mb-3">Send Your Message</h2>
                    </div>
                    <form action="submit.php" method="post">
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-warning">
                                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Your Name" required>
                                    <label for="Name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-warning">
                                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Your Email" required>
                                    <label for="Email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12 col-md-12">
                                <div class="form-floating border border-warning">
                                    <input type="tel" class="form-control" id="Phone" name="Phone" placeholder="Your Phone" required>
                                    <label for="Phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating border border-warning">
                                    <textarea class="form-control" placeholder="Leave a message here" id="Message" name="Message" style="height: 160px" required></textarea>
                                    <label for="Message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="contact-map h-100 w-100">
                        <iframe class="h-100 w-100" style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.181335830367!2d75.56365471200557!3d31.2434030606653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5c8c4504125f%3A0x7afe21100a0927c0!2sCT%20World%20School!5e0!3m2!1sen!2sin!4v1721466132203!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-inline-flex bg-white w-100 border border-warning p-4">
                        <i class="fas fa-map-marker-alt fa-2x text-warning me-4"></i>
                        <div>
                            <h4>Address</h4>
                            <p class="mb-0">66 Feet Road, Near CT Institutions Jalandhar-144020</p>
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