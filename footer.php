<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Thomaslawplc
 */

?>

<footer>
    <section id="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4"><?php echo tl_get_option('footer_c1'); ?></div>
                <span class="ibs"><div class="col-md-3"><?php echo tl_get_option('footer_c2'); ?></div>
                <div class="col-md-3"><?php echo tl_get_option('footer_c3'); ?></div></span>
                <div class="col-md-3 col-sm-4"><?php echo tl_get_option('footer_c4'); ?></div>
            </div>
        </div>
    </section>
    <section id="copy-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><p><?php echo tl_get_option('footer_copyright'); ?></p></div>
            </div>
        </div>        
    </section>
</footer>

<?php wp_footer(); ?>
<script src="https://calendly.com/assets/external/widget.js" type="text/javascript"></script>
</body>
</html>
