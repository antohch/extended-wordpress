<?php 
/*
Template Name: Главная страница
*/
?>
<?php get_header();?>
<?php $slider = new WP_Query(array('post_type' => 'slider', 'order' => 'ASC')); ?>
<?php if($slider->have_posts()): ?>
	<div class="slider">
		<div class="flexslider">
			<ul class="slides">
<?php while($slider->have_posts()): $slider->the_post(); ?>
				<li>
					<div class="slide-content">
						<?php the_content(); ?>
					</div>
					<?php the_post_thumbnail('full'); ?>
				</li>
<?php endwhile; ?>
			</ul>
		</div>
    </div>
<?php else: ?>
<div><h1>Место для слайдера</h1></div>
<?php endif; ?>
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
            <div class="under-slider">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>

	<div class="content-main">
		
			<?php 
				$id = 3;//номер категории
				$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 4, 'order' => 'ASC',));
			?>
			<?php if ($posts_about->have_posts()): ?>
				<div class="whatwedo">
				<?php while($posts_about->have_posts()): $posts_about->the_post(); ?>
					<div>
						<h1><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h1>
						<?php the_excerpt();?>
					</div>
				<?php endwhile; ?>
				</div>
			<?php else: ?>
			<?php endif; ?>

			<?php 
				$id = 4;//номер категории
				$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 4, 'order' => 'ASC',));
			?>
			<?php if ($posts_about->have_posts()): ?>
				<h1 class="center-n"><span class="hnc">Our Latest Work</span> <span class="hnl"><a href="<?php echo get_category_link($id); ?>">/ View All Portfolio</a></span></h1>
				<div class="our-works-main">
				<?php while($posts_about->have_posts()): $posts_about->the_post(); ?>
					<div class="our-works">
						<a class="our-work-href" href="<?php the_permalink(); ?>">
							<div class="our-work-short">
								<img src="<?php bloginfo('template_url')?>/images/our-work-pic.png" alt="" />
								<h3><?php the_title(); ?></h3>
								<?php my_list_tags();?>
							</div>
							<img class="our-works-img" src="<?php echo get_post_meta(get_the_ID(), 'portfolio_img', true); ?>" alt="" />
						</a>
					</div>	
				<?php endwhile; ?>
				</div>
			<?php else: ?>
			<?php endif; ?>

		
			<?php 
				$id = 10;//номер категории
				$posts_acardion = new WP_Query(array('cat' => $id, 'posts_per_page' => 3, 'order' => 'ASC',));
			?>
			<?php if ($posts_acardion->have_posts()): ?>
				<div class="why-us">
					<h1 class="center-n"><span class="hnc"><?php echo get_the_category_by_ID($id); ?></span></h1>
					<div id="accordion">
					<?php while($posts_acardion->have_posts()): $posts_acardion->the_post(); ?>
					<h3><?php the_title();?></h3>
						<div><?php the_content();?></div>
					<?php endwhile; ?>
					</div>
				</div>
			<?php else: ?>
				<p>Блок для записей в формате акардиона</p>
			<?php endif; ?>
	
			<?php 
				$id = 11;//номер категории
				$posts_tab = new WP_Query(array('cat' => $id, 'posts_per_page' => 4, 'order' => 'ASC',));
			?>
			<?php if ($posts_tab->have_posts()): ?>
				<div class="our-services"> 
					<h1 class="center-n"><span class="hnc"><?php echo get_the_category_by_ID($id); ?></span></h1>
					<div id="tabs">
						<ul>
						<?php while($posts_tab->have_posts()): $posts_tab->the_post(); ?>
							<li><a href="#tabs-<?php the_ID(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; ?>
						</ul>
						<?php $sc = 0; ?>
						<?php while($posts_tab->have_posts()): $posts_tab->the_post(); ?>
							<div id="tabs-<?php the_ID();?>">
								<?php if(has_post_thumbnail()):?>
									<?php the_post_thumbnail('full', array('class' => "img-righter")); ?>
								<?php endif;?>
								<?php the_content(); ?>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php else: ?>
				<p>Блок для записей в формате таблица</p>
			<?php endif; ?>
		</div> 
<?php get_footer();?>    