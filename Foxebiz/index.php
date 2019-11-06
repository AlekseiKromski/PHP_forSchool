<?php
require_once 'config/config_require.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title>Foxebiz</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Css -->
      <link href="css/custom_style.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="css/main.css" rel="stylesheet" type="text/css" media="all"/>
      <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
      <link href="css/flexslider.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="css/fonts.css" rel="stylesheet" type="text/css"  media="all" />
       <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
   </head>
   <body>
         <!--Header-->
         <?php
         require_once 'include_files/search_modal.php';
         require_once 'include_files/header.php';
         require_once $core_classes['TopNews'];
         $object_topNews = new TopNews($connect);
         ?>
         <!--End header-->
         <!--Hero section-->
         <section class="hero" >
            <div class="background-img gradient-overlay gradient-overlay-dark">
               <img src="assets/bg/bg.jpg" alt="" >
            </div>
            <div class="container height-70vh">
               <div class="row justify-content-center text-center">
                  <div class="col-12 col-md-10 col-lg-10">
                     <h1 class="display-4 mb-3 text-white">Our news the most <span class="typed font-weight-600"></span></h1>
                     <p class="lead mb-5 text-white">Read the latest news in <b>Estonia</b> right now!</p>
                  </div>
               </div>
            </div>
         </section>
         <!--End hero section-->
         <section  class="spacer-double-lg">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col ">
                     <div class="mb-5  text-center">
                        <!--Вывод всех новостей-->
                        <h4 class="mb-5">TOP NEWS</h4>
                        <div class="row">
                            <?php
                            foreach ($object_topNews->getArrTopNews() as $k => $v){
                                echo "
                                <div class=\"col-md-3 mb-5\">
                                  <a href=\"single-news.php?id={$v['id']}\"><img src=\"{$v['img']}\" alt=\"\" class=\"breaking_img\"></a>
                                  <h6 class=\"breaking_news_name\"><a class=\"breaking_link\" href=\"single-news.php?id={$v['id']}\">{$v['name']}</a></h6>
                                  <p class=\"breaking_news_data\">by <b>{$v['user']}</b> {$v['date']}</p>
                                  <p class=\"breaking_desc\"><a class=\"breaking_link\" href=\"single-news.php?id={$v['id']}\">{$v['text']}</a></p>
                                </div>
                                ";
                            }
                            ?>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End section-->
         <!--Footer-->
         <!--End footer-->
         <!-- Modal -->
         <div class="modal login fade" id="login" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="p-5">
                     <form>
                        <div id="signin">
                           <header class="text-center mb-5">
                              <h2 class="h4 mb-0">Login to Your Account</h2>
                           </header>
                           <div class="mb-3">
                              <div class=" input-group form">
                                 <div class="input-group-prepend ">
                                    <span class="input-group-text form-icon">
                                    <span class="fa fa-user form-icon-inner"></span>
                                    </span>
                                 </div>
                                 <input class="form-control " name="email"  placeholder="Email" type="email">
                              </div>
                           </div>
                           <div class=" mb-3">
                              <div class=" input-group form">
                                 <div class="input-group-prepend ">
                                    <span class="input-group-text form-icon">
                                    <span class="fa fa-lock form-icon-inner"></span>
                                    </span>
                                 </div>
                                 <input class="form-control " name="password"  placeholder="Password" type="password">
                              </div>
                           </div>
                           <div class="mb-3">
                              <button type="submit" class="btn btn-block btn-primary">Login to your account</button>
                           </div>
                           <div class="text-center mb-3">
                              <p class="text-muted small mb-0">
                                 Dont have an account yet?
                                 <a href="#"   >Create an account
                                 </a>
                              </p>
                              <p class="text-muted small">
                                 Forgot your username or password?
                                 <a href="#">  Recover account
                                 </a>
                              </p>
                           </div>
                           <div class="text-center divider-holder my-3">
                              <span class="divider">OR</span>
                           </div>
                           <div class="row mx-gutters-2 mb-4">
                              <div class="col-sm-6 mb-2 mb-sm-0">
                                 <button type="button" class="btn  btn-block btn-facebook">
                                 <span class="fab fa-facebook-f mr-2"></span>
                                 Login with Facebook
                                 </button>
                              </div>
                              <div class="col-sm-6">
                                 <button type="button" class="btn btn-block btn-twitter">
                                 <span class="fab fa-twitter mr-2"></span>
                                 Login with Twitter
                                 </button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
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
      <script src="js/typed.min.js"></script>
      <script src="js/typeanimation.js"></script>
      <script src="js/placeholders.min.js"></script>
      <script src="js/script.js"></script>
      <!-- Google analytics -->
      <!-- End google analytics -->
   </body>
</html>

