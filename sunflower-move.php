<?php

/**
 * Plugin Name: Sunflower Move
 * Plugin URI: https://sunflower-theme.de
 * Description: Nutzt das Sunflower-Theme, solange man eingeloggt ist. Allen anderen wird das bisherige Theme angezeigt. Während das Plugin aktiv ist, kann man kein Theme ändern.
 * Version: 1.0.0
 * Author: Tom Rose
 * Author URI: https://tom-rose.de
*/

add_filter( 'template', 'sunflower_move_show_theme' );
add_filter( 'option_template', 'sunflower_move_show_theme' );
add_filter( 'option_stylesheet', 'sunflower_move_show_theme' );
add_filter( 'pre_option_stylesheet', 'sunflower_move_show_theme' );

function sunflower_move_show_theme( $theme ){

   if(!file_exists(WP_CONTENT_DIR. '/themes/sunflower/style.css')){
       return $theme;
   }

   if ( is_user_logged_in() ) {
      return 'sunflower';
   } else {
      return $theme;
   }
}

