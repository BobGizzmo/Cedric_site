<?php 

////////////////////////////////////// MENU ////////////////////////////////////////////////
register_nav_menus( array(
       'primary' => __( 'Primary Menu', 'twentyfourteen' ),
    ) );

$args_img_header = array(
    'width'         => 1920,
    'height'        => 750,
    'default-image' => 'http://fidestia.fr/images/bg9.jpg?crc=510355820',
    'uploads'       => true,
    );
    add_theme_support( 'custom-header', $args_img_header );