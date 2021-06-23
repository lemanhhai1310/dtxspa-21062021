<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>DTX SPA - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="<?= ($is_home) ? 'isHome' : '' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<header class="header">
    <div class="header__top uk-light">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item header__top__navItem">
                        <div class="uk-child-width-auto" uk-grid>
                            <div>
                                <span uk-icon="icon: location; ratio: 0.8"></span>
                                <span class="uk-margin-small-left header__top__txt">3A Quân Trấn, Hùng Vương, Tp. Nha Trang</span>
                            </div>
                            <div>
                                <span uk-icon="icon: receiver; ratio: 0.8"></span>
                                <span class="uk-margin-small-left header__top__txt">+84 1234 567890</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item header__top__navItem header__top__right">
                        <!--Code social-->
                        <div class="uk-child-width-auto uk-grid-5" uk-grid>
                            <?php
                            $data = array('facebook','youtube','tiktok','instagram','google','tripadvisor');
                            foreach ($data as $k => $v): ?>
                                <div>
                                    <a href="" uk-icon="icon: <?= $v ?>; ratio: 0.8"></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div uk-sticky="animation: uk-animation-slide-top;cls-active: classSticky">
        <div class="header__bottom">
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                    <div class="uk-navbar-left">
                        <a href="." class="uk-navbar-item uk-logo"><img src="images/Logo.png" alt=""></a>
                    </div>

                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav" uk-scrollspy-nav="closest: li; scroll: true; offset: 90">
                            <li class="uk-active"><a href="#about">Giới thiệu</a></li>
                            <li><a href="#service">Dịch vụ</a></li>
                            <li><a href="#promotion">Khuyến mại</a></li>
                            <li><a href="#blog">Blog làm đẹp</a></li>
                            <li><a href="#library">Thư viện</a></li>
                            <li><a href="#qa">Hỏi đáp</a></li>
                            <li><a href="#footer">Liên hệ</a></li>
                        </ul>
                        <div>
                            <a class="uk-navbar-toggle header__bottom__navItem" href="#" uk-search-icon></a>
                            <div class="uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <form class="uk-search uk-search-navbar uk-width-1-1">
                                            <input class="uk-search-input" type="search" placeholder="Search" autofocus>
                                        </form>
                                    </div>
                                    <div class="uk-width-auto">
                                        <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="uk-navbar-item header__bottom__navItem">
                            <a href="" class="uk-button uk-button-default header__bottom__btnBook">Book now</a>
                        </div>
                        <div class="uk-navbar-item header__bottom__navItem">
                            <div>
                                <div><a href=""><img src="images/en.png" alt=""></a></div>
                                <div><a href=""><img src="images/vi.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </div>
</header>