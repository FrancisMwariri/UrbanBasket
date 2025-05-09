<?php
ob_start();
?>
    <link rel="stylesheet" href="output.css">
<!--color red: #F51315-->
<!--color blight red :#FF4D4F-->
<?php
$content = ob_get_clean();
include 'includes/app.inc.php';

