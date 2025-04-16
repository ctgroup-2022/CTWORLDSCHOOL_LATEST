<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CT World School Campus Tour Images | CT World School</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="keywords" content="CT World School Campus Tour Images, CT World School Gallery, School Campus Images Jalandhar, Best School in Jalandhar Photos">

        <meta name="description" content="Take a virtual tour of CT World School through our exclusive campus images. Discover top-notch facilities, smart classrooms, and vibrant student life at the best school in Jalandhar.">
        <meta name="title" content="CT World School Campus Tour Images">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Tailwind CSS -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>

/*** Single Page Hero Header Start ***/
.bg-breadcrumb {
    position: relative;
    overflow: hidden;
    background:  url('./img/header/beyond.gif');
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








</style>

</head>

<body>

<!-- header include -->
<?php
include 'inc/menu.php';?>
<!-- header include -->
<!-- page header starts -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-5 wow fadeInDown" data-wow-delay="0.1s">Gallery</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">

        </ol>
    </div>
</div>

<!-- page header ends -->






<!-- CARD DESIGN -->


<div class="container mx-auto p-4   bg " style="background: #fff4d5">
        <h1 class="text-3xl font-bold text-center mb-8">Gallery View</h1>

        <!-- Card Grid Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        <?php
        // Load the JSON data from the file
        $json = file_get_contents('Data/galleryOfEvents.json');
        $json_data = json_decode($json, true);
        foreach (array_reverse($json_data["GALLERY"]) as $data) { ?>
            <!-- Card Component with Overlay -->
            <a href="ViewEventGallery.php?Event=<?php echo $data["EVENTID"]; ?>"
                class=" relative  transition-transform duration-300 ease-in-out transform hover:scale-105 bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg group"
                target="_blank">
                <!-- Card Image -->
                <img src="<?php echo $data["titleimage"]; ?>" alt="Card Image"
                    class="w-full h-48 object-cover object-top group-hover:opacity-75 transition-opacity duration-300">

                <!-- Card Content -->
                <div class="p-4 ">
                    <h2 class="text-lg font-semibold mb-2 group-hover:text-blue-500 transition-colors duration-300   ">
                    <?php echo $data["eventname"]; ?></h2>
                </div>

                <!-- Hover Overlay with Description -->
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <p class="text-white text-center px-4"><?php echo $data["description"]; ?></p>
                </div>
            </a>
            <?php } ?>


            <!-- Repeat the above <a> tag for each card to reach 15 cards -->
            <!-- Copy the following code for each card and adjust the href link and content as needed -->

            <!-- Card (Repeat 15 times with unique content for each card) -->
            <!-- Example: -->
            <!-- ... -->
        </div>

    </div>





















  <!--Gallery End-->
<?php
include "inc/footer.php";?>


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