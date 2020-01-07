<?php ob_start(); ?>
<article>
    <p>Вы попали на админ панель</p>

</article>
<?php
$content = ob_get_clean();
include "viewAdmin/layout/layout.php";
?>
