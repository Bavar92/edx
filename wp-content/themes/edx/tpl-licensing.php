<?php get_header(); /* Template Name: Licensing*/ ?>
<?php get_template_part('parts/top', ''); ?>
<?php get_template_part('parts/pages', ''); ?>
<?php if($licensing_l = get_field('licensing_l')) { ?>
   <div class="licensingSection">
       <div class="container">
           <div class="items">
               <?php foreach($licensing_l as $licensing) { ?>
                   <div class="item">
                       <?php echo $licensing['text']; ?>
                       <a href="<?= $licensing['link']; ?>"><img class="img_svg"
                                                                 src="<?= theme() ?>/images/arrow-mini.svg"
                                                                 alt="arrow"> Contact Us To Learn More</a>
                   </div>
               <?php } ?>
           </div>
       </div>
   </div>
<?php } ?>
<?php get_footer(); ?>