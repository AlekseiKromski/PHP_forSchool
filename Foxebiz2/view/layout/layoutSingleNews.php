<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>Foxebiz - single new</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/main.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
    <link href="css/flexslider.css" rel="stylesheet" type="text/css"  media="all" />
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"  media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css"  media="all" />
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
</head>
<body>
<!-- End preloader-->
<!--Wrapper-->
<?php
require_once 'header.php';
?>
<!--Hero section-->
<section class="hero">
    <div class="background-img gradient-overlay gradient-overlay-dark" style="background-attachment: fixed;">
        <img src="assets/bg/bg_single.jpg" alt="" ">
    </div>
    <!--Container-->
    <div class="container height-30vh">
        <!--Row-->
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-10 col-lg-10">
                <h1 class="mb-3 text-white"> <?php echo $name ?> </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0  justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">post</li>
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
<section class=" spacer-double-lg bg-gray">
    <!--Container-->
    <div class="container">
        <!--Row-->
        <div class="row">
            <div class="col-lg-9  order-lg-2 mb-lg-0 mb-5">
                <!--Row-->
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="card">
                            <?php
                            echo $content;
                            ?>
                        </div>
                    </div>
                </div>
                <!--End row-->
                <!--Row-->
                <?php
                echo $content3;
                ?>

                <!--End row-->
                <!--Row-->
                <!--End row-->
                <!--Row-->
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h4 mb-5 ">Post a comment</h3>
                                <form method="post" action="AddComment?id=<?php echo $_GET['id'];?>">
                                    <div class="row">
                                        <div class="col-sm-12 mb-5">
                                            <label class="form-label">
                                                Your message
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class=" input-group form">
                                                <input class="form-control " type="text" name="name" placeholder="Your full name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">
                                                Your comment
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class=" input-group form mb-5">
                                                <textarea class="form-control " rows="6" name="text" placeholder="Type your comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary btn-wide">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <div class="col-lg-3  order-lg-1">
                <div class="mb-5">
                    <h3 class="h5 mb-4">Latest Posts</h3>
                    <ul class="list-unstyled mb-0">
                        <?php
                        echo $content2;
                        ?>
                    </ul>
                </div>
                <hr class="my-5">
                <div class="mb-5">
                    <h3 class="h5 mb-4">Categories</h3>
                    <ul class="list-inline mb-0 font-size-15 ">
                        <?php
                        echo $category;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
</section>
<!--End section-->
<!--To the top-->
<a class="scroll-to-top scroll active" href="#wrapper"><span class=" fa fa-angle-up top-icon "></span></a>
<!-- End to the top -->
</div>
<!-- End wrapper-->
<!--Javascript-->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-dropdownhover.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.min.js" ></script>
<script src="js/placeholders.min.js"></script>
<script src="js/script.js"></script>
<!-- Google analytics -->
<!-- End google analytics -->
</body>
</html><?php
