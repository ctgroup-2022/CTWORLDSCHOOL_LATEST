<!doctype html>



<html lang="en">







<head>



    <!-- Required meta tags -->



    <meta charset="utf-8">



    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">







    <!-- Fav Icon -->



    <link rel="shortcut icon" href="images/favicon1.png">







    <!-- Bootstrap CSS -->



    <link rel="stylesheet" href="css/bootstrap.min.css">



    <!-- Font Awesome CSS -->



    <link href="css/font-awesome.css" rel="stylesheet">



    <!-- Settings CSS -->



    <link rel="stylesheet" href="rs-plugin/css/settings.css">



    <!-- Jquery Fancybox CSS -->



    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" media="screen" />



    <!-- Owl Carousel CSS -->



    <link href="css/owl.carousel.css" rel="stylesheet">



    <!-- Style CSS -->



    <link href="css/style.css" rel="stylesheet" id="colors">



    <!-- Open Sans Family -->



    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">



    <!-- Roboto Family -->



    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">



    <title><?php include("title.php"); ?></title>











    <style>

        h5 {



            background-color: #125faf;



            color: #fff;



        }







        h5:hover {



            color: #125faf;



            background-color: #fff;



        }







        h6 {



            background-color: #125faf;



            color: #fff;



        }







        h6:hover {



            color: #125faf;



            background-color: #fff;



        }







        .Nh6 {



            background-color: #125faf;



            color: #fff;



            font-size: 24px;



        }







        .Nh6:hover {



            background-color: #125faf;



            color: #fff;



            font-size: 24px;



        }







        .gimg {



            height: 200px;



            width: 250px;



        }







        .gimg:hover {



            height: 210px;



            width: 300px;



        }







        .gimg4 {



            height: 220px;



            width: 280px;



        }







        .gimg4:hover {



            height: 240px;



            width: 300px;



        }



















        .Nh3 {

            background-color: #125faf;



            color: #fff;



            font-size: 28px;



        }

    </style>









    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



    <script type="text/javascript" src="https://www.solodev.com/assets/pagination/jquery.twbsPagination.js"></script>







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







    <?php



    require("headerscript.php");



    ?>

<!-- Google tag (gtag.js) START -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11392261518">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11392261518');
</script>
<!-- Google tag (gtag.js)  END UPDATE BY DALIP (Dr.Sumesh)-->

</head>



<body>







    <!--Header Start-->



    <?php



    include("headermenufull.php");



    ?>







    <!--Header End-->

    <!-- Inner Heading start -->







    <div>



        <img src="images/about/ctw1.jpg" width="1900px" height="110px" />



    </div>



    <!-- Inner Heading end -->



    <div class="inner-content">











        <div class="container-fluid">







            <div class="col-md-12">







                <caption>



                    <center>

                        <h4 class="Nh6"><span class="Nh3">--EVENTS-- </br>



                            </span></h4>



                    </center>



                </caption>







            </div>







            <div class="row">











            </div>







            <div class="row">







                <?php











                #GET Product ID From URL



                $Id = $_GET["Event"];











                $json = file_get_contents('Data/gallery.json');







                #Decode the JSON file



                $json_data = json_decode($json, true);







                // var_dump($json_data);







                foreach ($json_data["Gallery"] as $data) {



                    if ($data["GalleryID"] == $Id) {







                        foreach ($data["Photo"] as $photo) {



                ?>



                            <div class="col-md-3 mt-3 mb-3">

                                <a href="<?php echo  $photo["Img"]; ?>"> <img src="<?php echo  $photo["Img"]; ?>" style="max-width:100%;max-height:100%;width:100%;height:300px;border:2px solid #125faf" /> </a>

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



    require("ctworldfooter.php");



    ?>











    <!--Copyright Start-->







    <!-- Optional JavaScript -->



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



    <script src="js/jquery-3.2.1.slim.min.js"></script>



    <!-- Popper min -->



    <script src="js/popper.min.js"></script>



    <!-- Bootstrap min file -->



    <script src="js/bootstrap.min.js"></script>



    <!-- Revolution Slider file -->



    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>



    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>



    <!-- Isotope -->



    <script src="js/isotope.js"></script>



    <!-- Owl Carousel -->



    <script src="js/owl.carousel.js"></script>



    <!-- Jquery Fancybox -->



    <script src="js/jquery.fancybox.min.js"></script>



    <!-- Counter -->



    <script src="js/counter.js"></script>



    <!-- general script file -->



    <script src="js/script.js"></script>



</body>











</html>