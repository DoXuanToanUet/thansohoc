<?php
// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

// hide update notifications
function remove_core_updates(){
  global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates'); //hide updates for WordPress itself
add_filter('pre_site_transient_update_plugins','remove_core_updates'); //hide updates for all plugins
add_filter('pre_site_transient_update_themes','remove_core_updates'); //hide updates for all themes
  

function add_theme_scripts()
{
    $version = '1.0';

    wp_enqueue_style('devMainCss', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), $version, 'all');
    wp_enqueue_style('BootstrapCss', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), $version, 'all');
    wp_enqueue_style('devFontAwe', get_stylesheet_directory_uri() . '/assets/plugin/fontAwesome/font-awesome.css', array(), $version, 'all');
    // wp_enqueue_style('DataTableCss', get_stylesheet_directory_uri() . '/assets/plugin/xls/jquery.dataTables.min.css', array(), $version, 'all');
    wp_enqueue_script('BootstrapJs', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), $version, true);
    wp_enqueue_script('AmlichJs', get_stylesheet_directory_uri() . '/assets/js/amlich.js', array(), $version, false);
    wp_enqueue_script('devMainJS', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), $version, true);
    wp_enqueue_script('pythaJS', get_stylesheet_directory_uri() . '/assets/js/pytha.js', array(), $version, true);
    
    // wp_enqueue_script('PopperstrapJs', 'https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js', array(), $version, true);
    // wp_enqueue_script('DataTableJs', get_stylesheet_directory_uri() . '/assets/plugin/xls/jquery.dataTables.min.js', array(), $version, true);

}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

require get_stylesheet_directory() . '/inc-function/inc-widgetfunc.php';
require get_stylesheet_directory() . '/inc-function/inc-housefeng.php';
require get_stylesheet_directory() . '/inc-function/inc-pytha.php';
require get_stylesheet_directory() . '/inc-function/inc-ajaxPytha.php';
require get_stylesheet_directory() . '/inc-function/inc-kd.php';
require get_stylesheet_directory() . '/inc-function/inc-sim-so.php';
require get_stylesheet_directory() . '/inc-function/inc-tuvi.php';
require get_stylesheet_directory() . '/inc-function/inc-relatePost.php';
require get_stylesheet_directory() . '/inc-function/inc-ajaxRegister.php';
// require get_stylesheet_directory() . '/inc-function/inc-ajaxregis.php';
// require get_stylesheet_directory() . '/inc-function/inc_dashboard_kol.php';
// require get_stylesheet_directory() . '/inc-function/inc_kol.php';
// require get_stylesheet_directory() . '/inc-function/custom-avartar.php';
// require get_stylesheet_directory() . '/inc-function/inc_acf_roles.php';
// require get_stylesheet_directory() . '/inc-function/shrt_rank.php';
// require get_stylesheet_directory() . '/template-page/shrt-ranks.php';
// require get_stylesheet_directory() . '/inc-function/shrt_rank_role.php';


//Remove Default jQuery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_stylesheet_directory_uri() . '/assets/plugin/jquery.min.js', false, null);
    wp_enqueue_script('jquery');
}

//Theme Options
// if (function_exists('acf_add_options_page')) {

//   acf_add_options_page(array(
//       'page_title' => 'Coupon Settings',
//       'menu_title' => 'Coupon Settings',
//       'menu_slug'  => 'coupon-general-settings',
//       'capability' => 'manage_options',
//       'redirect'   => false
//   ));

//   acf_add_options_sub_page(array(
//       'page_title'  => 'Theme Header Settings',
//       'menu_title'  => 'Header',
//       'parent_slug' => 'theme-general-settings',
//   ));
// }


