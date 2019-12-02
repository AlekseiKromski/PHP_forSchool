<?php
ob_start();
foreach ($arrayData as $k => $v) {
    echo "
    <div class=\"col-md-3 mb-5\">
    <a href=\"single-news.php?id={$v['id']}\"><div style='width: 100%; height: 181px; background-image: url(\"{$v['img']}\");background-size: cover;'></div></a>
    <h6 class=\"breaking_news_name\"><a class=\"breaking_link\" href=\"single-news.php?id={$v['id']}\">{$v['name']}</a></h6>
    <p class=\"breaking_news_data\">by <b>{$v['user']}</b> {$v['date']}</p>
    <p class=\"breaking_desc\"><a class=\"breaking_link\" href=\"single-news.php?id={$v['id']}\">{$v['text']}</a></p>
    </div>
    ";
}
$content = ob_get_clean();
include_once "view/layout/layout.php";

