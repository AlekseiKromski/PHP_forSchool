<?php
require_once '../config/config_require.php';
require_once '../' . $core_classes['Search'];
$object_search = new Search($connect,$_POST['search']);
debug($object_search->getArrSearch());
