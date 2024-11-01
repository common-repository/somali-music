<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       masuul.com
 * @since      1.0.0
 *
 * @package    Somali_Music
 * @subpackage Somali_Music/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Somali_Music
 * @subpackage Somali_Music/admin
 * @author     Mohamed Maalmo <arakti@hotmail.com^^>
 */
class Somali_Music_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Somali_Music_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Somali_Music_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/somali-music-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Somali_Music_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Somali_Music_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/somali-music-admin.js', array( 'jquery' ), $this->version, false );

	}

}


add_action( 'admin_menu', 'som_add_admin_menu' );
add_action( 'admin_init', 'som_settings_init' );


function som_add_admin_menu(  ) { 

	add_menu_page( 'Somali music', 'Somali music', 'manage_options', 'somali music', 'som_options_page' );

}


function som_settings_init(  ) { 

	register_setting( 'pluginPage', 'som_settings' );

	add_settings_section(
		'som_pluginPage_section', 
		__( 'Settingg for your songs ', 'setting somali' ), 
		'som_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'som_select_field_0', 
		__( 'Choohse the songs archive you may like', 'setting somali' ), 
		'som_select_field_0_render', 
		'pluginPage', 
		'som_pluginPage_section' 
	);


}


function som_select_field_0_render(  ) { 

	$options = get_option( 'som_settings' );
	?>
	<select name='som_settings[som_select_field_0]'>
		<option value='kuwacusub' <?php selected( $options['som_select_field_0'], 1 ); ?>>kuwa cusub</option>
		<option value='casri' <?php selected( $options['som_select_field_0'], 2 ); ?>>casri</option>
		<option value='qaraami' <?php selected( $options['som_select_field_0'], 3 ); ?>>qaraami</option>
		<option value='kuwadhaxe' <?php selected( $options['som_select_field_0'], 4 ); ?>>kuwa dhaxe</option>
        <option value='wadani' <?php selected( $options['som_select_field_0'], 5 ); ?>>wadani</option>

	</select>

<?php

}


function som_settings_section_callback(  ) { 

	echo __( 'you can easy select 100 songs you may like', 'setting somali' );

}


function som_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>Somali music</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>