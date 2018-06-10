<ul class="menu-fastaccess">
    <li class="menu-fastaccess__item"><a href="#main__content">Acces direct au contenu</a></li>
    <!-- <li class="menu-fastaccess__item"><a href="#searchform">Acces direct à la recherche</a></li> -->
    <li class="menu-fastaccess__item"><a href="#menu">Acces direct au menu</a></li>
</ul>
<div id="js-menu-trigger" class="menu-trigger">
    <button type="button" id="js-menu-open" class="menu-trigger__open">
        <svg class="button__icon icon icon-menu" aria-hidden="true" role="img">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-menu"></use>
        </svg>
        Menu
    </button>
    <button type="button" id="js-menu-close" class="menu-trigger__close">
        <svg class="button__icon icon icon-close" aria-hidden="true" role="img">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close"></use>
        </svg>
        Fermer
    </button>
</div>
<header id="header" class="header" role="banner">
    <div class="container">
        <div class="header__logo">
            <a href="01-home.php" class="header__logo-link">
                <!-- <?php //echo get_the_post_thumbnail( 0, 'logo-beapi', array( 'data-location' => 'header-logo', 'class' => 'header__img', 'alt' => 'Logo' ) ); ?>  -->
                <svg class="header__icon icon" aria-hidden="true" role="img">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-logo-beapi"></use>
                </svg>
                <?php if ( $class == 'home' ) :?>
                    <h1 class="header__title visuallyhidden">BeAPI FrontEnd Framework</h1>
                <?php else: ?>
                    <div class="header__title visuallyhidden">BeAPI FrontEnd Framework</div>
                <?php endif; ?>
            </a>
        </div>
        <nav id="menu" class="menu" role="navigation" tabindex="-1" aria-label="Navigation Principal">
            <button id="open-menu">
                <svg class="button__icon icon icon-menu" aria-hidden="true" role="img">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-menu"></use>
                </svg>
            </button>
        </nav>
    </div>
</header>