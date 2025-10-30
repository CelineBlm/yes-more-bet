<?php
/**
 * The main template file
 *
 * @package YesMoreBet
 */

get_header();
?>

<div class="container py-20">
    <h1>Blog</h1>

    <?php if (have_posts()) : ?>
        <div class="posts-grid">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="post-content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post-meta">
                            <span><?php echo get_the_date(); ?></span>
                        </div>
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <?php the_posts_navigation(); ?>

    <?php else : ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
</div>

<?php
get_footer();
