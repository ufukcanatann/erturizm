<?php define("BASE_URL", "https://www.mersinerturizm.com") ?>

<!DOCTYPE html>
<html lang="tr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mersin Adana Yazlık Servis | Mersin Erturizm</title>

    <meta name="description" content="Mersin Erturizm ile Mersin ve Adana arasında konforlu, güvenli ve hızlı ulaşım. Mersin Adana yazlık servis, Adana Mersin yazlık servis.">

    <meta name="keywords" content="mersin adana yazlık servis, mersin adana servis, adana mersin yazlık servis, adana mersin servis, mersin adana arası ulaşım, adana mersin arası ulaşım, mersin Erturizm, Erturizm">
    <meta name="author" content="Mersin Erturizm">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mersin Adana Yazlık Servis | Mersin Erturizm">
    <meta name="twitter:description" content="Mersin Erturizm ile Mersin ve Adana arasında konforlu, güvenli ve hızlı ulaşım. Mersin Adana yazlık servis, Adana Mersin yazlık servis.">
    <meta name="twitter:image" content="https://www.mersinerturizm.com/images/twitter-image.png">

    <meta property="og:title" content="Mersin Adana Yazlık Servis | Mersin Erturizm">
    <meta property="og:description" content="Mersin Erturizm ile Mersin ve Adana arasında konforlu, güvenli ve hızlı ulaşım. Mersin Adana yazlık servis, Adana Mersin yazlık servis.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.mersinerturizm.com/">
    <meta property="og:image" content="https://www.mersinerturizm.com/images/og-image.png">

    <link rel="canonical" href="https://www.mersinerturizm.com/">
    <link rel="icon" href="<?php echo BASE_URL; ?>/assets/images/favicon.png" type="image/png">

    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>/assets/images/apple-touch-icon.png">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/custom.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-225386990-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-225386990-1');
    </script>

</head>

<body>

    <div class="body-inner">
        <header id="header" data-fullwidth="true" class="">
            <div class="header-inner">
                <div class="container">
                    <div id="logo">
                        <a href="index.php">
                            <span class="logo-default"><img src="<?php echo BASE_URL; ?>/assets/images/logo-dark.png" alt=""></span>
                            <span class="logo-dark"><img src="<?php echo BASE_URL; ?>/assets/images/logo-light.png" alt=""></span>
                        </a>
                    </div>
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.php" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Arama Yap..." />
                            <span class="text-muted">Aramak istediğiniz öğeyi yazın veya ESC ile kapatın</span>
                        </form>
                    </div>

                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-globe"></i><span>TR</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>

                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo BASE_URL; ?>">Anasayfa</a></li>
                                    <li class="dropdown"><a href="<?php echo BASE_URL; ?>/hakkimizda.php">Hakkımızda</a></li>
                                    <li class="dropdown"><a href="#">Araç Filomuz</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#">Mercedes</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo BASE_URL; ?>/araclar/mercedes-sprinter.php">Sprinter</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>/araclar/mercedes-vito.php">Vito</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Volkswagen</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo BASE_URL; ?>/araclar/volkswagen-crafter.php">Crafter</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>/araclar/volkswagen-volt.php">Volt</a></li>
                                                    <li><a href="<?php echo BASE_URL; ?>/araclar/volkswagen-caravelle.php">Caravelle</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Fiat</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo BASE_URL; ?>/araclar/fiat-ducato.php">Ducato</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Hizmetlerimiz</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo BASE_URL; ?>/hizmetlerimiz/filo-kiralama.php">Filo Kiralama</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/hizmetlerimiz/uzun-donem-arac-kiralama.php">Uzun Dönem Araç
                                                    Kiralama</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/hizmetlerimiz/gunu-birlik-turlar.php">Günü Birlik Turlar</a>
                                            </li>
                                            <li><a href="<?php echo BASE_URL; ?>/hizmetlerimiz/ozel-turlar.php">Özel Turlar</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/hizmetlerimiz/gunluk-sefer-saatleri.php">Günlük Sefer
                                                    Saatleri</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="<?php echo BASE_URL; ?>/iletisim.php">İletişim</a></li>
                                    <li class="dropdown mega-menu-item"><a href="<?php echo BASE_URL; ?>/galeri.php">Galeri</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>