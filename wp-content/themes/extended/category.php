<?php get_header(); ?>
<div class="page-title">
    	<h1><?php echo single_cat_title();?></h1>
        <p class="page-title-map"><a href="<?php home_url(); ?>">Home</a>  /  <?php echo single_cat_title();?></p>
    </div>  
      <div class="page-nav">
		<ul>
			<li><a href="#">All</a></li>
			<li><a href="#">Web Design</a></li>
			<li><a href="#">Marketing</a></li>
			<li><a href="#">Logo</a></li>
			<li><a href="#">Branding</a></li>
			<li><a href="#">Print</a></li>
			<li><a href="#">Photography</a></li>
		</ul>
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
		<ul class="pager">
			<li><a href="#" class="now">1</a></li></li>
			<li><a href="#">2</a></li></li>
			<li><a href="#">3</a></li></li>
			<li><a href="#">4</a></li></li>
		</ul>
		</div>
		<?php else : ?>
			<div class="content-main">
				<p>В рубрике нет постов</p>
			</div>
		<?php endif; ?>
   <!-- <div class="content-main">
		<div class="artical-anons-main">
			<img src="<?php bloginfo('template_url')?>/images/artical1.jpg" alt="" class="artical-img" />
			<div class="artical-head">
				<h1>Risus Parturient Malesuada</h1>
				<p>Print, Marketing, Branding</p>
			</div>
			<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id </p>
			<p><a href="#" class="read-more">Read more</a></p>
		</div>

		<div class="artical-anons-main">
			<img src="<?php bloginfo('template_url')?>/images/artical2.jpg" alt="" class="artical-img" />
			<div class="artical-head">
			<h1>Risus Parturient Malesuada</h1>
			<p>Print, Marketing, Branding</p>
			</div>
			<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id </p>
			<p><a href="#" class="read-more">Read more</a></p>
		</div>

		<div class="artical-anons-main">
			<img src="<?php bloginfo('template_url')?>/images/artical3.jpg" alt="" class="artical-img" />
			<div class="artical-head">
			<h1>Risus Parturient Malesuada</h1>
			<p>Print, Marketing, Branding</p>
			</div>
			<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id </p>
			<p><a href="#" class="read-more">Read more</a></p>
		</div>
		<ul class="pager">
			<li><a href="#" class="now">1</a></li></li>
			<li><a href="#">2</a></li></li>
			<li><a href="#">3</a></li></li>
			<li><a href="#">4</a></li></li>
		</ul>
		
	</div>-->
<?php get_footer(); ?>