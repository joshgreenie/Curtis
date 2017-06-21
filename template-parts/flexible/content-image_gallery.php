<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 6/14/2017
 * Time: 2:50 PM
 */

$images = get_sub_field('images_image_gallery');

if ($images): ?>
    <div class="image-wrap">
        <div class="container">
            <div class="owl-gallery owl-carousel">
                <?php foreach ($images as $image): ?>

                    <div class="item" style="background-image:url(<?php echo $image['url']; ?>">

                        <img class="hidden" src="<?php echo $image['url']; ?>">
                        <h2><?php echo $image['title']; ?></h2>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<script type="text/javascript">


    (function ($) {
        $(document).ready(function () {

// the following to the end is whats needed for the thumbnails.
            $(document).ready(function () {


// 1) ASSIGN EACH 'DOT' A NUMBER
                dotcount = 1;

                $('.owl-dot').each(function () {
                    $(this).addClass('dotnumber' + dotcount);
                    $(this).attr('data-info', dotcount);
                    dotcount = dotcount + 1;
                });

// 2) ASSIGN EACH 'SLIDE' A NUMBER
                slidecount = 1;

                $('.owl-item').not('.cloned').each(function () {
                    $(this).addClass('slidenumber' + slidecount);
                    slidecount = slidecount + 1;
                });

// SYNC THE SLIDE NUMBER IMG TO ITS DOT COUNTERPART (E.G SLIDE 1 IMG TO DOT 1 BACKGROUND-IMAGE)
                $('.owl-dot').each(function () {

                    grab = $(this).data('info');

                    slidegrab = $('.slidenumber' + grab + ' img').attr('src');
                    console.log(slidegrab);

                    $(this).css("background-image", "url(" + slidegrab + ")");

                });

// THIS FINAL BIT CAN BE REMOVED AND OVERRIDEN WITH YOUR OWN CSS OR FUNCTION, I JUST HAVE IT
// TO MAKE IT ALL NEAT
                amount = $('.owl-dot').length;
                gotowidth = 186 / amount;

                $('.owl-dot').css("width", gotowidth + "%");
                newwidth = $('.owl-dot').width();
                $('.owl-dot').css("height", newwidth + "px");


            });

        });
    })(jQuery);


</script>