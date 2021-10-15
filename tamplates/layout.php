<?php
define('SITE_KEY', '6Le24cYcAAAAAPxmNg-GevF2QwaMr167IRQVLVMi');
define('SECRET_KEY', '6Le24cYcAAAAAIFLBBTIFntseAwRdjWf7aZe8PJA');

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo 'PrymaPhone - ' . $title;  ?></title>

    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="Ha értesülni szeretnél havi akcióinkról, vagy termékeink újítását kísérnéd figyelemmel,
        akkor kövess minket. Folyamatosan bővül kínáltunk, legkorszerűbb termékeket láthatod a legkedvezőbb áron!">
    <!-- keywords -->
    <meta name="keywords" content="Újpest, Szilikon tok, adatkábel, könyv tok, iPhone gyári töltő, autóstartó, okostok, biztonsági tok, mobiletelefonok, használt telefon, új telefon, üvegfólia, 5d üveg fólia">
    <!-- Page Title -->
    <title>PrymaPhone</title>
    <!-- Favicon -->
    <link rel="icon" href="phone-shop/dummy-img/favicon.ico">
    <!-- Bundle -->
    <link rel="stylesheet" href="vendor/css/bundle.min.css">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="vendor/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/css/swiper.min.css">
    <link rel="stylesheet" href="vendor/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="vendor/css/wow.css">
    <link rel="stylesheet" href="vendor/css/LineIcons.min.css">
    <link rel="stylesheet" href="phone-shop/css/nouislider.min.css">
    <link rel="stylesheet" href="phone-shop/css/range-slider.css">
    <!-- Slider Setting Css  -->
    <link rel="stylesheet" href="phone-shop/css/settings.css">
    <!-- Mega Menu  -->
    <link rel="stylesheet" href="phone-shop/css/megamenu.css">
    <!-- StyleSheet  -->
    <link rel="stylesheet" href="phone-shop/css/style.css">
    <link rel="stylesheet" href="karaKrisz/css/style.css">
    <!-- Custom Css  -->
    <link rel="stylesheet" href="phone-shop/css/custom.css">

    <script src="https://www.google.com/recaptcha/api.js?render=<?= SITE_KEY; ?>"></script>


</head>

<body>
    <?php
    require_once "header.php";
    require_once "$view.php";
    require_once "footer.php";
    ?>

    <!-- <script>
        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('', {
                    action: 'submit'
                }).then(function(token) {
                    // Add your logic to submit to your backend server here.
                    document.getElementById('g-recaptcha-response').value = token;
                });
            });
        }
    </script> -->
</body>

</html>