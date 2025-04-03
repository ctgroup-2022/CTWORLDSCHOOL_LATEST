<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Gallery | CT World School</title>
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

.gallery-img{
    width: 500px;
    height: 300px;
    border: 4px dashed;
    border-color: #198754 #ffc107 #ffc107 #198754;
}
</style>
<script type="text/javascript">

$(document).ready(function() {
  $('#pagination-demo').twbsPagination({
    totalPages: 5,
    // the current page that show on start
    startPage: 1,
    // maximum visible pages
    visiblePages: 5,
    initiateStartPageClick: true,
    // template for pagination links
    href: false,
    // variable name in href template for page number
    hrefVariable: '{{number}}',
    // Text labels
    first: 'First',
    prev: 'Previous',
    next: 'Next',
    last: 'Last',
    // carousel-style pagination
    loop: false,
    // callback function
    onPageClick: function(event, page) {
      $('.page-active').removeClass('page-active');
      $('#page' + page).addClass('page-active');
    },
    // pagination Classes
    paginationClass: 'pagination',
    nextClass: 'next',
    prevClass: 'prev',
    lastClass: 'last',
    firstClass: 'first',
    pageClass: 'page',
    activeClass: 'active',
    disabledClass: 'disabled'
  });
});

</script>
</head>

<body>

<!-- header include -->
<?php
include('inc/menu.php');?>
<!-- header include -->
<!-- Inner Heading end -->

<div class="inner-content">
    <div class="container-fluid">
      <div class="row">
        <?php
        #GET Product ID From URL
        $Id = $_GET["Event"];
        $json = file_get_contents('Data/galleryOfEvents.json');
        #Decode the JSON file
        $json_data = json_decode($json, true);
        // var_dump($json_data);
        foreach ($json_data["GALLERY"] as $data) {
          if ($data["EVENTID"] == $Id) {
            foreach ($data["PHOTO"] as $photo) {
        ?>
              <div class="col-md-3 mt-3 mb-3">
                <a href="<?php echo  $photo["IMG"]; ?>"> <img src="<?php echo  $photo["IMG"]; ?>" class="gallery-img" /> </a>
              </div>
            <?php
            }
            ?>

        <?php
          }
        }
        ?>

      </div>
    </div>
  </div>
  </div>

  <!--Gallery End-->
  <!--Footer Start-->
  <?php
  require("inc/footer.php");
  ?>
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