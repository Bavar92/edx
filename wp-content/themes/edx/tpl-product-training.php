<?php get_header(); /*Template Name: Product Training */ ?>
<?php get_template_part('parts/top', ''); ?>
<?php get_template_part('parts/pages', ''); ?>
<?php if($events_items = get_field('events_items')) { ?>
    <div class="eventsWrapper">
        <div class="container">
            <?php foreach($events_items as $events_item) { ?>
                <div class="eventsItem">
                    <div class="description">
                        <?= $events_item['descriptions_event']; ?>
                    </div>
                    <?php if($events = $events_item['events']) { ?>
                        <div class="events">
                            <?php foreach($events as $event) { ?>
                                <div class="event flex productItem">
                                    <a href="<?= $event['event_link'] ?>" class="arrow">
                                        <img class="img_svg"
                                             src="<?= theme() ?>/images/arrow-mini.svg"
                                             alt="arrow">
                                    </a>
                                    <figure>
                                        <img class="img_svg" src="<?= theme() ?>/images/Page-1.svg" alt="icon">
                                    </figure>
                                    <div class="info">
                                        <h4><a href="<?= $event['event_link'] ?>" target="_blank"><?= $event['name'] ?></a></h4>
                                        <div class="alc phoneDate">
<!--                                            <span></span>-->
                                            <span><?= $event['phone'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if($bottom_description_e = $events_item['bottom_description_e']) { ?>
                        <div class="bottomDescription">
                            <?= $bottom_description_e ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>
<?php } ?>
<?php get_template_part('parts/bottom-slider', ''); ?>


<?php get_footer(); ?>