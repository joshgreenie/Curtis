<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 8/8/2016
 * Time: 11:29 AM
 */


if (has_post_thumbnail() && !is_singular('post')) {
    $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), full);
    ?>
    <div style="clear:both;"></div>
    <div id="imageTitle" <?php echo $thumbnail ? "style='background-image:url($thumbnail[0]);'" : ""; ?>>
        <!--        --><?php //the_post_thumbnail( 'full' );
        ?>
        <div id="postTitle">
            <div id="postTitlewrap"
                <?php if (is_page('Home')) { ?>
                    class="homeMessage"
                <?php } ?> >
                <h1><?php
                    if (is_singular('post')):
                        echo "Blog";
                    else:
                        the_title();
                    endif;
                    ?></h1>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div id="imageTitle"
        <?php
        if (is_home()): ?>
         style="background-image:url('/wp-content/uploads/2017/06/alt-header.jpg');">
        <?php else: ?>
            style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/defaultheader.jpg);">
        <?php endif; ?>
        <div id="postTitle">
            <div id="postTitlewrap">
                <h1><?php
                    if (is_home()):
                        echo "Blog";
                    elseif (is_singular('post')):
                        echo "Blog";
                    else:
                        the_title();
                    endif;
                    ?></h1>
            </div>
        </div>
    </div>
<?php } ?>