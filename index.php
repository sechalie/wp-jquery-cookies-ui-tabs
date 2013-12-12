<!-- Load style -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!-- Load js -->
<?php if (is_home()) { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cookie.js"></script>
<?php } ?> 

<!-- Set up cookies ID -->
<script type="text/javascript">
$(function() {
   $("#tabs").tabs({
    active: ($.cookie("tabs") || 0),  
    activate: function (event, ui) {   
   var newIndex = ui.newTab.parent().children().index(ui.newTab);  
   $.cookie("tabs", newIndex, { expires: 1 });                        
   }
   }); 
});
</script>


<!-- TABS STARTS -->
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Tab1<span class="under"></span></a></li>
    <li><a href="#tabs-2">Tab2<span class="under"></span></a></li>
  </ul>
  <div style="clear:both;"></div>
  <div id="tabs-1">
    <p>This is TAB1.  Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
  </div>
  <div id="tabs-2">
    <p>This is TAB2.  Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
  </div>

</div>
