<?php $column_count = get_sub_field('meet_cards_column_count'); ?>

<?php if (have_rows('meet_cards_columns')):
    $i = 1;
    ?>
    <div class="container">
        <div class="meet-card-wrapper count-<?= $column_count ? "$column_count" : "" ?>">
            <?php while (have_rows('meet_cards_columns')) : the_row();
                $name = get_sub_field('name');
                $title = get_sub_field('title');
                $image = get_sub_field('image');
                $text = get_sub_field('text');
                $desc = get_sub_field('description');

                ?>
                <div class="column meet-card">
                    <a class="lightbox-link" href="#idofdiv-<?= $i; ?>">
                        <?= $image ? "<div class='image' style='background-image:url($image);'></div>" : ""; ?>

                        <?= $name ? "<h3 class='name'>$name</h3>" : ""; ?>
                        <?= $title ? "<p class='job-title'>$title</p>" : ""; ?>

                    </a>

                </div>
                <div class="lightbox-wrapper" data-featherlight-gallery data-featherlight-filter
                     id="idofdiv-<?= $i; ?>">
                    <div class="light-box-header">
                        <div class="logo">
                            <img src="/wp-content/themes/firetoss_seed-curtis/img/logo.png" alt="Curtis Ortho"
                                 width="250"/>
                        </div>
                    </div>
                    <div class="lightbox-content">
                        <div class="left-side-wrapper">
                            <div class="lightbox-image-wrapper">
                                <?= $image ? "<div class='image' style='background-image:url($image);'></div>" : ""; ?>
                            </div>
                        </div>
                        <div class="right-side-wrapper">
                            <div class="name-job-title"><?= $name ? "<h3 class='name'>$name</h3>" : ""; ?>
                                <?= $title ? "<p class='job-title'>$title</p>" : ""; ?>
                            </div>
                            <div class="about-paragraph">
                                <?= $desc ? "<div class='about-text'>$desc</div>" : ""; ?>
                            </div>
                        </div>
                    </div>
                    <div class="light-box-footer">

                    </div>
                </div>
                <?php
                $i++;
            endwhile; ?>
        </div>
    </div>
<?php endif; ?>