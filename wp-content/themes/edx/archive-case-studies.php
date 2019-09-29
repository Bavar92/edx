<?php get_header(); ?>
<?php get_template_part('parts/top', ''); ?>

<?php get_template_part('parts/pages', ''); ?>
    <section class="content">

        <div class="container">
            <?php $resources = new WP_Query(array(
                'post_type' => 'case-studies',
                'post_status' => 'publish',
                'orderby' => 'date',
                'posts_per_page' => 12,
                'paged' => get_query_var('paged'),
            ));



            if ($resources->have_posts()) : ?>
                <div class="resources">
                    <?php while ($resources->have_posts()) : $resources->the_post(); ?>
                        <div class="resource">
                            <?php if (has_post_thumbnail()) { ?>
                                <a class="thumb" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('resource'); ?>
                                </a>
                            <?php } ?>
                            <div class="info">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <a class="read" href="<?php the_permalink(); ?>"><img class="img_svg" src="<?= theme()  ?>/images/arrow.svg" alt="image">Learn more</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif;
            wp_reset_query(); ?>
        </div>
    </section>
<?php get_footer(); ?>