<?php $engine->include( 'header/default' ) ?>

<main class="app-content o-flow">
	<div class="collection collection--summary o-flow">
		<?php $engine->each( 'content.default', $collection, 'entry' ) ?>
	</div>
</main>

<?php $engine->include( 'footer/default' ) ?>