<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
</div> <!--! end of #container -->

  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>


  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/main.js") ?>

  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
       change the UA-XXXXX-X to be your site's ID -->
  <!-- WordPress.com does not allow Google Analytics code to be built into themes they host. 
       Add this section from HTML Boilerplate manually (html5-boilerplate/index.html), or use a Google Analytics WordPress Plugin-->
	   
  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
			   
  <?php wp_footer(); ?>
  <div id="footerGfw"></div>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>  
  <script id="loader-gfw" type="text/javascript" src="http://globalforestwatch.org/gfw-assets" data-current=".shape-blog"></script>
  <script type="text/javascript">
  $('.card:not(footer a)').on('click',function(){
    location.href=$(this).data('link')
  })
  </script>
  <script type="text/javascript">
  $.fn.followTo = function (pos) {
    var $this = this,
        $window = $(window);
 
    $window.scroll(function (e) {
        if ($window.scrollTop() > pos) {
            $this.css({
                position: 'absolute',
                top: $('.pagination').offset().top
            });
        } else {
            $this.css({
                position: 'fixed',
                top: '650px'
            });
        }
    });
  };
   
  $('.prev-p-cont').followTo($('.pagination').offset().top - 650);
</script>
</body>
</html>
