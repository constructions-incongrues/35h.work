<?php
//taille image
add_theme_support( 'menus' );

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

add_filter('the_content', 'my_addlightboxrel');
function my_addlightboxrel($content) {
       global $post;
       $pattern ="/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
       $replacement = '<a$1href=$2$3.$4$5 rel="lightbox" title="'.$post->post_title.'"$6>';
       $content = preg_replace($pattern, $replacement, $content);
       return $content;
}

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');



add_action('init', 'init_faq');

function init_faq()
{
    register_post_type('faq', array(
        'label' => __('FAQ'),
        'singular_label' => __('FAQ'),
        'public' => true,
        'show_ui' => true,
        'menu_position' => 5,
        'capability_type' => 'post',
        'supports' => array(
            'title',
            'custom-fields'
            ),
        'taxonomies' => array(
            'category'
            )
        ));
}


add_action('init', 'init_candidature');

function init_candidature()
{
    register_post_type('candidature', array(
        'label' => __('Candidatures'),
        'singular_label' => __('Candidature'),
        'public' => true,
        'show_ui' => true,
        'menu_position' => 5,
        'capability_type' => 'post',
        'supports' => array(
            'title',
            'excerpt',
            'editor'
            )
        ));
}


?>