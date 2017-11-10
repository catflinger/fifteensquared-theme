<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php get_template_part('right-sidebar'); ?>



	<div id="content">

				

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	

		<div class="navigation">

			<div class="alignleft">&nbsp;</div>

			<div class="alignright">&nbsp;</div>

		</div>

<?php $attachment_link = wp_get_attachment_link($post->ID, 'full'); ?>

<?php $_post =  get_post($post->ID); 
                $classname = (!empty($_post->iconsize) && $_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link:','wp-andreas09'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

			<div class="entrytext">

				<p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><br /><?php echo basename($post->guid); ?></p>



				<?php the_content('<p class="serif">'.__('Read the rest of this entry &raquo;','wp-andreas09').'</p>'); ?>

	

				<?php wp_link_pages(array(
                    'before' => '<p><strong>'.__('Pages','wp-andreas09').':</strong> ', 
                    'after' => '</p>', 
                    'next_or_number' => 'number')); ?>

	

				<p class="postmetadata alt">

					<small>

						<?php _e('This entry was posted on','wp-andreas09'); ?>

						<?php /* This is commented, because it requires a little adjusting sometimes.

							You'll need to download this plugin, and follow the instructions:

							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */

							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?> 

						<?php the_time(__('l, F jS, Y','wp-andreas09')) ?> <?php _e('at','wp-andreas09'); ?> <?php the_time() ?>

						<?php _e('and is filed under','wp-andreas09'); ?> <?php the_category(', ') ?>.

						<?php _e('You can follow any responses to this entry through the','wp-andreas09'); ?> <?php post_comments_feed_link('RSS 2.0'); ?> <?php _e('feed','wp-andreas09'); ?>. 

						

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {

							// Both Comments and Pings are open ?>

							<?php _e('You can','wp-andreas09'); ?> <a href="#respond"><?php _e('leave a response','wp-andreas09'); ?></a>, <?php _e('or','wp-andreas09'); ?> <a href="<?php trackback_url(true); ?>" rel="trackback"><?php _e('trackback','wp-andreas09'); ?></a> <?php _e('from your own site','wp-andreas09'); ?>.

						

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {

							// Only Pings are Open ?>

							<?php _e('Responses are currently closed, but you can','wp-andreas09'); ?> <a href="<?php trackback_url(true); ?> " rel="trackback"><?php _e('trackback','wp-andreas09'); ?></a> <?php _e('from your own site','wp-andreas09'); ?>.

						

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {

							// Comments are open, Pings are not ?>

							<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed.','wp-andreas09'); ?>

			

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {

							// Neither Comments, nor Pings are open ?>

							<?php _e('Both comments and pings are currently closed.','wp-andreas09'); ?>			

						

						<?php } edit_post_link(__('Edit this entry.','wp-andreas09'),'',''); ?>

					</small>

				</p>

			</div>

		</div>

		

	<?php comments_template(); ?>

	

	<?php endwhile; else: ?>

	

		<p><?php _e('Sorry, no attachments matched your criteria.','wp-andreas09'); ?></p>

	

<?php endif; ?>

	

	</div>



<?php get_footer(); ?>

