<?php get_header(); /* Template Name: Support Files*/ ?>
<?php get_template_part('parts/top', ''); ?>
<?php get_template_part('parts/pages', ''); ?>


<?php if ($files_supp = get_field('files_supp')) { ?>
    <div class="filesItems">
        <div class="container flex">
            <div class="contentFiles">
                <div class="wrapFiles">
                    <?php foreach ($files_supp as $files) { ?>
                        <div class="groupElements">
                            <?php if ($description_supp = $files['description_supp']) { ?>
                                <div class="descriptionFiles simpleText">
                                    <?= $description_supp ?>
                                </div>
                            <?php } ?>
                            <?php if ($group = $files['group_files']) { ?>
                                <div class="elements">
                                    <?php foreach ($group as $item) { ?>
                                        <?php $file = $item['file']; ?>
                                        <a class="element" href="<?= $file['url']; ?>" target="_blank">
                                            <figure class="alc">
                                                <img class="img_svg" src="<?= theme() ?>/images/pdf.svg" alt="pdf">
                                            </figure>
                                            <span><?php echo $file['title']; ?></span>
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="titleFiles mob-mod">
                <div class="titleItems">
                    <?php foreach ($files_supp as $files) { ?>
                        <div class="title">
                            <?php echo $files['title']; ?><span><img class="img_svg"
                                                                     src="<?= theme() ?>/images/arrow-mini.svg"
                                                                     alt="arrow"></span>
                            <div class="mobile-content-files">
                                <?php if ($description_supp = $files['description_supp']) { ?>
                                    <div class="descriptionFiles simpleText">
                                        <?= $description_supp ?>
                                    </div>
                                <?php } ?>
                                <?php if ($group = $files['group_files']) { ?>
                                    <div class="elements">
                                        <?php foreach ($group as $item) { ?>
                                            <?php $file = $item['file']; ?>
                                            <a class="element" href="<?= $file['url']; ?>" target="_blank">
                                                <figure class="alc">
                                                    <img class="img_svg" src="<?= theme() ?>/images/pdf.svg" alt="pdf">
                                                </figure>
                                                <span><?php echo $file['title']; ?></span>
                                            </a>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
<?php } ?>

<?php get_template_part('parts/bottom-slider', ''); ?>
<?php get_footer(); ?>