<?php $engine->include( 'header.default' ); ?>
<section id="content" class="site-content">
    <main id="main" class="content-area">
        <?= $engine->each( 'entry.collection', $collection, 'entry' ) ?>
    </main>
</section>
<?php $engine->include( 'footer.default' ); ?>