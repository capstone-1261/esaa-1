<?php
get_header(); 
?>

<div id="content" class="site-content">
    <main id="primary" class="site-main">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p></p>
        <?php endif; ?>
    </main>
</div>

<?php 
get_footer(); 
