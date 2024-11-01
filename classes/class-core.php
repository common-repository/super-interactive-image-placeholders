<?php

class SI_Image_Placeholders {

    public function __construct() {
        add_filter( 'wp_get_attachment_image_src', function( $src ) {
            $src[0] = "https://picsum.photos/{$src[1]}/$src[2]/?" . rand( 1, 10000 );
            return $src;
        }, 2 );
    }

}

new SI_Image_Placeholders;

