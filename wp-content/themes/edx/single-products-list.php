<?php get_header();
$bgTop = wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>
<?php if ($bgTop) { ?>
    <div class="topBlock parallax-window cover alc" data-parallax="scroll" data-image-src="<?= $bgTop; ?>">
        <div class="container">
<!--            <div class="info">-->
                <h1><?php the_title(); ?></h1>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            <div class="desktop-center">
                <a class="button transparent" href="<?= site_url() ?>/contact-us/">REQUEST INFORMATION</a>
            </div>

<!--            </div>-->
        </div>
    </div>
<?php } else { ?>
    <div class="pageTitle alend">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
<?php } ?>
<?php if ($features = get_field('features')) { ?>
    <div class="features">
        <div class="container">
            <h2>Features</h2>
            <?= $features ?>
        </div>
    </div>
<?php } ?>
<?php

$right_content = get_field('right_content_s');
$left_content = get_field('left_content_s');


if ($right_content || $left_content) { ?>
    <div class="columnsList simpleText">
        <div class="container flex">
            <div class="leftColumn half">
                <div class="itemsLeft">
                    <?php foreach ($left_content as $left) { ?>
                        <div class="item">
                            <?php $icon = $left['icon']; ?>
                            <div class="titleBox flex">
                                <?php if ($icon) { ?>
                                    <figure>
                                        <img class="img_svg" src="<?= $icon['sizes']['thumbnail'] ?>"
                                             alt="<?= $icon['alt'] ?>">
                                    </figure>
                                <?php } ?>
                                <div class="info <?= $left['two_columns_list'] ?>">
                                    <h3><?php echo $left['title']; ?></h3>
                                    <?php echo $left['text']; ?>
                                </div>
                            </div>
                            <?php if ($images = $left['images']) { ?>
                                <div class="images" style="min-height: <?= $left['height_wrap'] ?>px">
                                    <?php foreach ($images as $image) { ?>
                                        <div class="image <?= $image['position'] ?> <?= $image['priority'] ?>"
                                             style="width: <?= $image['width'] ?>px">
                                            <?php $img = $image['image'] ?>
                                            <img src="<?= $img['sizes']['person'] ?>"
                                                 alt="<?= $img['alt'] ?>">
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <?php if ($brochure = $left['download_brochure']) { ?>
                                <div class="text-center">
                                    <a href="<?= $brochure ?>" class="button transparent" target="_blank">Download
                                        Brochure</a>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="rightColumn half">
                <div class="itemsLeft">
                    <?php foreach ($right_content as $right) { ?>
                        <div class="item">
                            <?php $icon = $right['icon']; ?>
                            <div class="titleBox flex">
                                <?php if ($icon) { ?>
                                    <figure>
                                        <img class="img_svg" src="<?= $icon['sizes']['thumbnail'] ?>"
                                             alt="<?= $icon['alt'] ?>">
                                    </figure>
                                <?php } ?>
                                <div class="info <?= $right['two_columns_list'] ?>">
                                    <h3><?php echo $right['title']; ?></h3>
                                    <?php echo $right['text']; ?>
                                </div>
                            </div>
                            <?php if ($images = $right['images']) { ?>
                                <div class="images" style="min-height: <?= $right['height_wrap'] ?>px">
                                    <?php foreach ($images as $image) { ?>
                                        <div class="image <?= $image['position'] ?> <?= $image['priority'] ?>"
                                             style="width: <?= $image['width'] ?>px">
                                            <?php $img = $image['image'] ?>
                                            <img src="<?= $img['sizes']['person'] ?>"
                                                 alt="<?= $img['alt'] ?>">
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <?php if ($brochure = $right['download_brochure']) { ?>
                                <div class="text-center">
                                    <a href="<?= $brochure ?>" target="_blank" class="button transparent">Download
                                        Brochure</a>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($info_section = get_field('info_section')) { ?>
    <div class="infoSection simpleText">
        <div class="container">
            <?php foreach ($info_section as $info) { ?>
                <div class="item flex">
                    <div class="text"><?= $info['text']; ?> </div>
                    <div class="list"><?= $info['list']; ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<?php
$left_text = get_field('left_text_sc');
$right_text = get_field('right_text_sc');

if ($left_text || $right_text) { ?>
    <div class="contentInfo">
        <div class="container flex">
            <?php if ($left_text) { ?>
                <div class="infoLeft">
                    <?= $left_text ?>
                </div>
            <?php } ?>
            <?php if ($right_text) { ?>
                <div class="infoRight">
                    <?= $right_text ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<?php
$left_image_sc = get_field('left_image_sc');
$right_image_1 = get_field('right_image_1');
$right_image_2 = get_field('right_image_2');

if ($left_image_sc || $right_image_1 || $right_image_2) { ?>
    <div class="imageSection">
        <div class="container flex">
            <?php if ($left_image_sc) { ?>
                <div class="imageLeft half">
                    <img src="<?= $left_image_sc['sizes']['large'] ?>" alt="<?= $left_image_sc['alt'] ?>">
                </div>
            <?php } ?>
            <?php if ($right_image_1 || $right_image_2) { ?>
                <div class="imagesRight half">
                    <img class="topLeft" src="<?= $right_image_1['sizes']['news'] ?>"
                         alt="<?= $right_image_1['alt'] ?>">
                    <img class="bottomRight" src="<?= $right_image_2['sizes']['news'] ?>"
                         alt="<?= $right_image_2['alt'] ?>">
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<?php if ( get_field('download_brochure_cs') ) { ?>
    <div class="contentInfo">
        <div class="container">
            <div class="text-center">
                <a href="<?php the_field('download_brochure_cs'); ?>" target="_blank" class="button transparent">DOWNLOAD BROCHURE</a>
            </div>
        </div>
    </div>
<?php } ?>

<?php $pro = new WP_Query(array(
    'post_type' => 'products-list',
    'post_status' => 'publish',
    'orderby' => 'date',
    'posts_per_page' => 5,
    'paged' => get_query_var('paged'),
));
if ($pro->have_posts()) : ?>
    <div class="slider-block">
        <div class="container">
            <h2>Other Products</h2>
            <div class="swiper-container bottomSlider">
                <div class="swiper-wrapper">
                    <?php while ($pro->have_posts()) : $pro->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="slide">
                                <h4><?php the_title(); ?></h4>
                                <p><?= wp_trim_words(get_the_content(), 11, '...'); ?></p>
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

<?php get_footer(); ?>
