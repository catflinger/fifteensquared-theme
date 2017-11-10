<div id="rightside">



<ul>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Main Sidebar') ) : else : ?>



<li><?php get_search_form(); ?></li>



<li id="categories"><h2><?php _e('Categories','wp-andreas225'); ?></h2>

<ul>

<?php wp_list_categories(array(
    'sort_column' => 'name',
    'show_count' => 0,
    'hierarchical' => 1)); ?>

</ul>

</li>



<li id="archives"><h2><?php _e('Archives','wp-andreas225'); ?></h2>

<ul>

<?php wp_get_archives('type=monthly'); ?>

</ul>

</li>



<li><h2><?php _e('Subscribe','wp-andreas225'); ?></h2>

<ul>

<li class="feed"><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','wp-andreas225'); ?></a></li>

<li class="feed"><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','wp-andreas225'); ?></a></li>

</ul>

</li>



<li><h2><?php _e('Meta','wp-andreas225'); ?></h2>

<ul>

<?php wp_register(); ?>

<li><?php wp_loginout(); ?></li>

<?php wp_meta(); ?>

</ul>

</li>



<?php endif; ?>

</ul>

	

</div>