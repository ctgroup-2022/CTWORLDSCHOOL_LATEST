<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Work With Us | CT World School</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon_io/favicon.ico">
    <!-- favicon android-chrome-512x512 -->
    <link rel="shortcut icon" href="img/favicon_io/android-chrome-512x512.png">
    <!-- favicon android-chrome-192x192 -->
    <link rel="shortcut icon" href="img/favicon_io/android-chrome-192x192.png">
    <!-- favicon apple-touch-icon -->
    <link rel="shortcut icon" href="img/favicon_io/apple-touch-icon.png">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    /*** Single Page Hero Header Start ***/
    .bg-breadcrumb {
        position: relative;
        overflow: hidden;
        background: url('./img/header/infra.gif');
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
            <h4 class="text-white display-4 mb-5 wow fadeInDown" data-wow-delay="0.1s">Work With Us</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">

            </ol>
        </div>
    </div>


    <div class="container  mb-5">
        <div class="container-fluid  py-5 mb-3" style="background: #fff4d5">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12  col-xl-12">
                    
                    <p class="text-dark  mb-3 lead" align="justify">Join our dedicated team at CT World School and
                        help shape the future of education. We are committed to fostering a dynamic and supportive
                        environment. As part of our team, you’ll have the opportunity to make a meaningful impact,
                        collaborate with passionate colleagues, and contribute to a vibrant school community. Explore
                        our current job openings and discover how you can be a part of our mission to inspire and
                        educate the leaders of tomorrow.</p>
                    <form action="career.php" method="post" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-warning">
                                    <input type="text" class="form-control" id="Name" name="Name"
                                        placeholder="Your Name" required>
                                    <label for="Name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-warning">
                                    <input type="email" class="form-control" id="Email" name="Email"
                                        placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6  col-md-12">
                                <div class="form-floating border border-warning">
                                    <input type="tel" class="form-control" id="Phone" name="Phone" placeholder="Phone"
                                        required>
                                    <label for="tel">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6  col-md-12 ">
                                <div class="form-floating border border-warning bg-white">
                                    <input type="file" class="form-control" id="Resume" name="Resume"
                                        placeholder="Resume" required>
                                    <label for="cv">Drop your CV</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating border border-warning">
                                    <textarea class="form-control" placeholder="Leave a message here" id="Description"
                                        name="Description" style="height: 160px"></textarea>
                                    <label for="Description">Write About Yourself</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success w-100 py-3" name="submit" id="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
   
    <!-- Footer Start -->
    <?php include('inc/footer.php');?>
    <!-- Footer End -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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