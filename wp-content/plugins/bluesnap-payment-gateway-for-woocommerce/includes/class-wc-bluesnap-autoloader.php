<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Woocommerce_Bluesnap_Gateway Autoloader.
 *
 * @class       WC_Bluesnap_Autoloader
 * @version     1.3.3
 * @package     Woocommerce_Bluesnap_Gateway/Classes
 * @category    Class
 * @author      SAU/CAL
 */
class WC_Bluesnap_Autoloader {

	/**
	 * Path to the includes directory.
	 *
	 * @var string
	 */
	private $include_path = '';

	/**
	 * The Constructor.
	 */
	public function __construct() {
		if ( function_exists( '__autoload' ) ) {
			spl_autoload_register( '__autoload' );
		}

		spl_autoload_register( array( $this, 'autoload' ) );

		$this->include_path = untrailingslashit( plugin_dir_path( WC_BLUESNAP_PLUGIN_FILE ) ) . '/includes/';
	}

	/**
	 * Take a class name and turn it into a file name.
	 *
	 * @param  string $class
	 * @return string
	 */
	private function get_file_name_from_class( $class ) {
		$class = strtolower( $class );
		return 'class-' . str_replace( '_', '-', $class ) . '.php';
	}

	/**
	 * Include a class file.
	 *
	 * @param  string $path
	 * @return bool successful or not
	 */
	private function load_file( $path ) {
		if ( $path && is_readable( $path ) ) {
			include_once $path;
			return true;
		}
		return false;
	}

	/**
	 * Auto-load WC_BLUESNAP classes on demand to reduce memory consumption.
	 *
	 * @param string $class
	 */
	public function autoload( $class ) {
		$file = $this->get_file_name_from_class( $class );
		$path = '';

		if ( strpos( $class, 'WC_Bluesnap_Admin' ) === 0 ) {
			$path = $this->include_path . 'admin/';
		}

		if ( empty( $path ) || ( ! $this->load_file( $path . $file ) && strpos( $class, 'WC_Bluesnap_' ) === 0 ) ) {
			$this->load_file( $this->include_path . $file );
		}
	}
}

new WC_Bluesnap_Autoloader();
