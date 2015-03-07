<?php
   /*
   Plugin Name: [ioyf] Settings (custom settings page)
   Description: This is the custom settings for ioyf
   Version: 1.0
   Author: Peter Tollnes Flem
   */
?>
<?php 
	/*--------------------------------------------------------------------------*
	 * Register settings page, sections, and fields
	/*--------------------------------------------------------------------------*/

	/**
	 * Register settings submenu page
	 */
	function ioyf_register_settings_page () {
		add_submenu_page('options-general.php', // parent slug
			__('Inside:Out Y&F', 'ioyf'), // page title
			__('Inside:Out Y&F', 'ioyf'), // menu title
			'manage_options', // capcbilities
			'ioyf-settings-page', // menu slug
			'ioyf_settings_page' // render function
		);
	}
	add_action('admin_menu', 'ioyf_register_settings_page');

	/**
	 * Register sections
	 */
	function ioyf_register_settings_sections_and_fields() {
		register_setting( 'ioyf-settings', 'ioyf_settings');

		add_settings_section('ioyf', 
			__('Information', 'ioyf'), 
			'display_ioyf_information_settings', 
			'ioyf-settings-page'
		);
		register_kaspari_header_fields();
	}
	add_action('admin_init', 'ioyf_register_settings_sections_and_fields');

	/**
	 * Register fields
	 */
	function register_kaspari_header_fields() {
		add_settings_field('ioyf-top-information', __('Top information', 'ioyf'), 'display_top_information_field', 'ioyf-settings-page', 'ioyf');
		add_settings_field('ioyf-bottom-information', __('Bottom information', 'ioyf'), 'display_bottom_information_field', 'ioyf-settings-page', 'ioyf');
		add_settings_field('ioyf-yf-title', __('Y&F title', 'ioyf'), 'display_yf_title_field', 'ioyf-settings-page', 'ioyf');
		add_settings_field('ioyf-duration-information', __('Varighet', 'ioyf'), 'display_duration_information_field', 'ioyf-settings-page', 'ioyf');
		add_settings_field('ioyf-freedom-title', __('Freedom title', 'ioyf'), 'display_freedom_title_field', 'ioyf-settings-page', 'ioyf');
		add_settings_field('ioyf-freedom-text', __('Freedom text', 'ioyf'), 'display_freedom_text_field', 'ioyf-settings-page', 'ioyf');
		add_settings_field('ioyf-top-banner-date-and-time', __('Top banner date and time information', 'ioyf'), 'display_top_banner_date_and_time_field', 'ioyf-settings-page', 'ioyf');
		add_settings_field('ioyf-top-banner-ynf-sub-title', __('Top banner y&f sub title', 'ioyf'), 'display_top_banner_ynf_sub_title', 'ioyf-settings-page', 'ioyf');
		add_settings_field('ioyf-facebook-banner-text', __('Facebook banner text', 'ioyf'), 'display_facebook_banner_text', 'ioyf-settings-page', 'ioyf');
		add_settings_field('ioyf-facebook-banner-link', __('Facebook banner link', 'ioyf'), 'display_facebook_banner_link', 'ioyf-settings-page', 'ioyf');
	}

	/*--------------------------------------------------------------------------*
	 * Render fields
	/*--------------------------------------------------------------------------*/

    function display_freedom_title_field() {
      $options = get_option('ioyf_settings');

      ?>
        <p>
          <input class="regular-text" name="ioyf_settings[freedom_title]" value="<?php echo $options['freedom_title']; ?>" />
        </p>
      <?php
	}

    function display_duration_information_field() {
      $options = get_option('ioyf_settings');

      ?>
        <p>
          <input class="regular-text" name="ioyf_settings[duration_information]" value="<?php echo $options['duration_information']; ?>" />
        </p>
      <?php
	}


    function display_yf_title_field() {
      $options = get_option('ioyf_settings');

      ?>
        <p>
          <input class="regular-text" name="ioyf_settings[ioyf_title]" value="<?php echo $options['ioyf_title']; ?>" />
        </p>
      <?php
	}

    function display_freedom_text_field() {
      $options = get_option('ioyf_settings');

      ?>
        <style>
          .wp-editor-container {
            width: 700px;
          }
        </style>
        <p>
          <?php wp_editor( $options['freedom_text'], 'freedomtext', array(
            'textarea_name' => 'ioyf_settings[freedom_text]',
            'media_buttons' => false,
            'textarea_rows' => 10
          )); ?>
        </p>
      <?php
	}

    function display_bottom_information_field() {
      $options = get_option('ioyf_settings');

      ?>
        <style>
          .wp-editor-container {
            width: 700px;
          }
        </style>
        <p>
          <?php wp_editor( $options['bottom_information'], 'bottominformation', array(
            'textarea_name' => 'ioyf_settings[bottom_information]',
            'media_buttons' => false,
            'textarea_rows' => 10
          )); ?>
        </p>
      <?php
	}

    function display_top_information_field() {
      $options = get_option('ioyf_settings');

      ?>
        <style>
          .wp-editor-container {
            width: 500px;
          }
        </style>
        <p>
          <?php wp_editor( $options['top_information'], 'topinformation', array(
            'textarea_name' => 'ioyf_settings[top_information]',
            'media_buttons' => false,
            'textarea_rows' => 10
          )); ?>
        </p>
      <?php
	}

    function display_top_banner_date_and_time_field() {
      $options = get_option('ioyf_settings');

      ?>
        <p>
          <input class="regular-text" name="ioyf_settings[ioyf_top_banner_date_and_time]" value="<?php echo $options['ioyf_top_banner_date_and_time']; ?>" />
        </p>
      <?php
    }

    function display_top_banner_ynf_sub_title() {
      $options = get_option('ioyf_settings');

      ?>
        <p>
          <input class="regular-text" name="ioyf_settings[ioyf_logo_subtitle]" value="<?php echo $options['ioyf_logo_subtitle']; ?>" />
        </p>
      <?php
    }

    function display_facebook_banner_text() {
      $options = get_option('ioyf_settings');

      ?>
        <p>
          <input class="regular-text" name="ioyf_settings[ioyf_facebook_banner_text]" value="<?php echo $options['ioyf_facebook_banner_text']; ?>" />
        </p>
      <?php
    }

    function display_facebook_banner_link() {
      $options = get_option('ioyf_settings');

      ?>
        <p>
          <input class="regular-text" name="ioyf_settings[ioyf_facebook_banner_link]" value="<?php echo $options['ioyf_facebook_banner_link']; ?>" />
        </p>
      <?php
    }

    /*--------------------------------------------------------------------------*
	 * Render sections
	/*--------------------------------------------------------------------------*/
	function display_ioyf_information_settings() { _e('Settings for the information on the page.', 'ioyf'); }

	/*--------------------------------------------------------------------------*
	 * Render the settings page 
	/*--------------------------------------------------------------------------*/
	function ioyf_settings_page() {

		if (!current_user_can('manage_options')) {
			wp_die(__('You do not have sufficient permissions to access this page.', 'ioyf'));
		}

		?>
			
			<div class="wrap">
				<?php screen_icon(); ?> <h2><?php _e('Inside:Out Y&F Settings', 'ioyf'); ?></h2>

				<form method="post" action="options.php">
					<?php settings_fields( 'ioyf-settings' ); ?>
					<?php do_settings_sections( 'ioyf-settings-page' ); ?>

					<?php submit_button(); ?>
				</form>
			</div>

		<?php
	}