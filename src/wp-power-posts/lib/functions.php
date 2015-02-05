<?php
/**
 * Functions File
 *
 * this file contains all of the functions required for the wp-power-posts plugin
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
 * debug an input
 *
 * @param  mixed $input the message to debug
 * @return string only returns a string if the $return value is overridden
 */
function wppp_debug ( $input, $return = false) {
  $return = '<pre>' . print_r($input, true) . '</pre>';

  if ( ! $return ) {
    echo $return;
  }

  return $return;
}

/**
 * terminates a script (if not a cli script), and logs the input to the errot log
 *
 * @param  string $input message to log
 */
function wppp_terminate ( $input ) {
  log_error( $input );
  if ( php_sapi_name() != 'cli' ) {
    die ( $input . ' - saved to error_log' );
  }
}
