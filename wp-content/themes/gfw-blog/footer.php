<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package GFW blog
 */
?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
      <?php do_action( 'gfw_blog_credits' ); ?>

      <div class="footer-share">
        <p>Spread the word. <strong>Share Global Forest Watch.</strong></p>

        <div class="share_buttons">
          <div id="fb-root"></div>
          <a href="http://twitter.com/share" target="_blank" class="twitter-share-button" data-url="http://www.gfw-beta.org/" data-text="Global Forest Watch">Tweet</a>
          <div class="g-plusone" data-size="medium" data-href="http://www.gfw-beta.org/"></div>
          <div class="fb-like" data-href="http://www.gfw-beta.org/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>
      </div>

      <div class="footer-logos">
        <p>A partnership of</p>
        <a href="http://www.wri.org" class="footer-logo wri" target="_blank"></a>
        <a href="http://earthengine.google.org/" class="footer-logo google" target="_blank"></a>
        <a href="http://www.cgdev.org/" class="footer-logo cfgd" target="_blank"></a>
        <a href="http://www.geog.umd.edu/" class="footer-logo universitymaryland" target="_blank"></a>
        <a href="http://www.imazon.org.br/pagina-inicial-en?set_language=en&amp;cl=en" class="footer-logo imazon" target="_blank"></a>
        <a href="http://www.unep.org/" class="footer-logo unep" target="_blank"></a>
        <a href="http://www.esri.com/" class="footer-logo esri" target="_blank"></a>
      </div>

      <div class="footer-address">
        <p>A strategic initiative of</p>
        <a href="http://www.wri.org" class="footer-logo wri" target="_blank"></a>
        <address>
          10 G Street NE Suite 800, Washington, DC 20002, USA<br>
          <br>
          Phone +1 (202) 729-7600<br>
          Fax +1 (202) 729-7610
          Email <a href="mailto:gfw@wri.org">gfw@wri.org</a>
        </address>
      </div>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- social -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&status=0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<script type="text/javascript">
(function() {
  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
  po.src = 'https://apis.google.com/js/plusone.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>

</body>
</html>