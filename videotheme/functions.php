<?php
      add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
            function theme_enqueue_styles() {
                wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
                wp_enqueue_style( 'child-style',  get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
                wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/side.css' );
                                            }
      add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
            function enqueue_load_fa() {
                wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
                                       }

            function create_posttype() {
                register_post_type( 'videos',

                array(
                      'labels' => array(
                      'name' => __( 'videos' ),
                      'singular_name' => __( 'Videos' )
                                      ),
                      'public' => true,
                      'has_archive' => true,
                      'rewrite' => array('slug' => 'videos'),
                      )
                                 );
                                      }
      add_action( 'init', 'create_posttype' );
            function cw_post_type_videos() {
                    $supports = array(
                      'title', // post title
                      'editor', // post content
                      'author', // post author
                      'thumbnail', // featured images
                      'excerpt', // post excerpt
                      'custom-fields', // custom fields
                      'comments', // post comments
                      'revisions', // post revisions
                      'post-formats', // post formats
                                     );
                      $labels = array(
                      'name' => _x('videos', 'plural'),
                      'singular_name' => _x('videos', 'singular'),
                      'menu_name' => _x('videos', 'admin menu'),
                      'name_admin_bar' => _x('videos', 'admin bar'),
                      'add_new' => _x('Add New', 'add new'),
                      'add_new_item' => __('Add New videos'),
                      'new_item' => __('New videos'),
                      'edit_item' => __('Edit videos'),
                      'view_item' => __('View videos'),
                      'all_items' => __('All videos'),
                      'search_items' => __('Search videos'),
                      'not_found' => __('No videos found.'),
                                   );
                      $args = array(
                      'supports' => $supports,
                      'labels' => $labels,
                      'public' => true,
                      'query_var' => true,
                      'rewrite' => array('slug' => 'videos'),
                      'has_archive' => true,
                      'hierarchical' => false,
                      );
        register_post_type('videos', $args);
                                          }
        add_action('init', 'cw_post_type_videos');

        add_action( 'init', 'taxonomy', 0 );

            function taxonomy() {

                  $labels = array(
                      'name' => _x( 'Types', 'taxonomy general name' ),
                      'singular_name' => _x( 'Type', 'taxonomy singular name' ),
                      'search_items' =>  __( 'Search Types' ),
                      'all_items' => __( 'All Types' ),
                      'parent_item' => __( 'Parent Type' ),
                      'parent_item_colon' => __( 'Parent Type:' ),
                      'edit_item' => __( 'Edit Type' ),
                      'update_item' => __( 'Update Type' ),
                      'add_new_item' => __( 'Add New Type' ),
                      'new_item_name' => __( 'New Type Name' ),
                      'menu_name' => __( 'Types' ),
                                );

          register_taxonomy('types',array('videos'), array(
                      'hierarchical' => true,
                      'labels' => $labels,
                      'show_ui' => true,
                      'show_admin_column' => true,
                      'query_var' => true,
                      'rewrite' => array( 'slug' => 'type' ),
                                                           )
                          );
                                }
        register_nav_menus( array(
                      'primary' => __( 'Primary Menu', 'videotheme' ),
                                ) 
                          );

?>
