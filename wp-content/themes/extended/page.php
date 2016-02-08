<?php get_header(); ?>
<div class="page-title">
        <h1><?php the_title(); ?></h1>
        <p class="page-title-map"><a href="<?php echo home_url(); ?>">Home</a>  / <?php the_title(); ?></p>
</div>  
<div class="content-main">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>     
</div>

<?php get_footer(); ?>