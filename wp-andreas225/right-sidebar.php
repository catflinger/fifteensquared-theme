<!-- Right Sidebar Template -->
<div id="rightside">
    <ul>

    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Right Sidebar') ) : else : ?>

        <li>Right Sidebar</li>

    <?php endif; ?>

    </ul>
</div>