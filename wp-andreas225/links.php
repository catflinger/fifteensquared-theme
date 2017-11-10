<?php



/*



Template Name: Links List



*/



?>



<?php get_header(); ?>

<?php get_sidebar();?>

<?php get_template_part('right-sidebar'); ?>



<div id="content">



<div id="page" class="linkspage">

<h1><?php the_title(); ?></h1>



<ul>



<?php wp_list_bookmarks(); ?>



</ul>

</div>

	<?php edit_post_link(__('Edit this entry.','wp-andreas225'), '<p>', '</p>'); ?>





</div>	







<?php get_footer(); ?>