//Change Logo Form Login WP_LOGIN
function my_login_logo() { ?>
  <style type="text/css">
      .login-action-login  {
          background: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/loginbkg.jpg') no-repeat;
          position: relative;
      }
      .login-action-login:after{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg,rgba(0,0,0,.8),rgba(0,0,0,.4),rgba(0,0,0,.8));
        z-index: 1;
      }
      .login-action-login  #login{
        background: #fff;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 6px;
        transform: translate(-50%,-50%);
        z-index:3;
        padding: 0px;
      }
      .language-switcher{
         position: relative;
         z-index: 3;
         display:none;
      }
      .language-switcher #language-switcher{ margin-top:0px;}
      .login-action-login.login h1 a{margin-top:20px;}
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function custom_login_message() {
  $regis_url = home_url().'/register';
  $message = "<p style='text-align:center'>Bạn chưa có tài khoản? <a href=".$regis_url.">Đăng ký</a></p>";
  return $message;
}
add_filter('login_message', 'custom_login_message');

function add_login_check()
{
    if (is_user_logged_in()) {
        if ( is_page('register') || is_page('login') || is_page('lost-password')){
			    wp_redirect( home_url().'/than-so-hoc' ); exit; 
        }
    }
}
add_action('wp', 'add_login_check');



// Remove fields from Admin profile page
if ( ! function_exists( 'cor_remove_personal_options' ) ) {
	function cor_remove_personal_options( $subject ) {
		$subject = preg_replace('#<h2>'.__("Personal Options").'</h2>#s', '', $subject, 1); // Remove the "Personal Options" title
		$subject = preg_replace('#<tr class="user-rich-editing-wrap(.*?)</tr>#s', '', $subject, 1); // Remove the "Visual Editor" field
		$subject = preg_replace('#<tr class="user-comment-shortcuts-wrap(.*?)</tr>#s', '', $subject, 1); // Remove the "Keyboard Shortcuts" field
		$subject = preg_replace('#<tr class="show-admin-bar(.*?)</tr>#s', '', $subject, 1); // Remove the "Toolbar" field
		$subject = preg_replace('#<h2>'.__("Name").'</h2>#s', '', $subject, 1); // Remove the "Name" title
		$subject = preg_replace('#<tr class="user-display-name-wrap(.*?)</tr>#s', '', $subject, 1); // Remove the "Display name publicly as" field
		$subject = preg_replace('#<h2>'.__("Contact Info").'</h2>#s', '', $subject, 1); // Remove the "Contact Info" title
		$subject = preg_replace('#<tr class="user-url-wrap(.*?)</tr>#s', '', $subject, 1); // Remove the "Website" field
		$subject = preg_replace('#<h2>'.__("About Yourself").'</h2>#s', '', $subject, 1); // Remove the "About Yourself" title
		$subject = preg_replace('#<tr class="user-description-wrap(.*?)</tr>#s', '', $subject, 1); // Remove the "Biographical Info" field
		$subject = preg_replace('#<tr class="user-profile-picture(.*?)</tr>#s', '', $subject, 1); // Remove the "Profile Picture" field
		return $subject;
	}

	function cor_profile_subject_start() {
		if ( ! current_user_can('manage_options') ) {
			ob_start( 'cor_remove_personal_options' );
		}
	}

	function cor_profile_subject_end() {
		if ( ! current_user_can('manage_options') ) {
			ob_end_flush();
		}
	}
}
add_action( 'admin_head', 'cor_profile_subject_start' );
add_action( 'admin_footer', 'cor_profile_subject_end' );


// function to remove the dashboard widgets, but only for non-admin users
// if you want to remove the widgets for admin(s) too, remove the 'if' statement within the function
function remove_dashboard_widgets() {
	if ( ! current_user_can( 'manage_options' ) ) {	
		// remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		// remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		// remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		// remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
	}
}
// 
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );


function dsourc_hide_notices(){
  $user = wp_get_current_user(); 
  if (!($user->roles[0] == 'administrator')) { 
    remove_all_actions( 'admin_notices' ); 
  } 
} 
add_action( 'admin_head', 'dsourc_hide_notices', 1 );


function custom_login_redirect() {
    return home_url().'/than-so-hoc';
}
  
add_filter('login_redirect', 'custom_login_redirect');