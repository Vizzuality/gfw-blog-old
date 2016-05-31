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
  //Analytics
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', "UA-48182293-1", document.location.hostname);
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
    ga('push','_trackPageview');
  </script>
  <?php wp_footer(); ?>
  <div id="footerGfw"></div>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>  
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/jquery.query-object.js"></script>
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
   
  var $pagination = $('.pagination');
  if (!!$pagination[0]) {
    $('.prev-p-cont').followTo($pagination.offset().top - 650);
  }
  $('#toggleMoreTagsSidebar').on('click',function(){
    var $target = $('#sidebar').find('.tags-list');
    $target.toggleClass('open');
    $(this).text(($target.hasClass('open')) ? 'Less' : 'More...');
  });
  var callAjaxTags = function(tag,blockFillTag,offset) {    
    $.ajax(
      {
        url:'<?php echo get_home_url().'/wp-admin/admin-ajax.php' ?>',
        type:'post',
        // dataType: 'JSON',
        data: {
          action:'get_post_by_tag',
          tag: tag,
          offset: offset || 0
        },
        success: function(response) {
          if (! !!blockFillTag) updateURLTagParams('add',tag);
          return repaintPosts(JSON.parse(response), tag);
         },
        error: function (request, status, error) {
          console.log(request.responseText);
        }
      });
  }
  $('#sidebar').on('click','input',function() {
    if (!this.checked) return removeTagsArticle(this.value);
    $('.navigation-dir').addClass('change-default');
    var elem = $(this).parents('.tags-list').find(':checked');
    var tags = new Array(elem.length);
    for (var i = 0; i < elem.length; i ++) {
      tags[i] = elem[i].value;
    }
    callAjaxTags(tags.toString());
  });
  $('.prev-p-cont').on('click','.change-default',function(e){
    e.preventDefault();
    e.stopPropagation();
    var currentOffset = ~~$.query.get('coffset') + 10;
    if (~~currentOffset == 0) currentOffset = 10;
    history.pushState('', document.title, $.query.SET('coffset', currentOffset));
    var tags = $.query.get('ctags');
    for (var i = 0; i < tags.length; i++){
      callAjaxTags(tags[i],true,currentOffset);
    }
  });
  function repaintPosts(posts, tag){
    var $columns = $('#main').find('.columns').first();
    (!$columns.hasClass('reppost')) ? $columns.addClass('reppost').find('article').addClass('original-content').hide() : $columns.find('article').remove();
    for (i in posts){
      var categories = '';
      for (j in posts[i].categories) {
        categories += '<a href="<?php echo get_home_url()?>/category/'+posts[i].categories[j].slug+'/" title="View all posts in '+posts[i].categories[j].name+'" rel="category tag">'+posts[i].categories[j].name+'</a>';
      }
      $('<article/>', {
          id: 'post-'+posts[i].id,
          'class': 'card reppostedtag card-type-'+tag,
          'data-link': posts[i]['guid'],
      }).append('<img src="'+posts[i].picture+'"><header><h2><a href="'+posts[i].link+'" rel="bookmark" title="Permanent Link to '+posts[i].title+'">'+posts[i].title+'</a></h2></header><div class="content"><footer>'+categories+'<span>'+posts[i].date+'</span></footer></div>').appendTo($columns);
    }
  };
  var removeTagsArticle = function(tag) {
    updateURLTagParams('remove',tag);
    $('.card-type-'+tag).remove();
    if ($('.reppostedtag').length == 0){
      $('.original-content').show();
      $('.navigation-dir').removeClass('change-default')
    }
  }
  var updateURLTagParams = function(action, tag) {
    var currenttags = $.query.get("ctags");
    if (action == 'add') {
      if (currenttags.length > 0) currenttags[0] = tag;
      else currenttags = [tag];
    }
    if (action == 'remove') {
      var currenttags = currenttags[0].split(',');
      currenttags.splice(currenttags.indexOf(tag),1);
    }
    if (currenttags.length > 0){
      $.query.REMOVE('ctags');
      history.pushState('', document.title, location.protocol + '//' + location.host + location.pathname + $.query.SET("ctags", currenttags));
    }
    else {
      $.query.empty();
      history.pushState('', document.title, '<?php echo get_home_url(); ?>');
    }
  };
  var loadPreviousTags = function(tags) {
      tags = tags.filter(function(item, pos) {
          return tags.indexOf(item) == pos;
      });
      var tagsDOM = $('#sidebar').find('.tags-list');
      callAjaxTags(tags.toString(), true);
      tags = tags[0].split(',');
      for (var i = 0; i < tags.length; i ++) {
        tagsDOM.find('[value='+tags[i]+']').prop('checked', true);
      }
  }
  $(function() {
      var tags = $.query.get('ctags');
      if (tags.length > 0) {
        loadPreviousTags(tags);
      }
  });
</script>
</body>
</html>
