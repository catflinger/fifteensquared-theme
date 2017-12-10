<div>

    <h3 id="comments">
        <?php comments_number('No Responses', 'One Response', '% Responses'); ?> 
        to &#8220;<?php the_title(); ?>&#8221;
    </h3>

    <ol class="commentlist">
        <?php wp_list_comments(); ?>
    </ol>
    <?php comment_form(); ?>
    
</div>
