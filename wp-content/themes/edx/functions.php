<?php require_once 'include/plugins/init.php';
require_once('include/wpadmin/admin-addons.php');
require_once 'include/init.php';
require_once 'include/cpt.php';

//images sizes
add_image_size( 'free', '1920', '', true );
add_image_size( 'person', '585', '647', true );
add_image_size( 'news', '383', '250', true );
add_image_size( 'resource', '264', '125', true );
add_image_size( 'paper', '214', '273', true );
add_image_size( 'service', '342', '329', true );

//light function fo wp_get_attachment_image_src()
function image_src($id, $size = 'full', $background_image = false, $height = false) {
    if ($image = wp_get_attachment_image_src($id, $size, true)) {
        return $background_image ? 'background-image: url('.$image[0].');' . ($height?'min-height:'.$image[2].'px':'') : $image[0];
    }
}

function content_button($atts,$content = null){
    extract(shortcode_atts(array(
        'link' => '#',
        'class' => false,
        'target' => false
    ), $atts ));
    return '<a href="' . $link . '"  class="button'.($class?' '.$class:'').'" '.($target?'target="'.$target.'"':'').'>' . do_shortcode($content) . '</a>';
}
add_shortcode("button", "content_button");

function some() {
    $some = get_field('some', 'option');
    $soc = '';
    if($some) {
        $soc .= '<div class="some">';
        foreach($some as $sm) {
            $soc .= '<a class="fas fa-'.$sm['icon'].'" target="_blank" href="'.$sm['link'].'" rel="nofollow"></a>';
        }
        $soc .= '</div>';
    }
    return $soc;
}
add_shortcode("social", "some");

add_theme_support('custom-logo');

add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'img_svg', $html );
    $html = str_replace( 'custom-logo-link', 'logo', $html );

    return $html;
}

//add SVG to allowed file uploads

function add_file_types_to_uploads($file_types){



    $new_filetypes = array();

    $new_filetypes['svg'] = 'image/svg+xml';

    $file_types = array_merge($file_types, $new_filetypes );



    return $file_types;

}

add_action('upload_mimes', 'add_file_types_to_uploads');



