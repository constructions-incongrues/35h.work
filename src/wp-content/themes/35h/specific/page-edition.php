<?php
/* Template Name: Édition */
?>

<?php get_header(); ?>


<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<section class="page">

			<nav>
				<h1><?php the_title(); ?></h1>
				<a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="transparent" stroke="#000"><path d="M0,0L40,40M40,0L0,40"/></svg></a>
			</nav>

			<div class="page-content">
				<?php the_content(); ?>
			</div>

		</section>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>