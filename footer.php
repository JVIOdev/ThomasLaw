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


<?php if (is_page_template( 'credit_repair_landing.php' ) || is_page_template( 'military_landing.php' )) {
?> 

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '107200673300804'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=107200673300804&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<script>
jQuery('.logoblock').click(function() {
return false;
})
jQuery('.logoblock').removeAttr('href');
</script>

<?php } ?>

</body>
</html>
