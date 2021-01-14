<?php 

namespace WeDevs\MigrateToDokan\REST;

class Manager {

	protected $namespace = 'migrate-to-dokan/v1';

	public function __construct() {
		add_action( 'rest_api_init', [ $this, 'get_vendor' ] );
		add_action( 'rest_api_init', [ $this, 'get_withdraw' ] );
		add_action( 'rest_api_init', [ $this, 'get_order' ] );
		add_action( 'rest_api_init', [ $this, 'get_refund' ] );
	}

	public function get_vendor() {
		register_rest_route( $this->namespace, 'vendor', [
			'method' => 'GET',
			'callback' => array( $this, 'migrate_vendor' ),
		] );
	}

	public function get_withdraw() {
		register_rest_route( $this->namespace, 'withdraw', [
		    'methods' => 'GET',
		    'callback' => array( $this, 'migrate_withdraw' )
  		] );
	}

	public function get_order() {
		register_rest_route( $this->namespace, 'order', [
		    'methods' => 'GET',
		    'callback' => array( $this, 'migrate_order' )
  		] );
	}

	public function get_refund() {
		register_rest_route( $this->namespace, 'refund', [
		    'methods' => 'GET',
		    'callback' => array( $this, 'migrate_refund' )
  		] );
	}

	public function migrate_vendor() {
	    return new \WP_REST_Response( "Call vendor method here" );
	}

	public function migrate_withdraw() {
	    return new \WP_REST_Response( "Call withdraw method here" );
	}

	public function migrate_order() {
	    return new \WP_REST_Response( "Call order method here" );
	}

	public function migrate_refund() {
	    return new \WP_REST_Response( "Call refund method here" );
	}
}