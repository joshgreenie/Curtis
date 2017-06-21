

<?
$clone_slider = get_sub_field('content_slider');
$slides = $clone_slider['slides'];

if( have_rows('content_slider_slides') ):?>
    <div class="slider-wrapper body-slider" style="background-color: #58595B;">
        <div class="container">
            <div class="owl-carousel owl-carousel-content" >
                <?php   // loop through the rows of data
                while ( have_rows('content_slider_slides') ) : the_row();
                    $slider_image           = get_sub_field('slider_image');
                    $slider_header          = get_sub_field('slider_header');
                    $slider_text      = get_sub_field('slider_text');
                    ?>
                    <div class="item">

                        <h2><?=$slider_header?></h2>
                        <p><?=$slider_text?></p>
                    </div>
                <?php    endwhile;?>
            </div>
        </div>
    </div>
<?php else :
    // no rows found
endif;?>
