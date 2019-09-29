<?php get_header(); /*Template Name: White Papers */ ?>
<?php get_template_part('parts/top', ''); ?>
<?php get_template_part('parts/pages', ''); ?>

<?php if ($papers_list = get_field('papers_list')) { ?>
    <div class="papersList">
        <div class="container">
            <div class="items">
                <?php foreach ($papers_list as $paper) {
                    $image = $paper['image'];
                    ?>
                    <a href="<?php echo $paper['link']; ?>" class="item alc cover" target="_blank"
                       style="background-image: url(<?= $image['sizes']['paper'] ?>)">
                        <h4><?php echo $paper['title']; ?></h4>
                        <span class="more"><img class="img_svg"
                                                src="<?= theme() ?>/images/arrow.svg"
                                                alt="arrow">Learn More</span>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php get_template_part('parts/bottom-slider', ''); ?>
<?php get_footer(); ?>
