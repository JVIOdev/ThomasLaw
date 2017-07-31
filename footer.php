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

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-89740429-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

</body>
</html>
