<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       masuul.com
 * @since      1.0.0
 *
 * @package    Somali_Music
 * @subpackage Somali_Music/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Somali_Music
 * @subpackage Somali_Music/public
 * @author     Mohamed Maalmo <arakti@hotmail.com^^>
 */
class Somali_Music_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/somali-music-public.css', array(), $this->version, 'all' );

	}



	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/somali-music-public.js', array( 'jquery' ), $this->version, false );

	}

}

add_action('wp_footer', 'masuul_heeso_qaraami'); 
function masuul_heeso_qaraami() { 
    echo '<div class="options" style="padding: 40px 20px;">
<p>&nbsp;</p>
</div>

 
<div class="ap" id="ap">
<div class="ap__inner">
<div class="ap__item ap__item--playback">
<button class="ap__controls ap__controls--prev">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#333" width="24" height="24" viewBox="0 0 24 24">
<path d="M9.516 12l8.484-6v12zM6 6h2.016v12h-2.016v-12z"></path>
</svg>
</button>
<button class="ap__controls ap__controls--toggle">
<svg class="icon-play" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#333" width="36" height="36" viewBox="0 0 36 36" data-play="M 12,26 18.5,22 18.5,14 12,10 z M 18.5,22 25,18 25,18 18.5,14 z" data-pause="M 12,26 16.33,26 16.33,10 12,10 z M 20.66,26 25,26 25,10 20.66,10 z">
<path d="M 12,26 18.5,22 18.5,14 12,10 z M 18.5,22 25,18 25,18 18.5,14 z"></path>
</svg>
</button>
<button class="ap__controls ap__controls--next">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#333" width="24" height="24" viewBox="0 0 24 24">
<path d="M15.984 6h2.016v12h-2.016v-12zM6 18v-12l8.484 6z"></path>
</svg>
</button>
</div>
<div class="ap__item ap__item--track">
<div class="track">
<div class="track__title">Queue is empty</div>
<div class="track__time">
<span class="track__time--current">--</span>
<span> / </span>
<span class="track__time--duration">--</span>
</div>
<div class="progress-container">
<div class="progress">
<div class="progress__bar"></div>
<div class="progress__preload"></div>
</div>
</div>
</div>
</div>
<div class="ap__item ap__item--settings">
<div class="ap__controls volume-container">
<button class="volume-btn">
<svg class="icon-volume-on" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#333" width="24" height="24" viewBox="0 0 24 24">
<path d="M14.016 3.234q3.047 0.656 5.016 3.117t1.969 5.648-1.969 5.648-5.016 3.117v-2.063q2.203-0.656 3.586-2.484t1.383-4.219-1.383-4.219-3.586-2.484v-2.063zM16.5 12q0 2.813-2.484 4.031v-8.063q2.484 1.219 2.484 4.031zM3 9h3.984l5.016-5.016v16.031l-5.016-5.016h-3.984v-6z"></path>
</svg>
<svg class="icon-volume-off" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#333" width="24" height="24" viewBox="0 0 24 24">
<path d="M12 3.984v4.219l-2.109-2.109zM4.266 3l16.734 16.734-1.266 1.266-2.063-2.063q-1.734 1.359-3.656 1.828v-2.063q1.172-0.328 2.25-1.172l-4.266-4.266v6.75l-5.016-5.016h-3.984v-6h4.734l-4.734-4.734zM18.984 12q0-2.391-1.383-4.219t-3.586-2.484v-2.063q3.047 0.656 5.016 3.117t1.969 5.648q0 2.25-1.031 4.172l-1.5-1.547q0.516-1.266 0.516-2.625zM16.5 12q0 0.422-0.047 0.609l-2.438-2.438v-2.203q2.484 1.219 2.484 4.031z"></path>
</svg>
</button>
<div class="volume">
<div class="volume__track">
<div class="volume__bar"></div>
</div>
</div>
</div>
<button class="ap__controls ap__controls--repeat">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#333" width="24" height="24" viewBox="0 0 24 24">
<path d="M17.016 17.016v-4.031h1.969v6h-12v3l-3.984-3.984 3.984-3.984v3h10.031zM6.984 6.984v4.031h-1.969v-6h12v-3l3.984 3.984-3.984 3.984v-3h-10.031z"></path>
</svg>
</button>
<button class="ap__controls ap__controls--playlist">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#333" width="24" height="24" viewBox="0 0 24 24">
<path d="M17.016 12.984l4.969 3-4.969 3v-6zM2.016 15v-2.016h12.984v2.016h-12.984zM18.984 5.016v1.969h-16.969v-1.969h16.969zM18.984 9v2.016h-16.969v-2.016h16.969z"></path>
</svg>
</button>
</div>
</div>
</div>
<script type="text/javascript" src="http://masuul.com/masuul-radio-js'; 

	$options = get_option( 'som_settings' );
	
	echo $options['som_select_field_0'];
	 echo '"></script>'  ;


}

