<?php get_header(); /* Template Name: Management*/ ?>
<?php get_template_part('parts/top', ''); ?>
<?php get_template_part('parts/pages', ''); ?>
<?php if ($team = get_field('team')) { ?>
    <div class="teamSection">
        <div class="container row_912">
            <div class="team">
                <?php foreach ($team as $person) { ?>
                    <div class="personTitle">
                        <?php $photo = $person['photo'];
                        if ($photo) { ?>
                            <figure>
                                <img src="<?= $photo['sizes']['person'] ?>" alt="<?= $photo['alt'] ?>">
                                <div class="name">
                                    <h4><?php echo $person['name']; ?></h4>
                                    <h5><?php echo $person['position']; ?></h5>
                                </div>
                            </figure>
                            <div class="infoWrap hide">
                                <?php echo $person['description']; ?>
                                <div class="contact">
                                    <?php if ($person['mail']) { ?>
                                        <a href="<?= $person['mail']; ?>" class="far fa-envelope"></a>
                                    <?php } ?>
                                    <?php if ($person['linkedin']) { ?>
                                        <a href="<?= $person['linkedin']; ?>" class="fab fa-linkedin-in"></a>
                                    <?php } ?>
                                </div>
                            </div>
                       <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="personInfo hideMobile">
                <?php foreach ($team as $person) { ?>
                    <div class="infoWrap">
                        <?php echo $person['description']; ?>
                        <div class="contact">
                            <?php if ($person['mail']) { ?>
                                <a href="<?= $person['mail']; ?>" class="far fa-envelope"></a>
                            <?php } ?>
                            <?php if ($person['linkedin']) { ?>
                                <a href="<?= $person['linkedin']; ?>" class="fab fa-linkedin-in"></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>