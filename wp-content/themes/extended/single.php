<?php get_header(); ?>
<div class="page-title">
    	<h1>About Us</h1>
        <p class="page-title-map"><a href="#">Home</a>  /  About Us</p>
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
        	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/client1.jpg" alt="" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/client2.jpg" alt="" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/client3.jpg" alt="" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/client4.jpg" alt="" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/client5.jpg" alt="" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/client6.jpg" alt="" /></a>
        </div>
         
            
      </div>
<?php get_footer(); ?>
