<?php

/**
 * Adds Search widget.
 */
class SearchWidget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
        'search_widget', // Base ID
        'Mademoiselle Search Widget', // Name
        array('description' => __('A widget that displays a search box.', 'mademoiselle')) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        ?>

        <div class="search-box mb-5">
            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="form-group">
                    <input type="text" class="form-control" id="search-input" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
                </div>
                <button type="submit">
                    <span class="fa fa-search"></span>
                </button>
            </form>
        </div>

        <?php
        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from the database.
     */
    public function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from the database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

// Registrujte widget za pretragu
function register_search_widget() {
    register_widget('SearchWidget');
}

add_action('widgets_init', 'register_search_widget');
?>

        <?php

/**
 * Adds Sidebar News widget.
 */
class Sidebar_News_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'sidebar_news_widget', // Base ID
            'Sidebar News Widget', // Name
            array('description' => __('A widget that displays news articles in the sidebar.', 'mademoiselle'))
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from the database.
     */
    public function widget($args, $instance) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        ?>
        <div class='sidebar-news'>
            <?php
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );
            $news_query = new WP_Query($query_args);

            if ($news_query->have_posts()) {
                while ($news_query->have_posts()) {
                    $news_query->the_post();
                    ?>

                    <article class="content-section">
                        <a href="<?php the_permalink(); ?>" class="content-image mb-5 d-block">
                            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt=""/>
                        </a>
                        <div class="trend-info">
                            <p class="trend-date"><?php the_date('m/d/Y'); ?></p>
                            <h2 class="trend-title text-center">
                                <a href="<?php the_permalink(); ?>" class="d-block"> 
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                        </div>
                    </article>

                    <?php
                }
            }
            wp_reset_postdata();
            ?>   
        </div>
        <?php
        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from the database.
     */
    public function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from the database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

function register_sidebar_news_widget() {
    register_widget('Sidebar_News_Widget');
}

add_action('widgets_init', 'register_sidebar_news_widget');
?>


