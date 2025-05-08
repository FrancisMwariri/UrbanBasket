<?php
ob_start();
?>
    <link rel="stylesheet" href="output.css">
<?php
$content = ob_get_clean();
include 'includes/app.inc.php';
