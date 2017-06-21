<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 6/14/2017
 * Time: 2:05 PM
 */


?>
<?php if(have_rows('gallery_videos')): ?>
<div class="video-wrapper">
    <div class="container">
            <?php while(have_rows('gallery_videos')): the_row();
            $title = get_sub_field('video_title');
            $video_url = get_sub_field('video_url'); ?>
            <div class="third-col">
               <?php echo $video_url ? "<div class='ratio-fix-vid'>$video_url</div>":""; ?>
               <?php echo $title ? "<h2>$title</h2>":""; ?>
            </div>
         <?php   endwhile; ?>
    </div>
</div>
<?php endif; ?>



