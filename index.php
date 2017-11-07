<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php get_template_part('right-sidebar'); ?>



<div id="content">

	<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>



		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to','wp-andreas09'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

			<p class="date"><?php _e('Posted by','wp-andreas09'); ?> <?php if (get_the_author_meta('url')) { ?><a href="<?php the_author_meta('url'); ?>"><?php the_author(); ?></a><?php } else { the_author(); } ?> <?php _e('on','wp-andreas09'); ?> <?php the_time (__('F jS, Y','wp-andreas09')) ?></p>

			



<div class="entry">

		<img src="<?php echo esc_url(home_url()); ?>/wp-content/images/authors/<?php the_author_meta('ID');?>.jpg" class="auth" alt="<?php the_author(); ?>. " title="<?php the_author(); ?> "/>	

<?php the_content(__('Read the rest of this entry &raquo;','wp-andreas09')); ?>

		

			

			</div>



			<p class="category"><?php _e('Posted in','wp-andreas09'); ?> <?php the_category(', ') ?> | <?php edit_post_link(__('Edit','wp-andreas09'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;','wp-andreas09'), __('1 Comment &#187;','wp-andreas09'), __('% Comments &#187;','wp-andreas09')); ?></p>

		</div>



	<?php endwhile; ?>

		<div class="bottomnavigation">

			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','wp-andreas09')) ?></div>

			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;','wp-andreas09')) ?></div>

		</div>

	

	<?php else : ?>

	<div id="page">

		<h1 class="center"><?php _e('Not Found','wp-andreas09'); ?></h1>

		<p class="center"><?php _e('Sorry, but you are looking for something that isn\'t here.','wp-andreas09'); ?></p>

		<p class="center"><?php _e('Perhaps you would like to try a search or select from one of the links on the menu.','wp-andreas09'); ?></p>

	</div>

	

	<?php endif; ?>

</div>



<?php get_footer(); ?>

