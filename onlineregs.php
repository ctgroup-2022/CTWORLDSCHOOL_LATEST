<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Online Registration | CT World School</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta name="description" content="Register online for admission to CT World School, Jalandhar. Fill out our easy and secure online registration form to start your child’s journey toward quality education and holistic development.">
    <meta name="title" content="Online Registration | CT World School">
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
    <!-- new stylesheet -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    /*** Single Page Hero Header Start ***/
    .bg-breadcrumb {
        position: relative;
        overflow: hidden;
        background: url('img/header/online.gif');
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
    
    /* Form Styling - Enhanced with Two-Column Layout */
    .registration-form {
        background: linear-gradient(145deg, #fff4d5 0%, #fffcf0 100%);
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        padding: 40px;
        margin: 40px auto 60px;
        max-width: 1200px;
        border: 1px solid rgba(25, 135, 84, 0.1);
        position: relative;
        overflow: hidden;
    }
    
    .form-container {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }
    
    .form-side {
        flex: 1;
        min-width: 300px;
        padding-right: 20px;
    }
    
    .image-side {
        flex: 1;
        min-width: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    
    .image-side img {
        max-width: 100%;
        height: auto;
        position: relative;
        z-index: 2;
    }
    
    .image-side::before {
        content: "";
        position: absolute;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background-color: rgba(25, 135, 84, 0.1);
        z-index: 1;
        right: 40px;
        top: 40px;
    }
    
    .image-side::after {
        content: "";
        position: absolute;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background-color: rgba(255, 208, 0, 0.15);
        z-index: 1;
        left: 60px;
        bottom: 30px;
    }
    
    .registration-form .form-title {
        text-align: left;
        margin-bottom: 30px;
        color: #198754;
        font-weight: 700;
        font-size: 1.8rem;
        position: relative;
        padding-bottom: 12px;
    }
    
    .registration-form .form-title:after {
        content: "";
        position: absolute;
        width: 80px;
        height: 3px;
        background: #198754;
        bottom: 0;
        left: 0;
        transform: none;
    }
    
    .registration-form .form-floating {
        margin-bottom: 20px;
        position: relative;
        transition: transform 0.3s ease;
    }
    
    .registration-form .form-control,
    .registration-form .form-select {
        border-radius: 8px;
        height: 55px;
        padding-left: 45px;
        border: 2px solid rgba(25, 135, 84, 0.6);
        background-color: rgba(255, 255, 255, 0.8);
        transition: all 0.3s ease;
        font-size: 15px;
    }
    
    .registration-form .form-control:focus,
    .registration-form .form-select:focus {
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.15);
        background-color: #ffffff;
        border-color: #198754;
    }
    
    .registration-form textarea.form-control {
        height: 120px;
        padding-top: 18px;
    }
    
    .registration-form .input-icon {
        position: absolute;
        top: 18px;
        left: 16px;
        color: #198754;
        z-index: 100;
        font-size: 18px;
    }
    
    .btn-submit {
        background: #198754;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 12px 30px;
        font-weight: 600;
        font-size: 16px;
        letter-spacing: 0.5px;
        box-shadow: 0 6px 15px rgba(25, 135, 84, 0.25);
        transition: all 0.3s ease;
    }
    
    .btn-submit:hover {
        background: #0d6c38;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(25, 135, 84, 0.3);
    }
    
    .registration-form .form-floating label {
        padding-left: 45px;
        color: #555;
    }
    
    .border-success {
        border-color: rgba(25, 135, 84, 0.6) !important;
    }
    
    .platform-description {
        margin-bottom: 20px;
        color: #666;
    }
    
    @media (max-width: 992px) {
        .form-side, .image-side {
            flex: 100%;
            padding: 0;
        }
        
        .image-side {
            margin-top: 30px;
            order: 2;
        }
        
        .form-side {
            order: 1;
        }
    }
    
    @media (max-width: 768px) {
        .registration-form {
            padding: 25px 20px;
        }
    }
    </style>
</head>

<body>
    <!-- header include -->
    <?php include('inc/menu.php');?>
    <!-- header include -->
    <!-- page header starts -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-5 wow fadeInDown" data-wow-delay="0.1s">Online Registration</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            </ol>
        </div>
    </div>

    <div class="container registration-form">
        <div class="form-container">
            <div class="form-side">
                <h2 class="form-title">Student Registration Form</h2>
                <p class="platform-description">Fill out this form to register your child for quality education at CT World School.</p>
                
                <form action="admission.php" method="post" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating border border-success">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" class="form-control" id="Student_Name" name="Student_Name" placeholder="Student Name">
                                <label for="Student_Name">Name of Student</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating border border-success">
                                <i class="fas fa-user-tie input-icon"></i>
                                <input type="text" class="form-control" id="Parent_Name" name="Parent_Name" placeholder="Parent Name">
                                <label for="Parent_Name">Name of Parent</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating border border-success">
                                <i class="fas fa-phone input-icon"></i>
                                <input type="phone" class="form-control" id="phone" name="Phone" placeholder="Phone">
                                <label for="phone">Your Phone</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating border border-success">
                                <i class="fas fa-graduation-cap input-icon"></i>
                                <select class="form-select" aria-label="Default select" name="Grade" id="Grade">
                                    <option selected disabled>Select Grade</option>
                                    <option value="Kindergarten">Kindergarten</option>
                                    <option value="Primary">Primary</option>
                                    <option value="Secondary">Secondary</option>
                                    <option value="Senior Secondary">Senior Secondary</option>
                                </select>
                                <label for="Grade">Admission Grade</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating border border-success">
                                <i class="fas fa-comment input-icon"></i>
                                <textarea class="form-control" placeholder="Leave a message here" id="message" name="Message"
                                    style="height: 120px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-submit w-100 py-3">
                                <i class="fas fa-paper-plane me-2"></i>Send Registration
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="image-side">
                <img src="img/gallery/stydent.png" alt="Student Learning" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <?php include('inc/footer.php');?>
    <!-- Footer End -->

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
    <!-- Back to Top -->
    <a href="#" class="btn btn-success btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

</body>

</html>