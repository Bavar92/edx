<?php get_header(); /* Template Name: Industry*/ ?>
<?php get_template_part('parts/top', ''); ?>


    <div class="filesItems">
        <div class="container flex">
            <div class="contentFiles always-show">
                <div class="wrapFiles">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                    <?php if ($brochure = get_field('brochure')) { ?>
                        <p></p>
                        <div class="text-center">
                            <a href="<?= $brochure ?>" class="button transparent" target="_blank">Download brochure</a>
                        </div>
                    <?php } ?>
                </div>
            </div>


            <?php
            $posts = get_field('products_list');
            if ($posts) : ?>
                <div class="titleFiles">
                    <div class="titleItems">
                        <h4>Recommended Products</h4>
                        <div class="products">
                            <?php foreach ($posts as $post) : ?>
                                <?php setup_postdata($post); ?>
                                <a class="post" href="<?php the_permalink(); ?>">
                                    <?php the_title() ?><span><img class="img_svg"
                                                                   src="<?= theme() ?>/images/arrow-mini.svg"
                                                                   alt="arrow"></span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            <?php endif; ?>


        </div>
    </div>

<?php $pro = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'tpl-industry.php',
    'post_status' => 'publish',
    'orderby' => 'date',
    'posts_per_page' => 5,
    'paged' => get_query_var('paged'),
));
if ($pro->have_posts()) : ?>
    <div class="slider-block">
        <div class="container">
            <h2>OTHER industries</h2>
            <div class="swiper-container bottomSlider customStyle">
                <div class="swiper-wrapper">
                    <?php while ($pro->have_posts()) : $pro->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="slide">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btnSection">
                                <img class="img_svg" src="<?= theme() ?>/images/arrow.svg" alt="arrow"> Learn More
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="swiper-pagination pagination-custom pagination-click"></div>
            <div class="swiper-button-next b-right"></div>
            <div class="swiper-button-prev b-left"></div>
        </div>
    </div>
<?php endif;
wp_reset_query(); ?>


<?php //$post = new WP_Query(array(
//    'post_type' => 'products-list',
//    //'meta_key' => '_wp_page_template',
//   // 'meta_value' => 'tpl-industry.php',
//    'post_status' => 'publish',
//    'orderby' => 'date',
//    'posts_per_page' => 5,
//    'paged' => get_query_var('paged'),
//));
//if ($post->have_posts()) : ?>
    <!--    <div class="slider-block">-->
    <!--        <div class="container">-->
    <!--            --><?php //if ($sliderTitle = get_field('title_slider')) { ?>
    <!--                <h2>Other industries</h2>-->
    <!--            --><?php //} ?>
    <!--            <div class="swiper-container bottomSlider">-->
    <!--                <div class="swiper-wrapper">-->
    <!--                    --><?php //while ($post->have_posts()) : $post->the_post(); ?>
    <!--                        <div class="swiper-slide">-->
    <!--                            <div class="slide">-->
    <!--                                <h4>--><?php //the_title(); ?><!--</h4>-->
    <!--                            </div>-->
    <!--                            <a href="--><?php //the_permalink(); ?><!--" class="btnSection">-->
    <!--                                <img class="img_svg" src="--><? //= theme() ?><!--/images/arrow.svg" alt="arrow"> Learn More-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                    --><?php //endwhile; ?>
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="swiper-pagination pagination-custom pagination-click"></div>-->
    <!--            <div class="swiper-button-next b-right"></div>-->
    <!--            <div class="swiper-button-prev b-left"></div>-->
    <!--        </div>-->
    <!--    </div>-->
<?php //endif;
//wp_reset_query(); ?>


<?php get_footer(); ?>