<?php $column_count = get_sub_field('cards_column_count'); ?>

<?php if(have_rows('cards_columns')): ?>
    <div class="container">
        <div class="column-wrapper count-<?=$column_count ? "$column_count" : ""?>">
            <?php while (have_rows('cards_columns')) : the_row();
                $header      = get_sub_field('header');
                $text        = get_sub_field('text');
                $image       = get_sub_field('image');
                $button_text = get_sub_field('button');
                $button_link = get_sub_field('link');

                ?>
                <div class="column card">
                    <?= $header ? "<h3>$header</h3>" : "" ;?>

                    <?= $image ? "<img src='$image' />" : "" ;?>
                    <?= $text ? "<p>$text</p>" : "" ;?>
                    <?= $button_text ? "<a href='$button_link'>$button_text</a>" : ""; ?>
                </div>
            <?php endwhile?>
        </div>
    </div>
<?php endif ;?>