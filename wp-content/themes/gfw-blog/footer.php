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
<div id="footerGfw"></div>

</body>
</html>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
  <script type="text/javascript">
    window.liveSettings = {
      picker: '#transifexTranslateElement',
      api_key: "9eda410a7db74687ba40771c56abd357",
      detectlang: false,
      site: 'gfw-global',
      menuOptions: {
        options: [
          {
            title: 'logo',
            url: 'http://www.globalforestwatch.org/'
          }
        ]
      }
    };
  </script>
  <script id="loader-gfw" type="text/javascript" src="http://globalforestwatch.org/gfw-assets" data-current=".shape-blog"></script>
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

<!-- analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-48182293-1']);
  _gaq.push(['_setDomainName', 'blog.globalforestwatch.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>