<?php
/*
Plugin Name: Make All Images Downloadable
Plugin URI: http://iotainfotech.com/
Description: This plugin will allow public users to download the images from site by showing download button on all images. This download button is an icon and It will be shown to user on hovering the image. 
Version: 1.0
Author: wpplugindeviota
Author URI: https://profiles.wordpress.org/wpplugindeviota/
*/ 

global $wp;

register_activation_hook( __FILE__, 'MAID_menu_option_admin_menu_act' );	
register_deactivation_hook( __FILE__, 'MAID_plugin_funct_dect' );

add_action("admin_menu", "MAID_menu_option_admin_menu_act");
function MAID_menu_option_admin_menu_act() {

	$iconUrl = plugin_dir_url( __FILE__ ) . 'assets/images/make-all-images-downloadable.png';
    add_menu_page("Image Downloads", "Image Downloads", "edit_posts",
        "mynewmenutwo", "MAID_page_display_admin_pnl", $iconUrl, 2);

}

function MAID_page_display_admin_pnl(){ ?>
		
	<div style="display:block; margin:0 auto; padding:40px;">	
	<?php echo "<h4>All images will show up a download icon while hovering over the image. The image can be downloaded by clicking on the download icon!</h4>"; ?>
	</div>
	
<?php
}

function MAID_plugin_funct_dect(){
 
 return true;
 
}


add_action('wp_enqueue_scripts', 'MAID_style_script_enq_fnct');
function MAID_style_script_enq_fnct() 
{   
    wp_enqueue_script( 'custom', plugin_dir_url( __FILE__ ) . 'assets/js/custom.js', array(), false, true );
    wp_enqueue_style( 'styleNew',  plugin_dir_url( __FILE__ ) . 'assets/css/styleNew.css');
    wp_enqueue_style( 'fontawesome_css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}




    





