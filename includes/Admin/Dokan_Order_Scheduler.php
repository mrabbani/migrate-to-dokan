<?php

namespace WeDevs\MigrateToDokan\Admin;

class Dokan_Order_Scheduler {
    public function __construct() {
        add_action( 'init', [ $this, 'migrate_order_schedule' ] );
        add_action( 'order_schedule', [ $this, 'order_migrate_to_dokan' ] );
    }

    public function migrate_order_schedule() {
        if ( false === as_next_scheduled_action( 'order_schedule' ) ) {
            error_log( 'Scheduling action' );
            as_schedule_recurring_action( time(), 1, 'order_schedule' );
        }
    }

    public function order_migrate_to_dokan() {
        $migration= Migrator_Manager::get_migrator();
        $count    = $migration->get_order_counts();
        error_log( 'Dokan Order Migration...' . $count );
    }
}
