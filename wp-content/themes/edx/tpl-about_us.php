<?php get_header(); /* Template Name: About Us */ ?>
<?php get_template_part('parts/top', ''); ?>
<?php get_template_part('parts/pages', ''); ?>
<?php if ($content_ta = get_field('content_ta')) { ?>
    <div class="simpleText" id="company">
        <div class="container">
            <?= $content_ta ?>
        </div>
    </div>
<?php } ?>
<?php if(get_field('content_lefta') || get_field('content_righta')) { ?>
    <div class="twoContents">
        <div class="container alc">
            <div class="leftContent half">
                <?php the_field('content_lefta') ?>
            </div>
            <div class="rightContent half">
                <?php the_field('content_righta') ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php if ($content_ba = get_field('content_ba')) { ?>
    <div class="simpleText">
        <div class="container">
            <?= $content_ba ?>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>