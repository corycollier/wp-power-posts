<?php
/**
 * Admin Functions File
 *
 * this file contains all of the methods needed in the admin section of the plugin
 *
 * hash: @build-hash@
 *
 * @package     Wordpress\@build-name@
 * @copyright   @build-year@ Cory Collier
 * @author      Cory Collier <corycollier@corycollier.comcom>
 * @version     @build-version@
 * @since       1.0.0
 * @license     MIT
 * @filesource
 */

/**
 * creates the menu
 */
function wppp_create_menu ( ) {
  add_menu_page(
    'WP Power Posts Settings',
    'WP Power Posts',
    'administrator',
    'wppp_settings_page',
    'wppp_settings_page'
  );
}

/**
 * registers the settinsg for this plugin
 */
function wppp_register_settings ( ) {
  $post_types = get_post_types();
  foreach ( $post_types as $post_type ) {
    register_setting( 'wppp-power-posts', $post_type );
  }
}

/**
 * outputs the settings page for use in the admin section
 */
function wppp_settings_page ( ) {

  // echo the header
  echo '<div class="wrap">
    <h2>WP Power Posts Settings</h2>
    <form method="post" actions="options.php">';

  settings_fields( 'wppp-power-posts' );
  do_settings_sections( 'wppp-power-posts' );
  _wppp_settings_page_table();
  submit_button();

  echo '</form></div>';

}

/**
 * private function to output the table of settings
 * @return string markup for the admin section
 */
function _wppp_settings_page_table ( ) {
  $row_template = '
  <tr valign="top">
    <th scope="row">!label</th>
    <td><input type="checkbox" name="!name" value="!value" /></td>
  </tr>
  ';

  echo '<table class="form-table">';

  $post_types = get_post_types();

  foreach ( $post_types as $post_type ) {

    echo strtr( $row_template, array(
      '!label'  => $post_type,
      '!name'   => $post_type,
      '!value'  => esc_attr( get_option( $post_type ) ),
    ));

  }

  echo '</table>';

}


