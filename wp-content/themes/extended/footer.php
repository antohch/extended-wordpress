<div class="footer">
		<?php $post_copirite = new WP_Query(array('post_type' => 'copirite', 'posts_per_page' => 1,)); ?>
		<?php if($post_copirite->have_posts()):?>
			<?php while($post_copirite->have_posts()): $post_copirite->the_post();?>
				<p class="copy"><?php the_title(); ?></p>
			<?php endwhile;?>
		<?php endif?>
		
		<?php wp_nav_menu(array(
				'container_class' => 'ftrmenu', 
				'menu_class' => '', 
				'theme_location' => 'footer_menu',
			));?>
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