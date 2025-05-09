<?php
ob_start();

?>
    <link rel="stylesheet" href="output.css">
<?php
// Start Body Section
include 'Components/header.php';
include 'Components/HeroSection.php';
include 'Components/Delivery.php';
//End Body Section
$content = ob_get_clean();
include 'includes/app.inc.php';
