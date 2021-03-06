<?php
/**
 * Flexible template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _scorch
 * 
 * 
 */
$contentOptions = array(
    //Layout name   => stub-{type}.php
    'content'              => 'content',
    'slider'               => 'slider',
    'columns'              => 'columns',
    'hero_slider'          => 'hero-slider',
    'full_width'           => 'full-width',
    'full_width_tabs'      => 'full-width-tabs',
    'posts'                => 'posts',
    'cards'                => 'cards',
    'meet_cards'           => 'meet-cards',
    'gray_bg'              => 'gray-bg-wave',
    'fifty'                => '50-50-wave',
    'awards'               => 'awards',
    'videos'               => 'videos',
    'image_gallery'               => 'image_gallery',

);
// check if the flexible content field has rows of data
if( have_rows('flexible_fields') ):
    // loop through the rows of data
    while ( have_rows('flexible_fields') ) : the_row();
        // Identify the selected layout
        $rowLayout = get_row_layout();
        // If a layout is selected
        if ($rowLayout) :
            foreach ($contentOptions as $key => $value) {
                if ($rowLayout == $key){
                    get_template_part('template-parts/flexible/content', $value);
                    break;
                }
            }
        else :
            // No layout selected
        endif;
    endwhile;
else :
    the_content();
endif;