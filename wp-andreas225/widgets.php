<?php

    class Widget_Andreas225_Search extends WP_Widget {
    
        public function __construct() {
            parent::__construct( 'widget_andreas225_search', 'Andreas Search', array('description' => 'Search') );
        }
    
        public function widget( $args, $instance ) {
            ?>
                <li><?php get_search_form(); ?></li>
            <?php
        }
    }

    class Widget_Andreas225_Subscribe extends WP_Widget {
        
        public function __construct() {
            parent::__construct( 'widget_andreas225_subscribe', 'RSS Subscribe', array('description' => 'RSS Subscribe') );
        }
    
        public function widget( $args, $instance ) {
            ?>
            <li><h2><?php _e('Subscribe','wp-andreas225'); ?></h2>
                <ul>
                    <li class="feed"><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','wp-andreas225'); ?></a></li>
                    <li class="feed"><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','wp-andreas225'); ?></a></li>
                </ul>
            </li>
            <?php
        }
    }
    
    class Widget_Andreas225_Meta extends WP_Widget {
        
        public function __construct() {
            parent::__construct( 'widget_andreas225_meta', 'Meta', array('description' => 'Login and Admin links') );
        }
    
        public function widget( $args, $instance ) {
            ?>
            <li><h2><?php _e('Meta','wp-andreas225'); ?></h2>
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </li>
            <?php
        }
    }

    class Widget_Andreas225_Recent_Posts extends WP_Widget {
        
        public function __construct() {
            parent::__construct( 'widget_andreas225_recent_posts', 'Recent Posts', array('description' => 'display a list of recent posts') );
        }
    
        public function widget( $args, $instance ) {
            ?>
            <li id="recent-posts"><h2><?php _e('Recent Posts','wp-andreas225'); ?></h2>
                <ul>
                    <?php wp_get_archives('type=postbypost&limit=25'); ?>
                </ul>
            </li>
            <?php
        }
    }

?>