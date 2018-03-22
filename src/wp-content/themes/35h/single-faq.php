<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php
            global $post;

            $slug = 'faq-rectangle';
            $category = get_the_category($post->ID)[0];
            if($category && $category->slug) {
                $slug = $category->slug;
            }

            $question = get_post_meta($post->ID, 'question', true);
            $reponse  = get_post_meta($post->ID, 'reponse', true);
        ?>

        <section class="page <?php print $slug ?>">

            <nav>
                <h1><?php the_title(); ?></h1>
                <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="transparent" stroke="#000"><path d="M0,0L40,40M40,0L0,40"/></svg></a>
            </nav>

            <p class="question"><?php print $question ?></p>
            <p class="reponse"><?php print $reponse ?></p>

        </section>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>