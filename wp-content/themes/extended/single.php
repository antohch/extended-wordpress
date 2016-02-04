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
      	                
        <h1 class="center-n"><span class="hnc">Meet Our Team</span> <span class="hnl">/ <a href="#">View The Team</a></span></h1>
        <div class="our-team-main">
        	<div>
            	<h2><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/team1.jpg" alt="Darren Kimbell" /></a>
                <br />
                Darren Kimbell<br />
                <span>Business Marketing</span></h2>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor </p>
            </div>
            <div>
            	<h2><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/team2.jpg" alt="Darren Kimbell" /></a>
                <br />
                Allan Pesola<br />
                <span>Developer</span></h2>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor </p>
            </div>
            <div>
            	<h2><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/team3.jpg" alt="Darren Kimbell" /></a>
                <br />
                Lenore Hilker<br />
                <span>Designer</span></h2>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor </p>
            </div>
       	</div>
        
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
