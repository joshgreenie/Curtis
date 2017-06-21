<?php
/**
 * Basic content block - alter to fit
 */

// vars

$title      = get_sub_field('title');
$subtitle   = get_sub_field('subtitle');
$content    = get_sub_field('content');

$side_image    = get_sub_field('side_image');
$side_imageURL = $side_image['url'];

$background_position = get_sub_field('background_position');
$background_positionSTYLE = "background-position: $background_position;background-size:contain;";

$background_image = get_sub_field('background_image');
$background_imageURL = $background_image['url'];
$background_imageStyle = "background-image:url($background_imageURL);";

$background_color = get_sub_field('background_color');
$bg_style = "background-color:$background_color;";

$text_color = get_sub_field('text_color');
$text_style = "style='color:$text_color;'";
?>

<div class="content-flex" style="<?=$background_color?"$bg_style":"";?><?=$text_color?"$text_style":"";?>" >
    <div class="container">
        <?php if($side_image):?>
        <div class="split-image-wrap">
        <div class="side-image-wrap">
            <img src="<?=$side_imageURL?>" alt="Erik Curtis">
        </div>
        <div class="side-content-wrap">
        <?php endif;?>

        <?=$title?"<h1 class='content-title'>$title</h1>":"";?>
        <?=$subtitle?"<h3 class='content-subtitle'>$subtitle</h3>":"";?>
        <?=$content?>

        <?php if($side_image):?>
        </div>
        </div>
        <?php endif;?>
    </div>
</div>

