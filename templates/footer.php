<footer class="content-info">
  <div class="container">
    <section class="blog-info">
      <address>
        <?php // ITRE LOGO
        if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }
        echo '<h4>'.get_bloginfo('name').'</h4>';
        echo '<p>'.nl2br(get_theme_mod( 'address_textbox')).'</p';
        ?>
      </address>
    </section>
    <?php
    if (get_theme_mod('social_media_facebook')||get_theme_mod('social_media_twitter')||get_theme_mod('social_media_flickr')||get_theme_mod('social_media_rss')) {
      echo '<section class="social"><ul>';
      if (get_theme_mod('social_media_facebook')){
        echo '<li><a href="'.get_theme_mod('social_media_facebook').'"> <span class="glyphicon glyphicon-fb"></span> Facebook </a></li>';
      };
      if (get_theme_mod('social_media_twitter')){
        echo '<li><a href="'.get_theme_mod('social_media_twitter').'"> <span class="glyphicon glyphicon-twitter"></span> Twitter </a></li>';
      };
      if (get_theme_mod('social_media_flickr')){
        echo '<li><a href="'.get_theme_mod('social_media_flickr').'"> <span class="glyphicon glyphicon-flickr"></span> Flickr </a></li>';
      };
      if (get_theme_mod('social_media_rss')){
        echo '<li><a href="'.get_theme_mod('social_media_rss').'"> <span class="glyphicon glyphicon-rss"></span> RSS </a></li>';
      };
      echo '</section></ul>';
    };
?>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
<footer class="ncsu-footer">
  <div class="container">
    <h4><strong>NC STATE</strong> UNIVERSITY</h4>
    <address>
      <span><strong>NORTH CAROLINA STATE UNIVERSITY </strong></span>
      <span>RALEIGH, NC 27695 </span>
      <span>919.515.2011</span>
    </address>
  </div>
</footer>
