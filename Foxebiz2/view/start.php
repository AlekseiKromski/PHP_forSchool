<?php
ob_start();
?>
<h2>Start page</h2>
<?php
foreach ($array as $item) {
    echo $item;
}
$content = ob_get_clean();
include_once 'view/layout.php';

