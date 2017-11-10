<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }
  } elseif (is_archive() && !is_search()) {
    if(is_author()){
      return 'Author: '.get_queried_object()->first_name." ".get_queried_object()->last_name;
    } else {
      return get_the_archive_title();
    }
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } elseif (is_search()) {
    if (function_exists( 'searchTitle' )) {
      return searchTitle() ;
    } else {
      return sprintf(__('Search Results for %s', 'sage'), get_search_query());
    }
  } else {
    return get_the_title();
  }
}
