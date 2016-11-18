<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Audiomack</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Lato:400,600,700|Roboto:400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="assets/js/modernizr.custom.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </head>
    <body class="has-fixed-header has-active-sidebar">

        <div class="site-wrap">

            <header id="main-header" class="main-header main-header--fixed">

                <div class="main-header__left u-left">

                    <div class="burger main-header__burger u-left action-trigger action-trigger--menu" data-trigger-target="">

                        <span class="burger__filling"></span>

                    </div><!--/.burger-->

                    <a class="am-logo main-header__logo u-left" href="">

                        <?php echo file_get_contents('assets/img/am-logo.svg'); ?>

                    </a><!--/.am-logo-->

                </div><!--/.main-header__left-->

                <div class="main-header__right u-right">

                    <div class="main-header__search-trigger u-left">&nbsp;</div>

                    <div class="main-header__block main-header__block--summary u-left">

                        <div class="account-summary main-header__account-summary u-group">

                            <div class="account-summary__info">
                                <p>
                                    CarlWeathers
                                </p>
                            </div>

                            <img class="account-summary__avatar u-right" src="assets/img/example-avatar.jpg" alt="" />

                            <span class="user-alert user-alert__mobile account-summary__user-alert"></span>

                        </div><!--/.account-summary-->

                        <ul class="sub-menu main-header__sub-menu">

                            <li class="sub-menu__item">
                                <a href="#">
                                    <i class="glyphicons cogwheels"></i>
                                    Dashboard
                                </a>
                            </li>

                            <li class="sub-menu__item">
                                <a href="#">
                                    <i class="glyphicons user"></i>
                                    My Profile Page
                                </a>
                            </li>

                            <li class="sub-menu__item">
                                <a href="#">
                                    <i class="glyphicons power"></i>
                                    Logout
                                </a>
                            </li>

                        </ul><!--/.main-header__sub-menu-->

                    </div><!--/.main-header__block-->

                    <div class="main-header__block main-header__block--notifications u-left">

                        <div class="account-notifications">

                            <i class="icon bell-icon"><?php echo file_get_contents('assets/img/bell-icon.svg'); ?></i>

                            <span class="user-alert account-notifications__user-alert">88</span>

                        </div><!--/.account-notifications-->

                        <div class="popout main-header__popout">

                            <div class="popout__inner">

                                <ul class="user-notifications popout__full-list popout__scrollable u-scrollable">

                                    <li class="user-notification">

                                        <span class="icon left"><i class="glyphicons star"></i></span>
                                        <span class="notification-info">Macli, Dave N. followed you</span>

	        	                    </li><!--/.user-notification-->

                                    <li class="user-notification">

                                        <span class="icon left"><i class="glyphicons star"></i></span>
                                        <span class="notification-info">Macli, Dave N. followed you</span>

	        	                    </li><!--/.user-notification-->

                                    <li class="user-notification">

                                        <span class="icon left"><i class="glyphicons star"></i></span>
                                        <span class="notification-info">Macli, Dave N. followed you</span>

	        	                    </li><!--/.user-notification-->

                                    <li class="user-notification">

                                        <span class="icon left"><i class="glyphicons star"></i></span>
                                        <span class="notification-info">Macli, Dave N. followed you</span>

	        	                    </li><!--/.user-notification-->

                                    <li class="user-notification">

                                        <span class="icon left"><i class="glyphicons star"></i></span>
                                        <span class="notification-info">Macli, Dave N. followed you</span>

	        	                    </li><!--/.user-notification-->

                                    <li class="user-notification">

                                        <span class="icon left"><i class="glyphicons star"></i></span>
                                        <span class="notification-info">Macli, Dave N. followed you</span>

	        	                    </li><!--/.user-notification-->

                                    <li class="user-notification">

                                        <span class="icon left"><i class="glyphicons star"></i></span>
                                        <span class="notification-info">Macli, Dave N. followed you</span>

	        	                    </li><!--/.user-notification-->

                                </ul><!--/.user-notifications-->

                                <div class="button-wrap popout__button-wrap popout__content u-text-center">

                                    <a class="button" href="#">View all notifications</a>

                                </div><!--/.button-wrap-->

                            </div><!--/.popout__inner-->

                        </div><!--/.popout-->

                    </div><!--/.main-header__block-->

                    <div class="button-wrap main-header__button-wrap main-header__block main-header__block--button-wrap u-left">

                        <a class="button button--radius button--upload main-header__button button--has-icon js-tooltip" data-target-tooltip="header-upload" href="#"><i class="glyphicons inbox-out button__icon"></i> <span>Upload</span></a>

                        <div class="tooltip main-header__tooltip tooltip--radius tooltip--right-arrow" data-tooltip-id="header-upload">

                            <div class="tooltip__inner">

                                <ul class="tooltip__menu">

                                    <li>
                                        <a href="#">Upload Songs</a>
                                    </li>

                                    <li>
                                        <a href="#">Upload Albums</a>
                                    </li>

                                </ul><!--/.tooltip__menu-->

                            </div><!--/.tooltip__inner-->

                        </div><!--/.tooltip-->

                    </div><!--/.button-wrap-->

                </div><!--/.main-headr__right-->

                <div class="main-header__search-wrap">

                    <form class="search">

                        <input type="text" class="search__input main-header__search" placeholder="Search" value="" />
                        <input type="submit" class="search__submit main-header__submit" value="Search" />
                        <i class="search__submit--faux main-header__submit--faux"></i>

                    </form>

                </div><!--/.main-header__search-wrap-->

            </header><!--/.main-header-->

            <?php include('sidebar.php'); ?>
