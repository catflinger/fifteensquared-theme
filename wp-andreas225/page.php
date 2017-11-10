<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php get_template_part('right-sidebar'); ?>



<div id="content">

	<div id="page">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

		

		<div class="entrytext">

			<?php the_content('<p class="serif">'.__('Read the rest of this page &raquo;','wp-andreas225').'</p>'); ?>

		</div>

		

		<?php wp_link_pages(array(
            'before' => '<p><strong>'.__('Pages','wp-andreas225').':</strong> ', 
            'after' => '</p>', 
            'next_or_number' => 'number')); ?>

 		

		<?php endwhile; endif; ?>

	</div>



<?php comments_template(); ?>	

	<?php edit_post_link(__('Edit this entry.','wp-andreas225'), '<p>', '</p>'); ?>



</div>



<?php get_footer(); ?>

