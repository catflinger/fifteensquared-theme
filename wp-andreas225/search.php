<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php get_template_part('right-sidebar'); ?>



	<div id="content">

	<?php if (have_posts()) : ?>



		<h1 class="pagetitle"><?php _e('Search Results','wp-andreas225'); ?></h1>

		

		<div class="navigation">

			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','wp-andreas225')) ?></div>

			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;','wp-andreas225')) ?></div>

		</div>



		<?php while (have_posts()) : the_post(); ?>

				

			<div class="post">

				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to','wp-andreas225'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h3>

				<p class="date"><?php _e('Posted on','wp-andreas225'); ?> <?php the_time(__('l, F jS, Y','wp-andreas225')) ?></small></p>

		<?php the_excerpt(''); ?>

		<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php _e('Read the rest of this post...','wp-andreas225'); ?></a></p>

				<p class="category"><?php _e('Posted in','wp-andreas225'); ?> <?php the_category(', ') ?> | <?php edit_post_link(__('Edit','wp-andreas225'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;','wp-andreas225'), __('1 Comment &#187;','wp-andreas225'), __('% Comments &#187;','wp-andreas225')); ?></p>

			</div>

	

		<?php endwhile; ?>



		<div class="bottomnavigation">

			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','wp-andreas225')) ?></div>

			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;','wp-andreas225')) ?></div>

		</div>

	

	<?php else : ?>

	<div id="page">

		<h1 class="center"><?php _e('Search Results','wp-andreas225'); ?></h1>

		<h2 class="center"><?php _e('Not Found','wp-andreas225'); ?></h2>

		<p class="center"><?php _e('Sorry, but you are looking for something that isn\'t here.','wp-andreas225'); ?></p>

		<p class="center"><?php _e('Perhaps you would like to try another search or select from one of the links on the menu.','wp-andreas225'); ?></p>

	</div>

	<?php endif; ?>



	</div>



<?php get_footer(); ?>