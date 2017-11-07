<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php get_template_part('right-sidebar'); ?>


'wp-andreas09'
	<div id="content">

	<?php if (have_posts()) : ?>'wp-andreas09'
'wp-andreas09'


		<h1 class="pagetitle"><?php _e('Search Results','wp-andreas09'); ?></h1>

		

		<div class="navigation">'wp-andreas09'
'wp-andreas09''wp-andreas09'
			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','wp-andreas09')) ?></div>
'wp-andreas09'
			<div class="alignright"><?php previous_pos'wp-andreas09''Next Entries &raquo;','wp-andreas09')) ?></div>'wp-andreas09''wp-andreas09''wp-andreas09''wp-andreas09'

		</div>



'wp-andreas09'
'wp-andreas09'
		<?php while (have_posts()) : the_post(); ?>

				

			<div class="post">'wp-andreas09'
'wp-andreas09'
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" tit'wp-andreas09'e('Permanent Link to','wp-andreas09'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h3>
'wp-andreas09'
				<p class="date"><?php _e('Posted on','wp-andreas09'); ?> <?php the_time(__('l, F jS, Y','wp-andreas09')) ?></small></p>

		<?php the_excerpt(''); ?>

		<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php _e('Read the rest of this post...','wp-andreas09'); ?></a></p>

				<p class="category"><?php _e('Posted in','wp-andreas09'); ?> <?php the_category(', ') ?> | <?php edit_post_link(__('Edit','wp-andreas09'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;','wp-andreas09'), __('1 Comment &#187;','wp-andreas09'), __('% Comments &#187;','wp-andreas09')); ?></p>

			</div>

	

		<?php endwhile; ?>



		<div class="bottomnavigation">

			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','wp-andreas09')) ?></div>

			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;','wp-andreas09')) ?></div>

		</div>

	

	<?php else : ?>

	<div id="page">

		<h1 class="center"><?php _e('Search Results','wp-andreas09'); ?></h1>

		<h2 class="center"><?php _e('Not Found','wp-andreas09'); ?></h2>

		<p class="center"><?php _e('Sorry, but you are looking for something that isn\'t here.','wp-andreas09'); ?></p>

		<p class="center"><?php _e('Perhaps you would like to try another search or select from one of the links on the menu.','wp-andreas09'); ?></p>

	</div>

	<?php endif; ?>



	</div>



<?php get_footer(); ?>