<?php get_header(); ?>
    <div class="topBlock cover alc" style="background-image: url(<?= theme()?>/images/404.jpg)">
        <div class="container">
            <div class="info">
                <h1 style="text-transform: uppercase; margin-top: 30px;"><strong style="font-size: 166px; font-weight: 500; ">404</strong><br> Page Not Found</h1>
                <p style="color: #8B8E8C; ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam</p>
                <p></p>
                <a href="<?= site_url() ?>/" class="button transparent m-right">Go to Homepage</a>
                <a href="<?= site_url() ?>/contact-us" class="button">Contact Us</a>
            </div>
        </div>
    </div>


<?php get_footer(); ?>