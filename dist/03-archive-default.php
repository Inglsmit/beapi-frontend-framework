<?php $class = 'archive'; ?>
<?php include 'header.php'; ?>
    <div class="page__header lazyload" data-bgset="assets/img/bg-sample/bg_img-mobile-01.jpg [(max-width: 1023px)] | assets/img/bg-sample/bg_img-desktop-01.jpg">
		<div class="container">
            <h1 class="page__title">Two basic styles of archive list</h1>
            <p>You can add WP-pagenavi or FacetWP plugin markup for pagination, from composerjs</p>
		</div>
    </div>

    <div class="page__content">
        <div class="container">
            <h2 class="entry__title">An example of entry list</h2>
            <div class="entry__loop">
                <?php include 'blocks/entry__summary-01.php' ?>
                <?php include 'blocks/entry__summary-01.php' ?>
                <?php include 'blocks/entry__summary-01.php' ?>
            </div>
            <h2 class="entry__title">An example of entry "card" list</h2>
            <div class="entry__loop">
                <?php include 'blocks/entry__seo-01.php' ?>
                <?php include 'blocks/entry__seo-01.php' ?>
                <?php include 'blocks/entry__seo-01.php' ?>
            </div>
            <!-- AOS example -->
            <h2 class="entry__title" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">An example of an animated block</h2>
            <div class="entry__loop" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                <?php include 'blocks/entry__seo-01.php' ?>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>