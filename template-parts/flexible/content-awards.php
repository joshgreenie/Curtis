
<?
$clone_awards = get_sub_field('awards');


if( have_rows('awards') ):?>

<div class="full-width-awards-wrapper" >
    <div class="container">
        <div class="full-width-content awards">
            <?php   // loop through the rows of data
            while ( have_rows('awards') ) : the_row();
            $award_image      = get_sub_field('award_image');
            ?>
            <?= $award_image ? "<div class='award-image-wrapper'><img src='$award_image' /></div>" : "" ?>
            <?php    endwhile;?>
        </div>
    </div>
</div>
<?php else :
    // no rows found
endif;?>