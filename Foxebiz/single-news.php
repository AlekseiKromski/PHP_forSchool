<?php
require_once 'config/config_require.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    header('Location: news.php');
}
?>
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
      require_once 'include_files/search_modal.php';
      require_once 'include_files/header.php';
      require_once $core_classes['SingleNew'];
      require_once $core_classes['Comments'];
      require_once $core_classes['category'];
      require_once $core_classes['TopNews'];
      require_once $core_classes['LatestNews'];
      $object_category = new Category($connect);
      $object_SingleNew = new SingleNew($connect,$id);
      $object_Comments = new Comments();
      $object_lastestNews = new LatestNews($connect);
      $object_Comments->ReadFromDB($connect,$id);
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
                     <h1 class="mb-3 text-white"><?php $object_SingleNew::getName(); ?></h1>
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
                              foreach ($object_SingleNew->getArrProduct() as $k => $v) {
                                  echo "
                                  <img class=\"card-img-top\" src=\"{$v['img']}\" alt=\"\">
                                  <div class=\"card-body\">
                                     <h1 class=\"h2\">{$v['name']}</h1>
                                     <div class=\"d-lg-flex align-items-center mb-5 font-size-14\">
                                        <span class=\"text-gray d-block  mb-1 mb-lg-0\">{$v['date']} by <b>{$v['user']}</b>  </span>
                                     </div>
                                     <article>
                                        <p>
                                           {$v['text']}
                                        </p>
                                        <ul class=\"list-inline mb-0  \">
                                           <li class=\"list-inline-item  pb-2 mr-1\">
                                              <a class=\"btn btn-xs btn-primary btn-rounded \" href=\"news.php?id={$v['category']}\">{$v['category']}</a>
                                           </li>
                                        </ul>
                                     </article>
                                  </div>
                                  ";
                              }
                              ?>
                           </div>
                        </div>
                     </div>
                     <!--End row-->
                     <!--Row-->
                      <?php
                      foreach ($object_Comments->getArrComments() as $k => $v) {
                          echo "
                              <div class=\"row \">
                                <div class=\" col-lg-12 mb-5\">
                                   <div class=\"card\">
                                      <div class=\"card-body\">
                                         <div class=\"media mb-3\">
                                            <div class=\"media-body\">
                                               <h4 class=\"h6 mb-0\">{$v['name']}</h4>
                                               <small class=\"d-block text-muted\">{$v['date']}</small>
                                            </div>
                                         </div>
                                          <p class=\"mb-0 small\">{$v['text']}</p>
                                      </div>
                                   </div>
                                </div>
                             </div>    
                                  ";
                      }
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
                                 <form method="post" action="Action/AddComment.php?id=<?php echo $id;?>">
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
                            foreach ($object_lastestNews->getArrLatestNews() as $k => $v) {
                                echo "
                                    <li class=\"py-2\">
                                      <div class=\"media\">
                                         <div class=\"media-body pr-4\">
                                            <a class=\"text-gray h6 font-weight-normal\" href=\"single-news.php?id={$v['id']}\">
                                            {$v['name']}
                                            </a>
                                         </div>
                                      </div>
                                   </li>  
                                  ";
                            }
                            ?>
                        </ul>
                     </div>
                     <hr class="my-5">
                     <div class="mb-5">
                        <h3 class="h5 mb-4">Categories</h3>
                        <ul class="list-inline mb-0 font-size-15 ">
                            <?php
                            foreach ($object_category->getArrCategory() as $k => $v) {
                                echo "
                                <li class=\"list-inline-item d-block pb-2\">
                                    <a class=\"text-gray\" href=\"news.php?id={$v['name']}\"><span class=\"fa fa-angle-right font-size-14 mr-2\"></span>{$v['name']}</a>
                                </li>   
                                  ";
                            }
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
</html>

