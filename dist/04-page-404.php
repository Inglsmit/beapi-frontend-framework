<?php $class = 'error-404'; ?>
<?php include 'header.php'; ?>
	<div class="hero-me" style="background-image: url(assets/img/bg-sample/jon-tyson-533596-unsplash.jpg)">
        <span class="hero-me__title">
            Page 404
        </span>
    </div>
	<?php include 'blocks/header.php'; ?>
	<article class="entry">
		<div class="container">
			<h1 class="entry__title">Erreur 404</h1>
			<section class="entry__content">
				<p>Désolé mais la page que vous recherchez n'existe plus.</p>
				<p>Vous pouvez effectuer une recherche :</p>
				<?php include 'searchform.php'; ?>
			</section>
		</div>
	</article>

<?php include 'footer.php'; ?>