	</div> <!-- #home-head -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://static.tumblr.com/voy8cl3/8goon9v23/bootstrap.min.js"></script>
	<script type="text/javascript" src='<?php echo get_bloginfo('template_directory'); ?>/js/info.js' ></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/load.js" ></script>
	<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us15.list-manage.com","uuid":"c7e1763dface50beb1bcf4c21","lid":"ca92707eb9"}) })</script>
	<script type="text/javascript">
		/*(function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
		    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
		  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/56067/script.js');*/
		  var removeInterval;
		  
		  removeInterval = setInterval(function(){
		  if(document.getElementsByClassName('iframe-controls--desktop') && document.getElementsByClassName('iframe-controls--desktop')[0] &&  document.getElementsByClassName('iframe-controls--desktop')[0].style.display !== 'none'){
		          document.getElementsByClassName('iframe-controls--desktop')[0].style.display = 'none';
		          clearInterval(removeInterval);
		      }
		     
		  }, 500);
	</script>
	<?php wp_footer(); ?>
</body>
</html>