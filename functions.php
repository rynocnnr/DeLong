<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'side-menu' => __( 'Side Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>