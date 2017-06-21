<?php //Full Width Background Image
$background_image = get_sub_field('full_width_tabs_background_image');
$header           = get_sub_field('full_width_tabs_header');
$top_left         = get_sub_field('full_width_tabs_top_left_text');
$top_left_link    = get_sub_field('full_width_tabs_top_left_link');
$tabcontent1      = get_sub_field('full_width_tabs_tab1_content');
$tab1_button_link      = get_sub_field('full_width_tabs_tab1_button_link');
$tab1_button_text      = get_sub_field('full_width_tabs_tab1_button_text');
$tabcontent2      = get_sub_field('full_width_tabs_tab2_content');
$tab2_button_link      = get_sub_field('full_width_tabs_tab2_button_link');
$tab2_button_text      = get_sub_field('full_width_tabs_tab2_button_text');
$tabcontent3      = get_sub_field('full_width_tabs_tab3_content');
$tab3_button_link      = get_sub_field('full_width_tabs_tab3_button_link');
$tab3_button_text      = get_sub_field('full_width_tabs_tab3_button_text');
$top_middle       = get_sub_field('full_width_tabs_top_middle_text');
$top_middle_link  = get_sub_field('full_width_tabs_top_middle_link');
$top_right        = get_sub_field('full_width_tabs_top_right_text');
$top_right_link   = get_sub_field('full_width_tabs_top_right_link');
$button_text      = get_sub_field('full_width_tabs_button_text');
$button_link      = get_sub_field('full_width_tabs_button_link');
$wysiwyg          = get_sub_field('full_width_tabs_wysiwyg');
$content_position = get_sub_field('full_width_tabs_content_position');
$extra_class      = get_sub_field('full_width_tabs_extra_class');

//Owl Carousel Slider

 ?>



<div class="full-width-tabs-wrapper <?= $extra_class ? $extra_class : "" ;?>" style="background-image: url('<?= $background_image ?>')">
    <div class="container">
        <div class="full-width-content-tabs  content-position-<?=$content_position?>">
            <?= $top_left ? "<div class='tab tab1'>
                <p class='tab-text'>$tabcontent1</p>
                <div class='btn-wrapper'><a href='$tab1_button_link' class='btn btn-primary animated'>$tab1_button_text</a></div>
                <h2><a href='$top_left_link'>$top_left</a></h2>
                
            </div>" : "" ?>
            <?= $top_middle ? "<div class='tab tab2'>
                <p class='tab-text'>$tabcontent2</p>
                <div class='btn-wrapper'><a href='$tab2_button_link' class='btn btn-primary animated'>$tab2_button_text</a></div>
                <h2><a href='$top_middle_link'>$top_middle</a></h2>
                
            </div>" : "" ?>
            <?= $top_right ? "<div class='tab tab3'>
                <p class='tab-text'>$tabcontent3</p>
                <div class='btn-wrapper'><a href='$tab3_button_link' class='btn btn-primary animated'>$tab3_button_text</a></div>
                <h2><a href='$top_right_link'>$top_right</a></h2>
            </div>" : "" ?>
            <h2 class="full-width-header"><?= $header ?></h2>

            <div class="full-width-wysiwyg"><?= $wysiwyg ?></div>
            <?= $button_text ? "<div class='button-wrapper'>
                <a class='animated' href='$button_link'>$button_text</a>
            </div>" : ""; ?>
        </div>
    </div>
</div>