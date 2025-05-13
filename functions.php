<?php
// Enqueue main stylesheet
function salma_blog_styles() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'salma_blog_styles');

// Register main menu
function salma_register_menus() {
  register_nav_menu('main-menu', 'Main Menu');
}
add_action('after_setup_theme', 'salma_register_menus');

// Register sidebar
function salma_widgets_init() {
  register_sidebar([
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ]);
}
add_action('widgets_init', 'salma_widgets_init');

// Enqueue Swiper assets
function salma_load_swiper_assets() {
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);
  wp_enqueue_script(
    'salma-swiper-init',
    get_template_directory_uri() . '/swiper-init.js',
    ['swiper-js'],
    null,
    true
);
}
add_action('wp_enqueue_scripts', 'salma_load_swiper_assets');

// Override Gutenberg Gallery Block Output
add_filter('render_block_core/gallery', 'salma_override_gallery_output', 10, 2);
function salma_override_gallery_output($block_content, $block) {
    if (empty($block['attrs']['ids']) || !is_array($block['attrs']['ids'])) {
        return $block_content;
    }

    $output  = '<div class="swiper">';
    $output .= '<div class="swiper-wrapper">';

    foreach ($block['attrs']['ids'] as $id) {
        // Use 'full' size for larger images
        $img = wp_get_attachment_image($id, 'full');
        $output .= '<div class="swiper-slide">' . $img . '</div>';
    }

    $output .= '</div>'; // .swiper-wrapper

    // We only add the pagination now for the sliding effect
    $output .= '<div class="swiper-pagination"></div>';
    $output .= '</div>'; // .swiper

    return $output;
}

function salma_enqueue_flip_script() {
  if (is_single()) {
      wp_enqueue_script(
          'flip-script',
          get_template_directory_uri() . '/flip.js',
          array(),
          false,
          true
      );
  }
}
add_action('wp_enqueue_scripts', 'salma_enqueue_flip_script');


?>
