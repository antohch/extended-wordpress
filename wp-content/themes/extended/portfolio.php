<?php get_header(); ?>
<div class="page-title">
		<?php $cat = get_the_category()?>
    	<h1><?php the_title(); ?></h1>
        <p class="page-title-map"><a href="<?php echo home_url(); ?>">Home</a>  /  <a href="<?php echo get_category_link($cat[0]->term_id); ?>"><?php echo $cat[0]->name ;?></a> / <?php the_title(); ?></p>
		
    </div>  
	<div class="slider-portfolio">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="<?php bloginfo('template_url')?>/images/portfolio-single.jpg" />
					<img src="<?php bloginfo('template_url')?>/images/portfolio-shadow.png" />
				</li>
				<li>

					<img src="<?php bloginfo('template_url')?>/images/portfolio-single.jpg" />
					<img src="<?php bloginfo('template_url')?>/images/portfolio-shadow.png" />
				</li>
				<li>
					<img src="<?php bloginfo('template_url')?>/images/portfolio-single.jpg" />
					<img src="<?php bloginfo('template_url')?>/images/portfolio-shadow.png" />
				</li>
				<li>
					<img src="<?php bloginfo('template_url')?>/images/portfolio-single.jpg" />
					<img src="<?php bloginfo('template_url')?>/images/portfolio-shadow.png" />
				</li>
			</ul>
		</div>
	</div>
    <div class="content-main">
<div class="content-left">
        	<h2 class="projeact-descrip"><span><img src="<?php bloginfo('template_url')?>/images/progect-descript.jpg" alt="" /> Project Description</span></h2>
            
            <p>Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum.</p>

<p>Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor.</p>

<p>Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

<p>Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.Nullam id dolor id n ibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula. eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        </div>
        
        <div class="right-bar">
        	<h3><span>Skills</span></h3>
            <ul>
            	<li><a href="#">HTML/CSS</a></li>
                <li><a href="#">jQuery</a></li>
                <li><a href="#">WordPress</a></li>
                <li><a href="#">Photoshop</a></li>
            </ul>  
            <h3><span>Categories</span></h3>
            <ul>
            	<li><a href="#">Web Development</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Template</a></li>                
            </ul>  
            <h3><span>Client</span></h3>
            <ul>
            	<li><a href="#"><em>MonkeeThemes</em></a></li>                
            </ul>    
        </div>	
        
        <div class="clr"></div><br />
      	
        <h1 class="center-n"><span class="hnc">Related Projects</span></h1>
        
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
        </div>
	</div>
<?php get_footer(); ?>