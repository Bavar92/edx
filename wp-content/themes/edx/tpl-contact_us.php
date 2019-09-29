<?php get_header(); /* Template Name: Contact Us*/ ?>
<?php
if ($background_t = get_field('background_t')) { ?>
    <div class="topBlock cover alc" style="background-image: url(<?= $background_t['sizes']['free'] ?>)">
        <div class="container">
            <?php if ($top_description = get_field('top_description')) { ?>
                    <h1><?php the_title(); ?></h1>
                    <?= $top_description; ?>
            <?php } ?>
        </div>
    </div>
<?php } else { ?>
    <div class="pageTitle alend">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
<?php } ?>
<?php get_template_part('parts/pages', ''); ?>
<?php
if ('' !== get_post()->post_content) { ?>
    <div class="contactForm">
        <div class="container row_728">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
<?php } ?>

<?php if ($distributor_list = get_field('distributor_list')) { ?>
    <div class="distributorList">
        <div class="container">
            <h3>Distributor list</h3>
            <div class="items">
                <?php foreach ($distributor_list as $it) { ?>
                    <div class="item">
                        <?php echo $it['item']; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>


<?php get_footer(); ?>