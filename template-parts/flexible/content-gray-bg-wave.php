<?php //Full Width Background Image

$header = get_sub_field('gray_bg_header');
$image = get_sub_field('gray_bg_image');
$imageALT = $image['alt'];
$imageURL = $image['url'];
$imagePosition = get_sub_field('gray_bg_image_position');
$wysiwyg = get_sub_field('gray_bg_wysiwyg');
$extra_class = get_sub_field('gray_bg_extra_class');


$after_sec = get_sub_field('gray_bg_add_after_section');
$after_header = get_sub_field('gray_bg_after_header');
$background_image = get_sub_field('gray_bg_background_image');
$background_imageALT = $background_image['alt'];
$background_imageURL = $background_image['url'];
$defaultURL = 'http://curtis.devft.com/wp-content/themes/firetoss_seed-curtis/img/defaultheader.jpg';
$content = get_sub_field('gray_bg_content');
$single_column_list = get_sub_field('gray_bg_single_column_list');

?>


<div class="full-width-content-gray-bg-wrapper <?= $extra_class ? $extra_class : ""; ?>"
     style="background-color: #58595b;">
    <div class="container">
        <div class="full-width-content-gray-bg">
            <?php echo $image ? "<img src='$imageURL' alt='$imageALT' class='position-$imagePosition'>" : ""; ?>
            <?php echo $header ? "<h2>$header</h2>" : ""; ?>
            <div class="full-width-wysiwyg"><?= $wysiwyg ?></div>
        </div>
    </div>
</div>
<?php if ($after_sec): ?>
<div class="full-gray-bg-after <?=$single_column_list?"one-list":"";?>"
     style="background-image:url(<?= $background_image ? "$background_imageURL" : "$defaultURL"; ?>);">
    <div class="container">
        <div id="postTitle">
            <div id="postTitlewrap">
                <?php echo $after_header ? "<h2>$after_header</h2>" : ""; ?>
                <?php echo $content ? "<div class='full-width-wysiwyg'><div class='shape-wave'></div>$content</div>" : ""; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
