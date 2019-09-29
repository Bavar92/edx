<?php
if (is_home()) {
    $postType = 'post';
} else {
    $post = get_queried_object();
    $postType = get_post_type_object(get_post_type($post));
}

 ?>

<?php $news = new WP_Query(array(
    'post_type' => $postType->name,
    'post_status' => 'publish',
    'orderby' => 'date',
    'posts_per_page' => 5,
    'post__not_in' => array( $post->ID ),
    'paged' => get_query_var('paged'),
));
if ($news->have_posts()) : ?>
    <h3 class="recentTitle">Most recent</h3>
    <div class="relatedPosts">
        <?php while ($news->have_posts()) : $news->the_post(); ?>
            <div class="item">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                <a class="read" href="<?php the_permalink(); ?>"><img class="img_svg" src="<?= theme() ?>/images/arrow.svg" alt="arrow"> Read more</a>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif;

wp_reset_query(); ?>