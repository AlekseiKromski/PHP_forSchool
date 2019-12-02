<div class="wrapper">
    <div class="modal login fade" id="search" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="p-5">
                    <form class="d-flex" method="post" action="search">
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
</div>
<header class="header">
    <div class="container ">
        <div class="floating-nav mt-lg-5 ">
            <nav class="navbar navbar-expand-lg header-navbar ">
                <div class="navbar-brand">
                    <a class=" navbar-brand navbar-logo" href="index">
                        <img class="mb-0" src="assets/svg/logo.svg" alt="">
                    </a>
                </div>
                <button class="navbar-toggler btn-navbar-toggler" type="button" data-toggle="collapse" data-target=".nav-menu" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="nav-menu collapse navbar-collapse navbar-collapse justify-content-end py-0 ">
                    <ul class=" navbar-nav  header-navbar-nav">
                        <li><a class=" nav-link" href="index">home</a></li>
                        <li><a class="nav-link" href="contact">contact</a></li>
                        <li class="dropdown">
                            <a href="" class="nav-link dropdown-toggle"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Category<span class="dropdown-arrow ml-2">
                              <span class="fa fa-angle-down dropdown-arrow-inner"></span>
                              </span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($array as $k => $v){
                                    echo "<li><a class=\"dropdown-item\" href=\"news?id={$v['name']}\">{$v['name']}</a></li>";
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