<?php
/**
 * Template for displaying all pages
 *
 * @package YesMoreBet
 */

get_header();
?>

<div class="container py-20 pt-32">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php
get_footer();
