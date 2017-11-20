<div id="rightside">
    <ul>

        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Main Sidebar') ) : else : ?>

            <li>The main sidebar</li>

        <?php endif; ?>

    </ul>
</div>