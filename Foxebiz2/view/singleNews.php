<?php
ob_start();
$name = '';
foreach ($arrayData as $k => $v) {
    echo "
                                  <img class=\"card-img-top\" src=\"{$v['img']}\" alt=\"\">
                                  <div class=\"card-body\">
                                     <h1 class=\"h2\">{$v['name']}</h1>
                                     <div class=\"d-lg-flex align-items-center mb-5 font-size-14\">
                                        <span class=\"text-gray d-block  mb-1 mb-lg-0\">{$v['date']} by <b>{$v['login']}</b>  </span>
                                     </div>
                                     <article>
                                        <p>
                                           {$v['text']}
                                        </p>
                                        <ul class=\"list-inline mb-0  \">
                                           <li class=\"list-inline-item  pb-2 mr-1\">
                                              <a class=\"btn btn-xs btn-primary btn-rounded \" href=\"news.php?id={$v['category_name']}\">{$v['category_name']}</a>
                                           </li>
                                        </ul>
                                     </article>
                                  </div>
                                  ";
    $name = $v['name'];
}
$content2 = '';
foreach ($arrayData2 as $k => $v){
    $content2 .= "
                                    <li class=\"py-2\">
                                      <div class=\"media\">
                                         <div class=\"media-body pr-4\">
                                            <a class=\"text-gray h6 font-weight-normal\" href=\"newsSingle?id={$v['id']}\">
                                            {$v['name']}
                                            </a>
                                         </div>
                                      </div>
                                   </li>
    ";
}
$content3 = '';
foreach ($arrayData3 as $k => $v){
    $content3 .= "
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
$category = '';
foreach ($array as $k => $v){
    $category .= "
                  <li class=\"list-inline-item d-block pb-2\">
                    <a class=\"text-gray\" href=\"news.php?id={$v['name']}\"><span class=\"fa fa-angle-right font-size-14 mr-2\"></span>{$v['name']} <span style='color:red;'>({$v['num_q']})</span></a>
                  </li>             
    ";
}
$content = ob_get_clean();
include_once "view/layout/layoutSingleNews.php";

