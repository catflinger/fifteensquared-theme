<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php get_template_part('right-sidebar'); ?>



<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="navigation">

		<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>

		<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>

	</div>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to','wp-andreas225'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>



		<p class="date"><?php _e('Posted by','wp-andreas225'); ?> <?php if (get_the_author_meta('url')) { ?><a href="<?php the_author_meta('url'); ?>"><?php the_author(); ?></a><?php } else { the_author(); } ?> <?php _e('on','wp-andreas225'); ?> <?php the_time (__('F jS, Y','wp-andreas225')) ?></p>



		<div class="entrytext">

<img src="<?php echo esc_url( home_url() ); ?>/wp-content/images/authors/<?php the_author_meta('ID');?>.jpg" class="auth" alt="<?php the_author(); ?>. " title="<?php the_author(); ?> "/>

			<?php the_content(__('Read the rest of this entry &raquo;','wp-andreas225')); ?>

</div>



			<?php wp_link_pages(array(
                'before' => '<p><strong>'.__('Pages:','wp-andreas225').'</strong> ',
                'after' => '</p>', 
                'next_or_number' => 'number')); ?>

			<p class="postmetadata">

				 		<?php _e('This entry was posted on','wp-andreas225'); ?> <?php the_time(__('l, F jS, Y','wp-andreas225')) ?> 

						<?php _e('and is filed under','wp-andreas225'); ?> <?php the_category(', ') ?>.

						<?php _e('You can follow any responses to this entry through the','wp-andreas225'); ?> <?php post_comments_feed_link('RSS 2.0'); ?> <?php _e('feed','wp-andreas225'); ?>. 

						

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {

							// Both Comments and Pings are open ?>

							<?php _e('You can','wp-andreas225'); ?> <a href="#respond"><?php _e('leave a response','wp-andreas225'); ?></a>, <?php _e('or','wp-andreas225'); ?> <a href="<?php trackback_url(true); ?>" rel="trackback"><?php _e('trackback','wp-andreas225'); ?></a> <?php _e('from your own site','wp-andreas225'); ?>.

						

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {

							// Only Pings are Open ?>

							<?php _e('Responses are currently closed, but you can','wp-andreas225'); ?> <a href="<?php trackback_url(true); ?> " rel="trackback"><?php _e('trackback','wp-andreas225'); ?></a> <?php _e('from your own site','wp-andreas225'); ?>.

						

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {

							// Comments are open, Pings are not ?>

							<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed.','wp-andreas225'); ?>

			

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {

							// Neither Comments, nor Pings are open ?>

							<?php _e('Both comments and pings are currently closed.','wp-andreas225'); ?>			

						

						<?php } edit_post_link(__('Edit this entry.','wp-andreas225'),'',''); ?>

			</p>		

		

	</div>

	<?php comments_template(); ?>



<div class="bottomnavigation">

			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>

			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>

		</div>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.','wp-andreas225'); ?></p>

	

	<?php endif; ?>



</div>



<?php get_footer(); ?>

