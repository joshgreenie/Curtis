<?php $column_count = get_sub_field('cards_column_count'); ?>

<?php if(have_rows('cards_columns')): ?>
    <div class="container">
        <div class="card-wrapper count-<?=$column_count ? "$column_count" : ""?>">
            <?php while (have_rows('cards_columns')) : the_row();
                $header      = get_sub_field('header');
                $text        = get_sub_field('text');
                $image       = get_sub_field('image');
                $button_text = get_sub_field('button_text');
                $button_link = get_sub_field('link');

                ?>
                <div class="column card">
                    <div class="title-wrapper">
                        <?= $header ? "<h3 class='header'>$header</h3>" : "" ;?>

                        <?= $image ? "<img class='image-card' src='$image' />" : "" ;?>
                    </div>
                    <div class="card-content-wrapper">
                        <?= $text ? "<p class='card-text'>$text</p>" : "" ;?>
                        <?= $button_text ? "<a class='card-button animated' href='$button_link'>$button_text</a>" : ""; ?>
                    </div>

                </div>
            <?php endwhile?>
        </div>
    </div>
<?php endif ;?>