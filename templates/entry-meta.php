<p class="byline author vcard">
  <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn">
    <? if ( function_exists( 'coauthors_posts_links' ) ) {
            coauthors_posts_links();
        } else {
        } ?>
  </a>
</p>
