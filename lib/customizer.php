<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';

  $wp_customize->add_setting('siteURL')->transport = 'postMessage';
  $wp_customize->add_control('siteURL',
  array(
  'label'     => 'Banner URL',
  'section'   => 'title_tagline',
  'settings'  => 'siteURL',
  'type'      => 'text'
  ) );

  $wp_customize->add_setting('address_textbox')->transport = 'postMessage';
  $wp_customize->add_control('address_textbox',
  array(
  'label'     => 'Organization Address',
  'section'   => 'title_tagline',
  'settings'  => 'address_textbox',
  'type'      => 'textarea'
  ) );

  $wp_customize->add_section( 'social_media' , array(
    'title'      => __( 'Social Media', 'research' ),
    'priority'   => 30,
  ) );
  $wp_customize->add_setting('social_media_facebook')->transport = 'postMessage';
  $wp_customize->add_control('social_media_facebook',
  array(
  'label'     => 'Organization Facebook URL',
  'section'   => 'social_media',
  'settings'  => 'social_media_facebook',
  'type'      => 'text'
  ) );
  $wp_customize->add_setting('social_media_twitter')->transport = 'postMessage';
  $wp_customize->add_control('social_media_twitter',
  array(
  'label'     => 'Organization Twitter URL',
  'section'   => 'social_media',
  'settings'  => 'social_media_twitter',
  'type'      => 'text'
  ) );
  $wp_customize->add_setting('social_media_flickr')->transport = 'postMessage';
  $wp_customize->add_control('social_media_flickr',
  array(
  'label'     => 'Organization Flickr URL',
  'section'   => 'social_media',
  'settings'  => 'social_media_flickr',
  'type'      => 'text'
  ) );
  $wp_customize->add_setting('social_media_rss')->transport = 'postMessage';
  $wp_customize->add_control('social_media_rss',
  array(
  'label'     => 'Organization RSS URL',
  'section'   => 'social_media',
  'settings'  => 'social_media_rss',
  'type'      => 'text'
  ) );
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
