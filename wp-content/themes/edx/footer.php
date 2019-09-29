</div>
<footer>
    <div class="mainFooter">
        <div class="container flex">
            <?php
            $logo = get_field('logo', 'option');
            $location = get_field('location', 'option');
            if ($logo || $location) { ?>
                <div class="leftFooter">
                    <?php if ($logo) { ?>
                        <a href="<?= site_url(); ?>/" class="logoFooter">
                            <img src="<?= $logo['sizes']['medium'] ?>" alt="<?= $logo['alt'] ?>">
                        </a>
                    <?php } ?>
                    <?php if ($location) { ?>
                        <div class="locationFooter">
                            <?= $location ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="footerMenu flex">
                <?php dynamic_sidebar('Footer Area') ?>
            </div>
            <?php if ($contact_info = get_field('contact_info', 'option')) { ?>
                <div class="contactFooter">
                    <?= $contact_info ?>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php
    $copy = get_field('copy_text', 'option');
    $design = get_field('design', 'option');
    if ($copy || $design) { ?>
        <div class="copySection">
            <div class="container alc">
                <?php if ($copy) { ?>
                    <div class="copyText">
                        <?= $copy ?>
                    </div>
                <?php } ?>
                <?php if ($design) { ?>
                    <div class="designText">
                        <?= $design ?> <a href="http://www.loungelizard.com" target="_blank">Lounge Lizard</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>

    <div class="popForm" id="registerForm" style="display: none;">
        <?= do_shortcode('[contact-form-7 id="5" title="Register Form"]') ?>
    </div>





</footer>
<?php wp_footer(); ?>
</body>
</html>
