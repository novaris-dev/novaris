<?php $engine->include( 'header.default' ) ?>

<main class="app-content o-flow">
<header class="entry__header">
			<h1 class="entry__title"><?= e( $single->title() ) ?></h1>
		</header>

	<div class="collection collection--summary o-flow">
		<?php $engine->each( 'content.default', $collection, 'entry' ) ?>
	</div>
</main>

<?php $engine->include( 'footer.default' ) ?>