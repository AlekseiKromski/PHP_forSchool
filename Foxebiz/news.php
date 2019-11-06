<?php
    require_once 'config/config_require.php';
    require_once $core_classes['News'];
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $object_news = new News($connect,$id);
    }else{
        $id = 'All';
        $object_news = new News($connect,$id);
    }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title>Foxebiz - SHARED ON THEMELOCK.COM - - Multipurpose html template</title>
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
      <!--Wrapper-->
      <div class="wrapper">
         <div class="modal login fade" id="search" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
               <div class="p-5">
                     <form class="d-flex">
                        <div class=" input-group form mr-2">
                           <div class="input-group-prepend ">
                              <span class="input-group-text form-icon">
                              <span class="fa fa-search form-icon-inner"></span>
                              </span>
                           </div>
                           <input class="form-control" name="search" placeholder="Search" type="text">
                        </div>
                        <button class="btn btn-primary" type="submit">
                        Go
                        </button>
                     </form>
                  </div>
            </div>
         </div>
      </div>
         <?php
         require_once 'include_files/header.php';

         ?>
         <!--End header-->
         <!--Hero section-->
         <section class="hero" >
            <div class="background-img gradient-overlay gradient-overlay-dark">
               <img src="assets/bg/bd_news.jpg" alt="" >
            </div>
            <!--Container-->
            <div class="container height-30vh">
               <!--Row-->
               <div class="row justify-content-center text-center">
                  <div class="col-12 col-md-10 col-lg-10">
                     <h1 class="mb-3 text-white"><?php echo $id; ?> news</h1>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0  justify-content-center">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                  <div class="col-md-5 col-lg-4 mb-4 mb-md-0">
                     <form class="d-sm-flex align-items-center">
                        <select class="custom-select">
                           <option selected="" >Article by category</option>
                           <option value="category">Business</option>
                           <option value="category">Investing</option>
                           <option value="category">Freelance</option>
                           <option value="category">Finance</option>
                        </select>
                     </form>
                  </div>
                  <div class="col-md-5 col-lg-4">
                     <form class="d-flex">
                        <div class=" input-group form mr-2">
                           <div class="input-group-prepend ">
                              <span class="input-group-text form-icon">
                              <span class="fa fa-search form-icon-inner"></span>
                              </span>
                           </div>
                           <input class="form-control" name="search" placeholder="Search" type="text">
                        </div>
                        <button class="btn btn-primary" type="submit">
                        Go
                        </button>
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
                   <?php
                   if(!empty($object_news->getArrNews())){
                       foreach ($object_news->getArrNews() as $k => $v){
                           echo "
                          <div class=\"col-md-6 col-lg-4 d-flex mb-5\">
                             <div class=\"card\">
                                <div class=\"card-body p-5\">
                                   <small class=\"d-block text-muted mb-2 mt-2\">{$v['date']}</small>
                                   <h5>
                                      <a href=\"javascript:;\">{$v['name']}</a>
                                   </h5>
                                   <p >{$v['description']}</p>
                                   <a href=\"javascript:;\" class=\"mt-2 d-block\">{$v['category']}</a>
                                </div>
                                <div class=\"card-footer bg-gray py-3 px-5\">
                                   <div class=\"d-flex align-items-center\">
                                      <h3 class=\"d-inline-block mb-0\">
                                         <p class=\"d-block font-size-14 m-0\">By {$v['user']}</p>
                                      </h3>
                                   </div>
                                </div>
                             </div>
                            </div>
                       ";
                       }
                   }else{
                       echo '<h3 style="text-align: center; margin-bottom: 10%;" class="col-md-12">No News</h3>';
                   }

                   ?>
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

