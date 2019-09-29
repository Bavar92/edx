<?php get_header(); /* Template Name: Faq*/ ?>
<?php get_template_part('parts/top', ''); ?>
<?php get_template_part('parts/pages', ''); ?>

<?php if ($support_items = get_field('support_items')) { ?>
    <div class="supportSection">
        <div class="container faq">
            <?php foreach ($support_items as $supp) { ?>
                <div class="itemsSupport">
                    <?php if ($items = $supp['text']) { ?>
                        <div class="items">
                            <?php foreach ($items as $item) { ?>
                                <div class="item">
                                    <h4><?= $item['title'] ?><span class="arrow"><span></span></span></h4>

                                    <div class="text"><?= $item['content'] ?></div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>

                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<?php get_template_part('parts/bottom-slider', ''); ?>

<?php get_footer(); ?>

