<?php //Full Width Background Image
$background_image = get_sub_field('fifty_background_image');
$header           = get_sub_field('fifty_header');
$wysiwyg          = get_sub_field('fifty_wysiwyg');

//Owl Carousel Slider

 ?>



<div class="fifty-fifty-wrapper" style="background-image: url('<?= $background_image ?>')">
    <div class="container">
        <div class="wave"></div>
        <div class="fifty-fifty">

            <h2><?= $header ?></h2>
            <div class="full-width-wysiwyg"><?= $wysiwyg ?></div>
        </div>
    </div>
</div>