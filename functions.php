<?php
/**
 * MyFirstTheme's functions and definitions
 *
 * @package MyFirstTheme
 * @since MyFirstTheme 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if (!isset($content_width)) {
	$content_width = 800; /* pixels */
}


if (!function_exists('buonviaggio_setup')):

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function buonviaggio_setup()
	{

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain('buonviaggio', get_template_directory() . '/languages');

		wp_enqueue_style('theme-style', get_stylesheet_uri());

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		//	add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		//add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		/*register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
		'secondary' => __( 'Secondary Menu', 'myfirsttheme' ),
		) );*/

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		//	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}

	//This code prevents wordpress adding random paragraphs.
	remove_filter('the_content', 'wpautop');
	remove_filter('the_excerpt', 'wpautop');




endif; // myfirsttheme_setup
add_action('after_setup_theme', 'buonviaggio_setup'); /* after_setup_theme is called when each page is loaded 
  after theme is initialised, it is a wp function */

function buonviaggioWidgetsAreas()
{ //Here is how to register a widget area. 
	register_sidebar(
		array(
			'before_widget' => '<div id="%1$s" class="widget %2$s footer-column-one">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
			'id' => 'footer_widget_column_one',
			'name' => 'Footer column one',
			'description' => esc_html__('New footer widget area made for Buonviaggio website footer', 'Buonviaggio')
		)
	);
	register_sidebar(
		array(
			'name' => 'Footer column Two',
			'id' => 'footer_widget_column_two',
			'description' => 'This widget area discription',
			'before_widget' => '<div id="%1$s" class="widget %2$s footer-column-two">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name' => 'Footer column Three',
			'id' => 'footer_widget_column_three',
			'description' => 'This widget area discription',
			'before_widget' => '<div id="%1$s" class="widget %2$s footer-column-three">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name' => 'Footer column Four',
			'id' => 'footer_widget_column_four',
			'description' => 'This widget area discription',
			'before_widget' => '<div id="%1$s" class="widget %2$s footer-column-four">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);
}

add_action('widgets_init', 'buonviaggioWidgetsAreas'); //widgets_init is a wp function


// Creating a new widget
class wpb_widget extends WP_Widget
{

	function __construct()
	{
		parent::__construct(

			// Base ID of your widget
			'wpb_widget',

			// Widget name will appear in UI
			__('WPBeginner Widget', 'wpb_widget_domain'),

			// Widget description
			array(
				'description' => __('Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain'),
			)
		);
	}

	// Creating widget front-end

	public function widget($args, $instance)
	{
		$title = apply_filters('widget_title', $instance['title']);

		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if (!empty($title))
			echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		echo __('Testing testing', 'wpb_widget_domain');
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form($instance)
	{
		if (isset($instance['title'])) {
			$title = $instance['title'];
		} else {
			$title = __('New title', 'wpb_widget_domain');
		}
		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<?php
	}

	// Updating widget replacing old instances with new
	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		return $instance;
	}

// Class wpb_widget ends here
}

// Register and load the widget
function wpb_load_widget()
{
	register_widget('wpb_widget');
}
add_action('widgets_init', 'wpb_load_widget');