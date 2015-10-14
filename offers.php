<?php
$price1 = 17500;
$price2 = 11534;
$price3 = 13500;
?>
<!doctype html>
<html class="no-js" lang="ru">
    <head>
       <?php include_once ("block/head.php"); ?>
        <link rel="stylesheet" href="css/airport-ticket.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
<div id="allBox">
    <div class="header_flightsearch">
    <?php include_once ("block/menu.php"); ?>
        <div class="both"></div>
    <?php include_once ("block/searchbox.php"); ?>

    </div>
    <?php include_once ("block/flight-section.php"); ?>
    <div class="flighsearch">
        <div class="row">
            <?php include_once ("block/ticket_1.php"); ?>
        </div>
    </div>

    <?php include_once ("block/promo.php"); ?>
    <?php include_once ("block/country.php"); ?>
    <?php include_once ("block/mailresponder.php"); ?>
    <?php include_once ("block/footer.php"); ?>
</div>
     <?php include_once ("block/scripts_footer.php"); ?>

    </body>
</html>
