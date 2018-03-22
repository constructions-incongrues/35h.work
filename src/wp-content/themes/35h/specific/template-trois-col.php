<?php
/* Template Name: Template 3 colonnes */
?>


<?php get_header(); ?>
<?php wp_reset_postdata(); ?>

<section class="page">

    <nav>
        <h1><?php the_title(); ?></h1>
        <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="transparent" stroke="#000"><path d="M0,0L40,40M40,0L0,40"/></svg></a>
    </nav>

    <article class="page-content">
        <?php the_content(); ?>
    </article>

</section>

<?php get_footer(); ?>