<?php get_header(); ?>
<div class="pageTitle alend">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<section class="content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>