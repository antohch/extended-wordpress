<?php
if(in_category(4)){
	include 'portfolio.php';
	exit;
}
?>
<?php get_header(); ?>
<div class="page-title">
		<?php $cat = get_the_category()?>
    	<h1><?php echo $cat[0]->name ;?></h1>
        <p class="page-title-map"><a href="<?php echo home_url(); ?>">Home</a>  /  <a href="<?php echo get_category_link($cat[0]->term_id); ?>"><?php echo $cat[0]->name ;?></a> / <?php the_title(); ?></p>
		<?php link_b();?>
		
    </div>  
      
      <div class="content-main">
        <?php if (have_posts()): while(have_posts()): the_post();//проверка на посты; этим циклом выводятся все посты ?>
            <?php the_post_thumbnail('full', array('class' => 'img-lefter')); ?>
                    <h1 class="center-n"><span class="hnc"><?php the_title(); ?></span></h1>
                    <?php the_content(); ?>
        <?php endwhile; ?>
        <?php else: ?>
                    <h1 class="center-n"><span class="hnc">Для контента</span></h1>
        <?php endif; ?>
		
		<!-- Our Team -->
		<?php 
		$id = 5;
		$post_team = new WP_Query(array('cat' => $id, 'posts_per_page' => 3, 'order' => 'ASC',)); 
		?>
		<?php if ($post_team->have_posts()):?>
			<h1 class="center-n"><span class="hnc"><?php echo get_category($id)->cat_name ;?></span> <span class="hnl">/ <a href="<?php echo get_category_link($id); ?>">View The Team</a></span></h1>

			<div class="our-team-main">
		<?php while($post_team->have_posts()): $post_team->the_post(); ?>
            <div>
            	<h2><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                <br />
                <?php the_title(); ?><br />
                <span><?php my_list_tags(); ?></span></h2>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endwhile; ?>
			</div>
        <?php else: ?>
			<h1 class="center-n"><span class="hnc">Для контента Meet Our Team</span></h1>
        <?php endif; ?>              
        
        <h1 class="center-n"><span class="hnc">Our Clients</span></h1>
        
        <div class="our-clients">
			<?php if(!dynamic_sidebar('clients')):?>
				<span>Наши клиенты</span>
			<?php endif?>
        </div>
            
      </div>
<?php get_footer(); ?>
