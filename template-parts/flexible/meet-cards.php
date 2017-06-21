<?php $column_count = get_sub_field('meet_cards_column_count'); ?>

<?php if(have_rows('meet_cards_columns')): ?>
    <div class="container">
        <div class="meet-card-wrapper count-<?=$column_count ? "$column_count" : ""?>">
            <?php while (have_rows('meet_cards_columns')) : the_row();
                $name         = get_sub_field('name');
                $title        = get_sub_field('title');
                $image        = get_sub_field('image');
                $text         = get_sub_field('text');


                ?>
                <div class="column meet-card">
                    <?= $image ? "<img class='image' src='$image' />" : "" ;?>

                    <?= $name ? "<h3 class='name'>$name</h3>" : "" ;?>
                    <?= $title ? "<p class='job-title'>$title</p>" : "" ;?>

                </div>
            <?php endwhile?>
        </div>
    </div>
<?php endif ;?>