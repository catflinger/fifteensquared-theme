<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php get_template_part('right-sidebar'); ?>



<div id="content">

	<?php if (have_posts()) : ?>

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

		<?php /* If this is a category archive */ if (is_category()) { ?>				

			<h1 class="pagetitle"><?php _e('Archive for the','wp-andreas09'); ?> '<?php echo single_cat_title(); ?>' <?php _e('Category','wp-andreas09'); ?></h1>

			<p><strong><em><?php echo category_description(); ?></em></strong></p>

 		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>

			<h1 class="pagetitle"><?php _e('Archive for','wp-andreas09'); ?> <?php the_time('F jS, Y'); ?></h1>

		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

			<h1 class="pagetitle"><?php _e('Archive for','wp-andreas09'); ?> <?php the_time('F, Y'); ?></h1>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

			<h1 class="pagetitle"><?php _e('Archive for','wp-andreas09'); ?> <?php the_time('Y'); ?></h1>

		<?php /* If this is a search */ } elseif (is_search()) { ?>

			<h1 class="pagetitle"><?php _e('Search Results','wp-andreas09'); ?></h1>

		<?php /* If this is an author archive */ } elseif (is_author()) { ?>

			<h1 class="pagetitle"><?php _e('Author Archive','wp-andreas09'); ?></h1>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

			<h1 class="pagetitle"><?php _e('Blog Archives','wp-andreas09'); ?></h1>

	<?php } ?>



	<div class="navigation">

		<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','wp-andreas09')) ?></div>

		<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;','wp-andreas09')) ?></div>

	</div>

		

	<?php while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to','wp-andreas09'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>



			<p class="date"><?php _e('Posted by','wp-andreas09') ?> <?php if (get_the_author_meta('url')) { ?><a href="<?php the_author_meta('url'); ?>"><?php the_author(); ?></a><?php } else { the_author(); } ?> <?php _e('on','wp-andreas09') ?> <?php the_time(__('jS F Y','wp-andreas09')) ?></p>

                   

				<div class="entry">

<img src="<?php echo esc_url( home_url() ); ?>http://fifteensquared.net/sandbox/wp-content/images/authors/<?php the_author_meta('ID');?>.jpg" class="auth" alt="<?php the_author(); ?>. " title="<?php the_author(); ?> "/>

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

