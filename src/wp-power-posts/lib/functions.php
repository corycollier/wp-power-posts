<?php
/**
 * This file contains all of the functions required by the wp-power-posts plugin
 */


/**
 * debug an input
 *
 * @param  mixed $input the message to debug
 * @return string only returns a string if the $return value is overridden
 */
function wpp_debug ( $input, $return = false) {
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
function wpp_terminate ( $input ) {
  log_error( $input );
  if ( php_sapi_name() != 'cli' ) {
    die ( $input . ' - saved to error_log' );
  }
}


