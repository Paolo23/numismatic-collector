<?php

/**
 * The public-facing functionality of the plugin. // Todo: revisar la descripción de esta clase.
 *
 * @link       http://alternativasweb.ga
 * @since      1.0.0
 *
 * @package    Numismatic_Collector
 * @subpackage Numismatic_Collector/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Numismatic_Collector
 * @subpackage Numismatic_Collector/public
 * @author     Paolo Pacheco <paolopacheco23@gmail.com>
 */
class Numismatic_Collector_Post_types {
    public static function register_posttypes() {
        register_post_type(
            'coins',
            array(
                'labels' => array(
                    'name'          => __( 'Coins', 'numismatic-collector' ),
                    'singular_name' => __( 'Coin', 'numismatic-collector' ),
                    'add_new_item'  => __( 'Add new coin', 'numismatic-collector' ),
                    'edit_item'     => __( 'Edit coin', 'numismatic-collector' ),
                    'add_new'       => __( 'Add coin', 'numismatic-collector' )
                ),
                'description'       => __( 'Description here', 'numismatic-collector' ), // Todo: Añadir descripcción.
                'taxonomies'        => array( 'country' ),
                'show_ui'           => true,
                'public'            => true,
                'has_archive'       => true,
                'menu_icon'         => 'dashicons-sos',
                'supports'          => array('title', 'editor', 'page-attributes', 'thumbnail', 'comments'),
                //'register_meta_box_cb' => 'add_podcast_metaboxes'
            )
        );
    }

    public static function register_taxonomies() {
        register_taxonomy(
            'country',
            'coins',
            array(
                'label'         => __( 'Country', 'numismatic-collector' ),
                'rewrite'       => array( 'slug' => 'country' ),
                'hierarchical'  => true,
                'labels'        => array(
                    'name'          => _x( 'Countries', 'numismatic-collector' ),
                    'singular_name' => _x( 'Country', 'numismatic-collector' ),
                    'search_items'  => __( 'Search Countries', 'numismatic-collector' ),
                    'popular_items' => __( 'Popular Countries', 'numismatic-collector' ),
                    'all_items'     => __( 'All Countries', 'numismatic-collector' ),
                    'edit_item'     => __( 'Edit Country', 'numismatic-collector' ),
                    'update_item'   => __( 'Update Country', 'numismatic-collector' ),
                    'add_new_item'  => __( 'Add New Country', 'numismatic-collector' ),
                    'menu_name'     => __( 'Countries', 'numismatic-collector' ),
                    'not_found'     => __( 'No Countries found', 'numismatic-collector' )
                )
            )
        );

        register_taxonomy(
            'orientation',
            'coins',
            array(
                'label'         => __( 'Orientation', 'numismatic-collector' ),
                'rewrite'       => array( 'slug' => 'orientation' ),
                'hierarchical'  => false,
                'show_ui'       => false
            )
        );
    }


}