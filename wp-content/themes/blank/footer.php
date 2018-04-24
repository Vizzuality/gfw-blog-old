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
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/jquery.query-object.js"></script>
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
            url: 'https://www.globalforestwatch.org/'
          }
        ]
      }
    };
  </script>
  <script id="loader-gfw" type="text/javascript" src="https://gfw-assets.s3.amazonaws.com/static/gfw-assets.nightly.js" data-current=".shape-blog"></script>
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

  /**cache**/
    var $sidebar        = $('#sidebar'),
        $pagetitle      = $('.pagetitle'),
        $main           = $('#main'),
        $pagination     = $('.pagination');
        $tagslisttitle  = $('.tagstitle-list');
  /****/
  
  $('#toggleMoreTagsSidebar').on('click',function(){
    var $target = $sidebar.find('.tags-list');
    $target.toggleClass('open');
    $(this).text(($target.hasClass('open')) ? 'Less tags ▲' : 'More tags ▼');
  });
  var callAjaxTags = function(tag,blockFillTag,offset,infinite) {
    if (! !!tag) tag = '';
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
          return repaintPosts(JSON.parse(response), tag, infinite);
         },
        error: function (request, status, error) {
          console.log(request.responseText);
        }
      });
  }
  $tagslisttitle.on('click','.x',function(){
    $('#tagoption-'+$(this).parent().data('slug')+'-lang').click();
    $(this).parent().remove();
  });
  $sidebar.on('change','input',function() {
    var isAll = (this.value == 'all' || this.value == 'all_e' || this.value == 'all_l');
    var elem = $sidebar.find('.tags-list').find('ul :checked');
    if (isAll && !this.checked) {
      if (this.value == 'all_e') $('#tagoption-all_l').prop('checked', false);
      return toggleAllTags(elem, false);
    }
    if (!isAll && $('#tagoption-all').is(':checked')) {$('#tagoption-all').prop('checked', false)};
    if ((!isAll || this.value == 'all_e') && $('#tagoption-all_l').is(':checked')) {$('#tagoption-all_l').prop('checked', false)};
    if (!this.checked) return removeTagsArticle(this.value);
    togglePagination('hide');
    if (isAll) {return toggleAllTags(!!elem.length, true);}
    var tags = new Array(elem.length);

    $pagetitle.text('Posts tagged with your selection');
    $tagslisttitle.empty();
    for (var i = 0; i < elem.length; i ++) {
      tags[i] = elem[i].value;
      $tagslisttitle.append(paintGreenTag(elem[i].value,elem[i].dataset.name));
    }
    $pagetitle.show();
    $tagslisttitle.show();
    callAjaxTags(tags.toString());
    $.query.SET('coffset', 0);
  });
  $main.on('click','#loadmorePostsTags',function(e){
    var currentOffset = ~~$.query.get('coffset') + 10;
    $.query.SET('coffset', currentOffset);
    var tags = $.query.get('ctags');
    for (var i = 0; i < tags.length; i++){
      callAjaxTags(tags[i],true,currentOffset,true);
    }
  });
  var paintGreenTag = function(slug,name) {
    return '<span data-slug="'+slug+'"><span class="text">'+name+'</span><span class="x">×</span></span>';
  }
  var toggleAllTags = function(elems, select) {
    if (!elems || (!!elems && !!select)) {
      elems = $sidebar.find('.tags-list input');
      select = true;
    }
    for (var i = 0; i < elems.length; i ++) {
      $(elems[i]).prop('checked', select);
    }
    callAjaxTags('',false);
  };
  function repaintPosts(posts, tag, infinite){
    var $columns = $('#main').find('.columns').first();
    if (!infinite) {
      (!$columns.hasClass('reppost')) ? $columns.addClass('reppost').find('article').addClass('original-content').hide() : $columns.find('.reppostedtag').remove();
    }
    $columns.find('.original-content').hide();
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
    $tagslisttitle.find('*[data-slug="'+tag+'"]').remove();
    updateURLTagParams('remove',tag);
    $('.card-type-'+tag).remove();
    if ($('.reppostedtag').length == 0){
      $('.original-content').show();
      togglePagination('show');
    }
    var text  = $pagetitle.text(),
        substr = new RegExp('\''+$('#tagoption-'+tag).data('name') + '\', ',"g");
    $pagetitle.text(text.replace(substr,""));
  }
  var updateURLTagParams = function(action, tag) {
    var currenttags = $.query.get("ctags");
    if (action == 'add') {
      if (currenttags.length > 0) currenttags[0] = tag;
      else currenttags = [tag];
    }
    if (action == 'remove') {
      currenttags = currenttags[0].split(',');
      currenttags.splice(currenttags.indexOf(tag),1);
      currenttags = [currenttags.toString()];
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
    callAjaxTags(tags.toString(), true);
    tags = tags[0].split(',');
    var tagsDOM = $sidebar.find('.tags-list');
    $tagslisttitle.empty();
    $pagetitle.text('Posts tagged with your selection');
    for (var i = 0; i < tags.length; i ++) {
      var prevtag = tagsDOM.find('[value='+tags[i]+']').prop('checked', true);
      $tagslisttitle.append(paintGreenTag(tags[i],prevtag.data('name')));
    }
    $pagetitle.show();
    $tagslisttitle.show();
    togglePagination('hide');
  };
  var togglePagination = function(mode) {
    if (!mode) return false;
    $('#loadmorePostsTags').remove();
    if (mode == 'show') {
      $pagination.fadeIn();
      $('.navigation-dir').fadeIn();
    } else if (mode == 'hide') {
      $pagination.fadeOut();
      $('.navigation-dir').fadeOut();
      $main.append('<div id="loadmorePostsTags"><span>Load more...</span></div>')
    }
  }
  $(function() {
      var tags = $.query.get('ctags');
      if (tags.length > 0) {
        if (! !!tags[0].length) return false;
        loadPreviousTags(tags);
      }
  });
  $('#supply-chain-menu').on('mouseenter', function(e){
    $(this).find('ul').stop().css('opacity', 0).slideDown('slow').animate(
      { opacity: 1 },
      { queue: false, duration: 'slow' }
    )
  }).on('mouseleave', function(){
    $(this).find('ul').stop().css('opacity', 1).slideUp('slow').animate(
      { opacity: 0 },
      { queue: false, duration: 'slow' }
    );
  });
  $('#gfw-community-menu').on('mouseenter', function(e){
    $(this).find('ul').stop().css('opacity', 0).slideDown('slow').animate(
      { opacity: 1 },
      { queue: false, duration: 'slow' }
    )
  }).on('mouseleave', function(){
    $(this).find('ul').stop().css('opacity', 1).slideUp('slow').animate(
      { opacity: 0 },
      { queue: false, duration: 'slow' }
    );
  })
</script>
</body>
</html>
