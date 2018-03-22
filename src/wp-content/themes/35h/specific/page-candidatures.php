<?php
/* Template Name: Candidatures */
?>

<?php get_header(); ?>

<section class="page">

    <nav>
        <h1><?php the_title(); ?></h1>
        <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="transparent" stroke="#000"><path d="M0,0L40,40M40,0L0,40"/></svg></a>
    </nav>

    <div class="articles">

        <?php wp_reset_postdata(); ?>
        <?php query_posts(array('post_type' => 'candidature', 'showposts'=> 3)); ?>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                    <article>
                        <h2><?php the_title(); ?></h2>
                        <span class="resume"><?php the_excerpt(); ?></span>
                        <span class="texte"><?php the_content(); ?></span>
                    </article>

            <?php endwhile;?>
        <?php endif;?>

    </div>

</section>

<?php get_footer(); ?>