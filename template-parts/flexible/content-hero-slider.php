<?php if (have_rows('hero_slider_slide')):?>
<div class="hero-wrapper">
    <div class="owl-carousel owl-carousel-hero">
        <?php
        while (have_rows('hero_slider_slide')) : the_row();
            $fancy_header = get_sub_field('fancy_header');
            $header = get_sub_field('header');
            $subheader = get_sub_field('subheader');
            $text_align = get_sub_field('text_align');
            $background = get_sub_field('background');
            ?>
            <div class="item">
                <div class="slide-image" style="background-image: url(<?=$background?>)">
                    <div class="container">
                        <div class="slide-content align-<?=$text_align?>">

                            <div class="slider-text">
                                <?=$fancy_header ? "<h2 class='fancy-header'>$fancy_header</h2>" : "";?>
                                <?=$header ? "<h1 class='slide-header'>$header</h1>" : "";?>
                                <?=$subheader ? "<h3>$subheader</h3>" : "";?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </div>
</div>
<?php endif ?>