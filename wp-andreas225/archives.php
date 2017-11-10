<?php

/*

Template Name: Archives List

*/

?>



<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php get_template_part('right-sidebar'); ?>



<div id="content">

	<div id="page">

		<div class="archives">

			<h1><?php the_title(); ?></h1>

			<h2 id="months"><?php _e('Archives by Month:','wp-andreas225'); ?></h2>

			<ul>

				<?php wp_get_archives('type=monthly'); ?>

			</ul>

			<h2 id="categories"><?php _e('Archives by Category:','wp-andreas225'); ?></h2>

			<ul>

				<?php wp_list_categories(); ?>

			</ul>

		</div>

	</div>

	<?php edit_post_link(__('Edit this entry.','wp-andreas225'), '<p>', '</p>'); ?>

</div>



<?php get_footer(); ?>



