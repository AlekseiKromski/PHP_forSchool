<?php
ob_start();
foreach ($arrayData as $k => $v){
    echo "
                          <div class=\"col-md-6 col-lg-8 d-flex mb-5\" style='margin-left: auto;margin-right: auto;'>
                             <div class=\"card\">
                                <div class=\"card-body p-5\">
                                   <small class=\"d-block text-muted mb-2 mt-2\">{$v['date']}</small>
                                   <h5>
                                      <a href=\"single-news.php?id={$v['id']}\">{$v['name']}</a>
                                   </h5>
                                   <a href='single-news.php?id={$v['id']}' style='color: #646f79'>{$v['description']}</a>
                                  <a href=\"news.php?id={$v['category']}\" class=\"mt-2 d-block\">{$v['category']}</a>
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
$content = ob_get_clean();
include_once "view/layout/layoutSearch.php";

