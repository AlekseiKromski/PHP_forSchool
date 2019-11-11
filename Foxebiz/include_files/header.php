<?php
require_once $core_classes['category'];
$object_category = new Category($connect);
?>
<header class="header">
    <div class="container ">
        <div class="floating-nav mt-lg-5 ">
            <nav class="navbar navbar-expand-lg header-navbar ">
                <div class="navbar-brand">
                    <a class=" navbar-brand navbar-logo" href="<?php echo $links['Home'][1];?>">
                        <img class="mb-0" src="assets/svg/logo.svg" alt="">
                    </a>
                </div>
                <button class="navbar-toggler btn-navbar-toggler" type="button" data-toggle="collapse" data-target=".nav-menu" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="nav-menu collapse navbar-collapse navbar-collapse justify-content-end py-0 ">
                    <ul class=" navbar-nav  header-navbar-nav">
                        <li><a class=" nav-link" href="<?php echo $links['Home'][1];?>"><?php echo $links['Home'][0];?></a></li>
                        <li><a class="nav-link" href="<?php echo $links['Contact'][1];?>"><?php echo $links['Contact'][0];?></a></li>
                        <li class="dropdown">
                            <a href="javascript:;" class="nav-link dropdown-toggle"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Category<span class="dropdown-arrow ml-2">
                              <span class="fa fa-angle-down dropdown-arrow-inner"></span>
                              </span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($object_category->getArrCategory() as $arr => $c){
                                    echo "<li><a class=\"dropdown-item\" href=\"news.php?id={$c['name']}\">{$c['name']}</a></li>";
                                }
                                ?>
                            </ul>
                        </li>

                        <a class="btn btn-xs btn-icon btn-text-dark pb-3 pb-lg-0 pl-0 pt-0" href="#search" data-toggle="modal" data-target="#search">
                            <span class="fa fa-search "></span>
                        </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>