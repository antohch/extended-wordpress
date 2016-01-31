<div class="footer">
		<p class="copy">Copyright 2012. All Right Reserved MonkeeThemes.</p>
		<p class="ftrmenu">
			<a href="#">Home</a> |
			<a href="#">About</a> |
			<a href="#">Sitemap</a> |
			<a href="#">Contact</a>
		</p>
	</div>
</div>


<!-- jQuery -->
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->


  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
	  $( "#accordion" ).accordion();
	  $( "#tabs" ).tabs();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


<?php wp_footer();?>
</body>
</html>   