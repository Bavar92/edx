<?php get_header();

if ($top_slider = get_field('top_slider')) { ?>
    <div class="swiper-container homeSlider">
        <div class="swiper-wrapper">
            <?php foreach ($top_slider as $slide) {
                $image = $slide['image'] ?>
                <div class="topBlock swiper-slide cover alc"
                     style="background: url('<?php echo $image['sizes']['free']; ?>')">
                    <div class="container">
                        <?= $slide['text'] ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } else if ($background_t = get_field('background_t')) { ?>
    <div class="topBlock topHome parallax-window cover alc" data-parallax="scroll" data-image-src="<?= $background_t['sizes']['free'] ?>">
        <div class="container">
            <?php if ($top_description = get_field('top_description')) { ?>
                <div class="info">
                    <?= $top_description; ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } else { ?>
    <div class="pageTitle alend">
        <div class="container">
            <?php if ($top_description = get_field('top_description')) { ?>
                <div class="info">
                    <?= $top_description; ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>

    <div class="firstSection" >
        <?php if ($info_home = get_field('info_home')) {
            //$bg = get_field('background_fs'); ?>
            <div class="infoHome" <?php if ($bg = get_field('background_fs')) { echo 'style="background-image: url('.$bg['sizes']['free'].');"'; } ?> >
                <div class="container">
                    <div class="text">
<!--                        <img src="--><?//= $bg['sizes']['free'] ?><!--" alt="" class="desktopShop">-->
                        <?= $info_home ?>
                        <?php if ($url_in = get_field('url_in')) { ?>
                            <a href="<?= $url_in ?>" class="more"><img class="img_svg"
                                                                       src="<?= theme() ?>/images/arrow.svg"
                                                                       alt="arrow"> Learn More</a>
                        <?php } ?>
                    </div>
<!--                    <figure class="imgInfo mobile_hide">-->
<!--                        <img src="--><?//= $bg['sizes']['free'] ?><!--" alt="--><?//= $bg['alt'] ?><!--">-->
<!--                    </figure>-->

                </div>
            </div>
        <?php } ?>
        <?php if ($services = get_field('services')) { ?>
            <div class="servicesHome">
                <div class="container">
                    <div class="items">
                        <?php foreach ($services as $service) { ?>
                            <div class="service">
                                <h3><?= $service['title']; ?></h3>
                                <?php $image = $service['image']; ?>
                                <figure>
                                    <img src="<?= $image['sizes']['service'] ?>" alt="<?= $image['alt'] ?>">
                                </figure>
                                <div class="text">
                                    <?= $service['text']; ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php if ($url_in = get_field('url_serv')) { ?>
                        <div class="tar"><a href="<?= $url_in ?>" class="more"><img class="img_svg"
                                                                                    src="<?= theme() ?>/images/arrow.svg"
                                                                                    alt="arrow"> Learn More</a></div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
<?php if ($options_ss = get_field('options_ss')) { ?>
    <div class="optionsSection">
        <?php if ($title_ss = get_field('title_ss')) { ?>
            <div class="titleOptions parallax-window" data-parallax="scroll" data-image-src="<?php $bg = get_field('background_ss'); echo $bg['sizes']['free'] ?>">
                <div class="container">
                    <h2><?= $title_ss ?></h2>
                </div>
            </div>
        <?php } ?>
        <div class="container">
            <div class="options alc mobile_hide">
                <?php foreach ($options_ss as $option) { ?>
                    <div class="option">
                        <?php $icon = $option['icon']; ?>
                        <div class="title alc">
                            <img class="img_svg" src="<?= $icon['sizes']['free'] ?>" alt="<?= $icon['alt'] ?>">
                            <h4><?php echo $option['title']; ?></h4>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="infoOptions mobile_hide">
                <?php foreach ($options_ss as $option) { ?>
                    <div class="contentBox flex">
                        <?php $icon = $option['icon_big']; ?>
                        <div class="image">
                            <img class="img_svg" src="<?= $icon['sizes']['free'] ?>" alt="<?= $icon['alt'] ?>">
                        </div>
                        <div class="text">
                            <h2><?php echo $option['title']; ?></h2>
                            <p><?php echo $option['text']; ?></p>
                            <?php if ($option['url']) { ?>
                                <a href="<?= $option['url'] ?>" class="more"><img class="img_svg"
                                                                                  src="<?= theme() ?>/images/arrow.svg"
                                                                                  alt="arrow"> Learn More</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="optionsWrapper">
                <?php foreach ($options_ss as $option) { ?>
                    <div class="mobileOptions desktop_hide">
                        <div class="option">
                            <?php $icon = $option['icon']; ?>
                            <div class="title alc">
                                <img class="img_svg" src="<?= $icon['sizes']['free'] ?>" alt="<?= $icon['alt'] ?>">
                                <h4><?php echo $option['title']; ?></h4>
                            </div>
                        </div>
                        <div class="contentBox">
                            <div class="text">
                                <h2><?php echo $option['title']; ?></h2>
                                <p><?php echo $option['text']; ?></p>
                                <?php if ($option['url']) { ?>
                                    <a href="<?= $option['url'] ?>" class="more"><img class="img_svg"
                                                                                      src="<?= theme() ?>/images/arrow.svg"
                                                                                      alt="arrow"> Learn More</a>
                                <?php } ?>
                                <?php $icon = $option['icon_big']; ?>
                                <div class="image">
                                    <img class="img_svg" src="<?= $icon['sizes']['free'] ?>" alt="<?= $icon['alt'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

    </div>
    <div class="productsSection">
        <div class="container">
            <div class="titleSection">
                <h2>
                    <?php the_field("title_products_section"); ?>
                </h2>
            </div>
            <div class="sliderProducts mobile_hide">
                <div class="swiper-container swiper-products">
                    <div class="swiper-wrapper">
                        <?php $resources = new WP_Query(array(
                            'post_type' => 'products-list',
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'posts_per_page' => 4,
                            'paged' => get_query_var('paged'),
                        ));
                        if ($resources->have_posts()) : ?>
                            <?php while ($resources->have_posts()) : $resources->the_post() ?>
                                <div class="swiper-slide" data-title="<?php the_title(); ?>">
                                    <div class="titlePostProduct">
                                        <h4><?php the_title(); ?></h4>
                                    </div>
                                    <div class="contentProducts flex">
                                        <div class="leftContent">
                                            <?= get_the_content(); ?>
                                            <div class="btnPost">
                                                <a class="more" href="<?php the_permalink(); ?>"><img class="img_svg"
                                                                                                      src="<?= theme() ?>/images/arrow.svg"
                                                                                                      alt="icon"> LEARN MORE</a>
                                            </div>
                                        </div>
                                        <div class="rightContent">
                                            <a class="thumb" href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif;
                        wp_reset_query(); ?>

                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination pagination-products"></div>
                    <div class="swiper-button-next"><img class="img_svg " src="<?= theme() ?>/images/arrow.svg"
                                                         alt="icon"></div>
                    <div class="swiper-button-prev"><img class="img_svg leftARROW" src="<?= theme() ?>/images/arrow.svg"
                                                         alt="icon"></div>
                </div>

            </div>
        </div>
        <div class="sliderProducts mobileStyle desktop_hide">
            <?php $resources = new WP_Query(array(
                'post_type' => 'products-list',
                'post_status' => 'publish',
                'orderby' => 'date',
                'posts_per_page' => 4,
                'paged' => get_query_var('paged'),
            ));
            if ($resources->have_posts()) : ?>
                <?php while ($resources->have_posts()) : $resources->the_post() ?>
                    <div class="itemPro" data-title="<?php the_title(); ?>">
                        <div class="titlePro">
                            <div class="container">
                                <div class="titlePostProduct">
                                    <h4><?php the_title(); ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="contentProducts">
                            <div class="container">
                                <div class="text">
                                    <?= get_the_content(); ?>
                                </div>
                                <div class="btnPost">
                                    <a class="more" href="<?php the_permalink(); ?>"><img class="img_svg"
                                                                                          src="<?= theme() ?>/images/arrow.svg"
                                                                                          alt="icon"> LEARN
                                        MORE</a>
                                </div>
                                <a class="thumb" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>


                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif;
            wp_reset_query(); ?>
        </div>

    </div>
<?php } ?>

<?php get_footer(); ?>