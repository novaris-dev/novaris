<?php $engine->include( 'header.default' ) ?>
<section id="content" class="site-content">
	<main id="main" class="content-area">
		<article id="" class="post">
		<header class="entry-header">
			<h1 class="entry-title"><?= e( $entry->title() ); ?></h1>
		</header>
		<div class="entry-content">
			<?= $entry->content() ?>
		</div>
		</article>
	</main>
</section>
<?php $engine->include( 'footer.default' ) ?>