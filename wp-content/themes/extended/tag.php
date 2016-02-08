<?php get_header(); ?>
<div class="page-title">
    	<h1><?php echo single_cat_title();?></h1>
        <p class="page-title-map"><a href="<?php home_url(); ?>">Home</a>  /  <?php echo single_cat_title();?></p>
    </div>  

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
		
			<?php wp_corenavi(); ?>
		<?php else : ?>
			<div class="content-main">
				<p>Ничего не найдено</p>
			</div>
		<?php endif; ?>
		</div>
<?php get_footer(); ?>