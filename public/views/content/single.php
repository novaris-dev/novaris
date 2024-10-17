<section id="content" class="site-content">
	<main id="main" class="content-area">
		<article id="" class="post">
            <header class="entry-header">
                <div class="entry-metadata">
                    <?= $entry->date(); ?>
                </div>
                <h1 class="entry-title"><?= e( $entry->title() ); ?></h1>
            </header>
            <div class="entry-content">
                <?= $entry->content() ?>
            </div>
            <footer class="entry-footer">

			<?php if ( $tags = $entry->terms( 'category' ) ) : ?>
				<div class="entry-terms">
					Tagged:
					<?php foreach ( $tags as $tag ) : ?>
						<a href="<?= e( $tag->uri() ) ?>">#<?= e( $tag->name() ) ?></a>
					<?php endforeach ?>
				</div>
			<?php endif ?>
		</footer>
		</article>
	</main>
</section>