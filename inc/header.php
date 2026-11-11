<?php
require_once __DIR__ . '/lang_setup.php';

// Request values (host, script path) are escaped with htmlspecialchars() before output.
// SCRIPT_NAME is used instead of PHP_SELF: PHP_SELF also contains user-supplied PATH_INFO
// (e.g. index.php/"><script>...), which made the old links an XSS hole.
$scriptName   = (string) ($_SERVER['SCRIPT_NAME'] ?? '');
$httpHost     = (string) ($_SERVER['HTTP_HOST'] ?? '');
$isHttps      = !empty($_SERVER['HTTPS']) && strtolower((string) $_SERVER['HTTPS']) !== 'off';
$canonicalUrl = '//' . $httpHost . str_replace('\\', '/', dirname($scriptName));
$switchUrl    = ($isHttps ? 'https' : 'http') . '://' . $httpHost . $scriptName
              . ($currentLang === 'en' ? '?lang=cn' : '?lang=en');
$switchLabel  = $currentLang === 'en' ? 'Ch' : 'En';
$currentPage  = basename($scriptName);
$navActive    = fn(string $page): string => $currentPage === $page ? 'active' : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Intelli Training Center offers the most comprehensive teaching courses, with an array of various different subjects and classes. Our programs ensure that children in our care will get the proper guidance they need to excel both at home and at school."/>
    <title>Intelli Training Center</title>

    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider_animation.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="fontawesome/js/all.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/script.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-10237768-20"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-10237768-20');
    </script>
</head>
<body>
<div class="wrapper">
    <div class="navbar-container">
        <div id="language_selection" class="position-relative">
            <a href="<?= htmlspecialchars($switchUrl) ?>"><?= $switchLabel ?>
                <i class="fas fa-globe ml-2"></i></a>
        </div>
        <div class="container">
            <!-- Header logo & navbar -->
            <div class="header-logo clearfix">
                <div class="logo float-left">
                    <a href="index.php" class="d-block">
                        <img src="images/nav/logo_intelli_training_center.png" alt="Intelli Training Center">
                    </a>
                </div>
                <nav id="website-nav" class="navbar navbar-expand-sm justify-content-end float-right w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item p-3">
                            <a class="nav-link d-block text-center border-bottom-white home-link <?= $navActive('index.php') ?>"
                               href="index.php">
                                <img src="images/nav/intelli_training_center_home.png" alt="<?php echo $lang['home']; ?>">
                                <div><span><?php echo $lang['home']; ?></span></div>
                            </a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link d-block text-center border-bottom-white about-us-link <?= $navActive('about_us.php') ?>"
                               href="about_us.php">
                                <img src="images/nav/intelli_training_center_aboutus.png" alt="<?php echo $lang['aboutus']; ?>">
                                <div><span><?php echo $lang['aboutus']; ?></span></div>
                            </a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link d-block text-center border-bottom-white classes-link <?= $navActive('class.php') ?>"
                               href="class.php">
                                <img src="images/nav/intelli_training_center_classes.png" alt="<?php echo $lang['classes']; ?>">
                                <div>
                                    <span><?php echo $lang['classes']; ?></span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link d-block text-center border-bottom-white contact-us-link <?= $navActive('contact_us.php') ?>"
                               href="contact_us.php">
                                <img src="images/nav/intelli_training_center_contactus.png" alt="<?php echo $lang['contactus']; ?>">
                                <div><span><?php echo $lang['contactus']; ?></span></div>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="navbar-toggler w-100">
                    <a class="float-right" onclick="$('#mb-tab-nav').toggle();"><i class="fas fa-bars"></i></a>
                </div>
            </div>
            <div class="logo-bottom">&nbsp;</div>
        </div>
        <nav id="mb-tab-nav">
            <div class="nav-outer">
                <div class="d-flex">
                    <div class="vertical-border-menu"></div>
                    <h6 class="text-uppercase color-white ">Menu</h6>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item p-3">
                        <a class="nav-link d-block border-bottom-white position-relative <?= $navActive('index.php') ?>"
                           href="index.php">
                            <i class="fas fa-home fa-xs mr-1"></i><?php echo $lang['home']; ?>
                        </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link d-block border-bottom-white position-relative <?= $navActive('about_us.php') ?>"
                           href="about_us.php">
                            <i class="fab fa-angellist fa-xs mr-1"></i><?php echo $lang['aboutus']; ?>
                        </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link d-block border-bottom-white position-relative <?= $navActive('class.php') ?>"
                           href="class.php">
                            <i class="far fa-address-book fa-xs mr-1"></i><?php echo $lang['classes']; ?>
                        </a>
                    </li>
                    <li class="nav-item p-3">
                        <a class="nav-link d-block border-bottom-white position-relative <?= $navActive('contact_us.php') ?>"
                           href="contact_us.php">
                            <i class="fas fa-book fa-xs mr-1"></i><?php echo $lang['contactus']; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>