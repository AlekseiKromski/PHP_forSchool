<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>Foxebiz - news</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/main.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
</head>
<body>
<!--Wrapper-->
<?php require_once 'header.php' ?>
<!--End header-->
<!--Hero section-->
<section class="hero" >
    <div class="background-img gradient-overlay gradient-overlay-dark" style="background-attachment: fixed;">
        <img src="assets/bg/bd_news.jpg" alt="" >
    </div>
    <!--Container-->
    <div class="container height-30vh">
        <!--Row-->
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-10 col-lg-10">
                <h1 class="mb-3 text-white">news</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0  justify-content-center">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">news</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
</section>
<!--End hero section-->
<!--Section-->
<section class="bg-white spacer-double-xxs">
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4 mb-4 mb-md-0"style="margin-left: auto;">
                <form class="d-sm-flex align-items-center" method="get">
                    <select class="custom-select mr-2" name="id">
                        <?php
                        foreach ($array as $k => $v) {
                            echo "<option selected=\"\" value='{$v['name']}'>{$v['name']}</option>";
                        }

                        ?>
                    </select>
                    <input type="submit" value="Go" class="btn btn-primary">
                </form>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
</section>
<!--End section-->
<!--Section-->
<section  class=" spacer-double-lg bg-gray">
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row">
            <?php echo $content;?>
        </div>
        <!--End row-->
        <!--End row-->
    </div>
    <!--End container-->
</section>
<!--End section-->
<!--Section-->
<!--End footer-->
<!-- End modal -->
<!--To the top-->
<a class="scroll-to-top scroll" href="#wrapper"><span class=" fa fa-angle-up top-icon "></span></a>
<!-- End to the top -->
</div>
<!-- End wrapper-->
<!--Javascript-->
<script src="js/jquery-1.12.4.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-dropdownhover.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/smooth-scroll.js" ></script>
<script src="js/jquery.magnific-popup.min.js" ></script>
<script src="js/jquery.countdown.min.js" ></script>
<script src="js/placeholders.min.js"></script>
<script src="js/script.js"></script>
<!-- Google analytics -->
<!-- End google analytics -->
</body>
</html>