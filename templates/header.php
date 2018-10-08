<?php require get_template_directory() . '/assets/includes/layout.php'; ?>
<header class="banner">
  <div class="container">
    <nav class="left-nav hidden-xs">
      <?php
        if (has_nav_menu('header-utility')) :
          wp_nav_menu([
            'container'       => false,
            'theme_location'  => 'header-utility',
            'menu_class'      => 'utility-nav',
            'depth'           => 1,
            'title_li'        => false,
            'fallback_cb'     => null
          ]);
        endif;
      ?>
    </nav>
    <div class='site-title'>
      <button type="button" id="menu-toggle">
				       <span class="sr-only">Toggle navigation</span>
				       <span class="glyphicon glyphicon-menu"></span>
				    </button>

            <?php if ( get_theme_mod('siteURL')) {
              $url = get_theme_mod('siteURL');
            } else {
              $url = esc_url(home_url('/')); } ?>

      <a class="brand" href="<?= $url; ?>">
        <?php echo "<h1>" . get_bloginfo('name') . "</h1>"; ?>
      </a>
    </div>
    <nav id="global-nav" class="nav-primary">
      <?php
      if (has_nav_menu('header-menu')) :
        wp_nav_menu([
					'container'       => false,
          'theme_location'  => 'header-menu',
          'menu_class'      => 'primary-nav',
					'title_li'        => false,
        ]);
      endif;
      ?>
    </nav>
    <nav id="mobile-nav">
      <?php
      if (has_nav_menu('mobile')) :
        wp_nav_menu([
					'container'       => false,
          'theme_location'  => 'mobile',
          'menu_class'      => 'nav mobile-nav',
					'title_li'        => false,
        ]);
      endif;
      ?>
    </nav>
  </div>
</header>
