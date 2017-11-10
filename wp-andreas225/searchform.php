<form method="get" id="searchform" action="<?php esc_url( home_url() ); ?>/">

<div><input id="searchbox" type="text" value="<?php if (isset($s)) { echo esc_html($s, 1); } ?>" name="s" alt="<?php _e('Enter search text','wp-andreas225'); ?>"/>

<input type="submit" id="searchbutton" value="<?php _e('Search','wp-andreas225'); ?>" alt="<?php _e('Submit for search results','wp-andreas225'); ?>"/>

</div>

</form>

