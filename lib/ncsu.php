<?php

namespace Roots\Sage\NCSU;

function branding() {
  wp_enqueue_style( 'ncsu/fonts', 'https://cdn.ncsu.edu/brand-assets/fonts/include.css', false, null );
  wp_enqueue_style( 'ncsu/bootstrap', 'https://cdn.ncsu.edu/brand-assets/bootstrap/css/bootstrap.css', false, null );
//  wp_enqueue_script('ncsu/js', 'https://cdn.ncsu.edu/brand-assets/bootstrap/js/bootstrap.min.js', ['jquery'], null, true);
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\branding', 999 );
//add_filter('excerpt_more', __NAMESPACE__ . '\\readmore', 999 );
