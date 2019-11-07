<?php
require_once 'config/config_require.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title>Foxebiz - contact</title>
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

           <?php
           require_once 'include_files/search_modal.php';
           require_once 'include_files/header.php';
           ?>

         <!--Hero section-->
         <section class="hero" >
            <div class="background-img gradient-overlay gradient-overlay-dark" style="background-attachment: fixed;">
               <img src="assets/bg/bg_contact.jpg" alt="" >
            </div>
            <!--Container-->
            <div class="container height-30vh">
               <!--Row-->
               <div class="row justify-content-center text-center">
                  <div class="col-12 col-md-10 col-lg-10">
                     <h1 class=" mb-3 text-white">Contact Us</h1>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0  justify-content-center">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
         <section class="spacer-double-lg">
            <!--Container-->
            <div class="container ">
                  <div class="col-lg-6 p-5 float-left text-center">
                     <div class="background-img gradient-overlay gradient-overlay-azure" >
                        <img src="assets/img/11.jpg" alt="">
                     </div>
                     <div class="p-5 position-relative">
                        <h2 class="h3 text-white mb-4">Tallinn office</h2>
                        <ul class="list-unstyled text-white">
                           <li class=" pb-1">
                               Sakala 10143 Tallinn
                           </li>
                           <li class=" py-1">
                              Mon-Fri: 9 AM to 5 PM
                           </li>
                           <li class=" py-1">
                              +3729499594
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6 p-5 float-left text-center">
                     <div class="background-img gradient-overlay gradient-overlay-dark-blue" >
                        <img src="assets/img/12.jpg" alt="">
                     </div>
                     <div class="p-5 position-relative">
                        <h2 class="h3 text-white mb-4">Tartu office</h2>
                        <ul class="list-unstyled text-white">
                           <li class=" pb-1">
                               Turu 10 51013 Tartu
                           </li>
                           <li class=" py-1">
                              Mon-Fri: 9 AM to 5 PM
                           </li>
                           <li class=" py-1">
                              +3729499594
                           </li>
                        </ul>
                     </div>
                  </div>
            </div>
         </section>
         <!--End section-->
         <!--Section-->
         <section class="spacer-double-lg bg-gray">
            <!--Container-->
            <div class="container ">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col">
                     <div class="mb-5 pb-5 text-center">
                        <h2 class="h3">Contact us</h2>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container ">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-lg-9">
                      <?php
                      if(isset($_GET['error'])){
                          if($_GET['error'] == 'no_data'){
                              echo "<h3 class=\"h4 mb-5 \" style='color: red;'>You dont enter data</h3>";
                          }elseif ($_GET['error'] == 'no_get'){
                              echo "<h3 class=\"h4 mb-5 \" style='color: red;'>error_no get params.</h3>";
                          }elseif ($_GET['error'] == 'no_post'){
                              echo "<h3 class=\"h4 mb-5 \" style='color: red;'>error_no post params.</h3>";
                          }
                      }
                      ?>
                     <form method="post" action="Action/sendContact.php">
                        <div class="row">
                           <div class="col-sm-6 mb-5">
                              <label class="form-label">
                              Your name
                              <span class="text-danger">*</span>
                              </label>
                              <div class=" input-group form">
                                 <input class="form-control " type="text" name="name"  placeholder="Your full name" >
                              </div>
                           </div>
                           <div class="col-sm-6 mb-5">
                              <label class="form-label">
                              Your email
                              <span class="text-danger">*</span>
                              </label>
                              <div class=" input-group form">
                                 <input class="form-control " type="email" name="email" placeholder="Your email" >
                              </div>
                           </div>
                           <div class="col-sm-12 mb-5">
                              <label class="form-label">
                              Your phone
                              </label>
                              <div class="input-group form">
                                 <input class="form-control " type="text" name="phone"  placeholder="Phone" >
                              </div>
                           </div>
                           <div class="col-12">
                              <label class="form-label">
                              Your message
                              <span class="text-danger">*</span>
                              </label>
                              <div class=" input-group form mb-5">
                                 <textarea class="form-control " rows="6" name="text"  placeholder="Type your message" ></textarea>
                              </div>
                           </div>
                           <div class="col">
                              <div class="text-center">
                                  <input type="submit" value="Send" class="btn btn-primary btn-wide mb-2">
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End section-->
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
      <script src="js/placeholders.min.js"></script>
      <script src="js/script.js"></script>
      <!-- Google analytics -->
      <!-- End google analytics -->
   </body>
</html>

