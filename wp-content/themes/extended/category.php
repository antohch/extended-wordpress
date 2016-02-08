<?php get_header(); ?>
<div class="page-title">
    	<h1><?php echo single_cat_title();?></h1>
        <p class="page-title-map"><a href="<?php home_url(); ?>">Home</a>  /  <?php echo single_cat_title();?></p>
    </div>  
      
      	<?php 
      		$cat_id = get_query_var('cat');
      		$tags = get_tags_in_cat($cat_id);
			if(!empty($tags)):
		?>
		<div class="page-nav">
				<ul>
				<?php
				foreach($tags as $tag_id => $tag):
				?>
					<li><a href="<?php echo get_tag_link($tag_id); ?>"><?php echo $tag?></a></li>
				<?php endforeach; ?>
				</ul>
		</div>
			<?php endif; ?>	
		<?php if ( have_posts() ) : ?>
		<div class="content-main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="artical-anons-main">
					<?php the_post_thumbnail('full', array('class' => 'artical-img'));?>
					<div class="artical-head">
						<h1><?php the_title(); ?></h1>
						<p><?php my_list_tags(); ?></p>
					</div>
					<?php the_excerpt(); ?>
					<p><a href="<?php the_permalink(); ?>" class="read-more">Read more</a></p>
				</div>

			<?php endwhile; ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<script>
	var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
	var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
	var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
	var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
	</script>
	<div id="true_loadmore">Загрузить ещё</div>
<?php endif; ?>
			<?php wp_corenavi(); ?>
		<?php else : ?>
			<div class="content-main">
				<p>В рубрике нет постов</p>
			</div>
		<?php endif; ?>
		</div>
<?php get_footer(); ?>