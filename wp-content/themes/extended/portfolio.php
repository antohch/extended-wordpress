<?php get_header(); ?>
<div class="page-title">
		<?php $cat = get_the_category()?>
    	<h1><?php the_title(); ?></h1>
        <p class="page-title-map"><a href="<?php echo home_url(); ?>">Home</a>  /  <a href="<?php echo get_category_link($cat[0]->term_id); ?>"><?php echo $cat[0]->name ;?></a> / <?php the_title(); ?></p>
		
    </div>  
	
	<!-- слайдер -->
	<?php $gallery = get_post_meta($post->ID, 'gallery', true);?>
	<?php if(!empty($gallery)): $gallery = explode(",", $gallery);?>
	<div class="slider-portfolio">
		<div class="flexslider">
			<ul class="slides">
	<?php foreach($gallery as $item): ?>
				<li>
					<?php echo wp_get_attachment_image($item, 'full'); ?>
					<img src="<?php bloginfo('template_url')?>/images/portfolio-shadow.png" />
				</li>
	<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<?php endif;?>
	<!-- слайдер -->
    <div class="content-main">
<div class="content-left">

            
			<?php if (have_posts()): while(have_posts()): the_post(); ?>
				<h2 class="projeact-descrip"><span><img src="<?php bloginfo('template_url')?>/images/progect-descript.jpg" alt="" /> Project Description</span></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php else: ?>
				<p>Для контента</p>
			<?php endif; ?>
        </div>
        
        <div class="right-bar">
			<?php if(!dynamic_sidebar('single_portfolio')):?>
				<h3><span>Categoris</span></h3>
				<ul>
					<?php wp_list_categories(array('title_li' => ''));?>           
				</ul>
			<?php endif; ?>
        </div>	
        
        <div class="clr"></div><br />
      	<?php
		//получаем теги
		$tags = strip_tags(my_list_tags(false));
		//получаем номер категории
		if($tags):
			$cat = get_the_category();
			$cat = $cat[0]->cat_ID;
			$args = array(
				'cat' => $cat,
				'tag' => $tags,
				'post_per_page' => 4,
				'post__not_in' => array($post->ID),
			);
			$posts_related = new WP_Query($args);
		?>
			<?php if ($posts_related->have_posts()):?>
				<h1 class="center-n"><span class="hnc">Related Projects</span></h1>
				<div class="our-works-main">
			<?php while($posts_related->have_posts()): $posts_related->the_post(); ?>
				<div class="our-works">
					<a class="our-work-href" href="<?php the_permalink(); ?>">
						<img class="our-work-img" src="<?php echo get_post_meta(get_the_ID(), 'portfolio_img', true); ?>" alt="" />
					</a>
				</div>
			<?php endwhile; ?>
				</div>
			<?php else: ?>
				<p>Связанных записей нет</p>
			<?php endif; ?>
		<?php endif;?>
       <!-- <h1 class="center-n"><span class="hnc">Related Projects</span></h1>
        
        <div class="our-works-main">
        	<div class="our-works">
            	<a class="our-work-href" href="#">
                    
                    <img class="our-work-img" src="<?php bloginfo('template_url')?>/images/our-work1.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    
                    <img class="our-work-img" src="<?php bloginfo('template_url')?>/images/our-work2.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    
                    <img class="our-work-img" src="<?php bloginfo('template_url')?>/images/our-work3.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    
                    <img class="our-work-img" src="<?php bloginfo('template_url')?>/images/our-work4.jpg" alt="" />
                </a>
            </div>
        </div>-->
	</div>
<?php get_footer(); ?>