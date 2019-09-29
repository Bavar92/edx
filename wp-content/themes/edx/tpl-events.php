<?php get_header(); /* Template Name: Events */ ?>
<?php get_template_part('parts/top', ''); ?>

<?php if($events_items = get_field('events_items')) { ?>
   <div class="eventsWrapper">
       <div class="container">
           <?php foreach($events_items as $events_item)  { ?>
              <div class="eventsItem">
                  <div class="description">
                      <?= $events_item['descriptions_event']; ?>
                  </div>
                  <?php if($events = $events_item['events']) { ?>
                     <div class="events">
                         <?php foreach($events as $event)  { ?>
                            <div class="event flex">
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
                                   <div class="alc phoneDate borderB">
                                       <span class="date">
                                           <?= $event['date'] ?>
                                       </span>
                                       <a href="tel:<?= $event['phone'] ?>" class="phone"><?= $event['phone'] ?></a>
                                   </div>
                                   <div class="text">
                                       <?= $event['description'] ?>
                                   </div>
                                    <div class="alc">
                                        <a href="mailto:<?= $event['mail'] ?>" class="mail"><?= $event['mail'] ?></a>
                                        <a class="link" href="<?= $event['event_link'] ?>" target="_blank">Event Link</a>
                                    </div>
                                    <div class="text-center">
                                        <a href="#registerForm" data-id="<?= $event['name'] ?>"  data-fancybox class="button transparent">Registration Form</a>
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



<?php get_footer(); ?>