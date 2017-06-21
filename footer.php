<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Firetoss_Theme
 */

?>

</div><!-- #content -->
<?php if ( is_front_page()) : ?>
    <div class="footer-tabs-wrapper">
        <div class="container">
            <div class="footer-content-tabs">
               <div class='tab tab1'>
                   <h2><a href='#'>Shave Ice Truck</a></h2>
                <div class='btn-wrapper'><a href='/shaved-ice-truck/' class='btn btn-primary animated'>Learn More</a></div>
            </div>
                <div class='tab tab2'>
                   <h2><a href='#'>Refer a Friend</a></h2>
                <div class='btn-wrapper'><a href='/refer-a-friend/' class='btn btn-primary animated'>Learn More</a></div>
            </div>
        </div>
    </div>
    </div>
<?php endif; ?>
        <div class="footer-site-logo" <?php if ( is_front_page()) : ?> style="display: none;" <?php endif; ?>>
            <a href="<?php echo esc_url( home_url() ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/Curtis-Ortho-footer-logo.png" alt="<?php bloginfo( 'name' ); ?>">
            </a>
        </div>
<div class="footer-wave" <?php if ( is_front_page()) : ?> style="display: none;" <?php endif; ?>>

</div>
<div class="footer-image" >
    <div class="container">
        <div class="footer-locations-header-wrapper">
            <h2 class="locations-header">Locations</h2>
        </div>
        <div class="footer-locations-wrapper">
            <div class="location">
                <h4>Coeur d'Alene Orthodontic Office</h4>
                <ul class="location-details">
                    <li class="address">215 W Canfield Avenue<br />
                        Coeur d'Alene, ID 83815</li>
                    <li class="phone">Phone: (208) 772-7272</li>
                    <li class="fax">Fax: (208) 635-5948</li>
                    <li class="email">Email: info@curtisbraces.com</li>
                </ul>
            </div>
            <div class="location">
                <h4>Post Falls Orthodontic Office</h4>
                <ul class="location-details">
                    <li class="address">602 North Calgary Court, Suite 302<br />
                        Post Falls, ID 83854</li>
                    <li class="phone">Phone: (208) 777-0500</li>
                    <li class="fax">Fax: (208) 635-5948</li>
                    <li class="email">Email: info@curtisbraces.com</li>
                </ul>
            </div>
            <p class="footer-hours">Office Hours: Monday thru Friday, 8am to 5pm</p>
        </div>
    </div>

</div>
<footer id="colophon" class="site-footer" role="contentinfo">


</footer><!-- #colophon -->
<?php
$signature_text = get_field('signature_text', 'option');
$signature_link = get_field('signature_link', 'option');

$footer_image = get_field('footer_image', 'option');
$footer_image_link = get_field('footer_image_link', 'option');
?>
<div id="footer-info" class="site-info">
    <div class="container">
        <p class="alignright">©<?php echo date('Y') ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved</p>
        <p class="alignleft">
            <a href="<?= $signature_link; ?>" target="_blank">
                <?= $signature_text; ?>
            </a>
            <a href="<?= $footer_image_link; ?>" target="_blank">
                <img src="<?= $footer_image; ?>" alt="Firetoss Web Design and Development">
            </a>
        </p>
    </div>
</div>
</div><!-- #page -->
<link href="//cdn.rawgit.com/noelboss/featherlight/1.7.2/release/featherlight.gallery.min.css" type="text/css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.2/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.2/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>

<?php wp_footer(); ?>

</body>
</html>
