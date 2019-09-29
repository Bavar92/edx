<?php get_header();
$bgTop = wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>
<?php if($bgTop) { ?>
    <div class="singleTop parallax-window cover alend"
          data-parallax="scroll" data-image-src="<?= $bgTop; ?>">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
<?php } else { ?>
    <div class="pageTitle alend">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
<?php } ?>



<section class="content">
    <div class="parentBox">
        <div class="container flex">
            <article>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </article>
            <aside>
                <?php get_template_part('sidebar', ''); ?>
            </aside>
        </div>
    </div>
</section>
<?php get_footer(); ?>

