<?php get_header(); ?>
<?php get_template_part('parts/top', ''); ?>
<?php get_template_part('parts/pages', ''); ?>
    <section class="content">
        <div class="parentBox">
            <div class="container flex">
                <article>
                    <?php
                    $sticky = get_option('sticky_posts');
                    $news = new WP_Query(array(
                        'posts_per_page' => 1,
                        'post__in' => $sticky,
                        'ignore_sticky_posts' => 1
                    ));
                    if ($news->have_posts()) : ?>
                        <?php while ($news->have_posts()) : $news->the_post();
                            $bgTop = wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>
                            <?php if ($bgTop) { ?>
                                <a class="postSticky mobile_hide" href="<?php the_permalink(); ?>"
                                   style="background-image: url(<?= $bgTop ?>)">
                                       <span class="text">
                                           <h2><?php the_title(); ?></h2>
                                       <p><?php echo wp_trim_words(get_the_content(), 35); ?></p>
                                       </span>
                                </a>
                                <div class="posts desktop_hide">
                                    <div class="post">
                                        <?php if (has_post_thumbnail()) { ?>
                                            <a class="thumb" href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('news'); ?>
                                            </a>
                                        <?php } ?>
                                        <div class="text">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                            <a class="read" href="<?php the_permalink(); ?>"><img class="img_svg" src="<?= theme() ?>/images/arrow.svg" alt="arrow"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_query(); ?>
                    <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $sticky = get_option('sticky_posts');
                    $news = new WP_Query(array(
                        'posts_per_page' => 2,
                        'ignore_sticky_posts' => 1,
                        'post__not_in' => $sticky,
                        'paged' => $paged
                    ));
                    if ($news->have_posts()) : ?>
                        <div class="posts">
                            <?php while ($news->have_posts()) : $news->the_post();
                                $bgTop = wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>
                                <?php if ($bgTop) { ?>
                                    <div class="post">
                                        <?php if (has_post_thumbnail()) { ?>
                                            <a class="thumb" href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('news'); ?>
                                            </a>
                                        <?php } ?>
                                        <div class="text">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                            <a class="read" href="<?php the_permalink(); ?>"><img class="img_svg" src="<?= theme() ?>/images/arrow.svg" alt="arrow"> Read More</a>
                                        </div>
                                    </div>

                                <?php } ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif;
                    wp_reset_query(); ?>
                    <?php if($shortInfo = get_field('short_description_n', BLOG_ID)) { ?>
                       <div class="newsDescription">
                           <?= $shortInfo ?>
                       </div>
                    <?php } ?>
                </article>
                <aside>
                    <?php get_template_part('sidebar', ''); ?>
                </aside>
            </div>
        </div>
    </section>
<?php get_footer(); ?>