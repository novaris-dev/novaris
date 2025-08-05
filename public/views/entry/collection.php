<article id="" class="post">
    <header class="entry-header">
        <h2 class="entry-title"><a href="<?= e( $entry->url() ); ?>"><?= e( $entry->title() ); ?></a></h2>
        <div class="entry-metadata">
            <?= $entry->date(); ?>
        </div>
    </header>
    <div class="entry-content">
        <?= $entry->excerpt( 50, sprintf(
            ' &hellip; <a class="entry-more-link" href="%s">Continue reading&nbsp;&rarr;</a>',
            e( $entry->uri() )
        ) ) ?>
    </div>
</article>