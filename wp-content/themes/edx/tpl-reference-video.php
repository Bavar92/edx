<?php get_header(); /*Template Name: Reference Video */ ?>
<?php get_template_part('parts/top', ''); ?>
<?php get_template_part('parts/pages', ''); ?>


<?php if ($items_video = get_field('items_video')) { ?>
    <div class="itemsVideo mobile_hide">
        <div class="container flex">
            <div class="bigVideo">
                <?php foreach ($items_video as $video) {
                    $videos = $video['video'];
                    $poster = $video['video_poster'];
                    ?>
                    <video controls poster="<?= $poster['sizes']['large'] ?>">
                        <source src="<?= $videos['url']; ?>" type="video/mp4">
                    </video>
                <?php } ?>
            </div>
            <div class="smallVideo">
                <?php foreach ($items_video as $video) {
                    $videos = $video['video'];
                    $poster = $video['video_poster'];
                    ?>
                    <video poster="<?= $poster['sizes']['large'] ?>">
                        <source src="<?= $videos['url']; ?>" type="video/mp4">
                    </video>
                <?php } ?>
            </div>
        </div>
        <?php
        if ('' !== get_post()->post_content) { ?>
            <div class="videoDescription">
                <div class="container flex">
                    <div class="text">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                    <div class="emptyBox">

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="slider-block desktop_hide">
        <div class="container">
            <div class="swiper-container video-mobile-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($items_video as $video) : ?>
                        <div class="swiper-slide">
                            <?php
                            $videos = $video['video'];
                            $poster = $video['video_poster'];
                            ?>
                            <div class="fullframe">
                                <video controls poster="<?= $poster['sizes']['large'] ?>">
                                    <source src="<?= $videos['url']; ?>" type="video/mp4">
                                </video>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper-pagination pagination-click vm-pagination"></div>
            <div class="swiper-button-next vm-right"></div>
            <div class="swiper-button-prev vm-left"></div>

            <?php
            if ('' !== get_post()->post_content) { ?>
                <div class="videoDescription vm-description">
                    <div class="text">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?php } ?>


<?php get_template_part('parts/bottom-slider', ''); ?>

<?php get_footer(); ?>
