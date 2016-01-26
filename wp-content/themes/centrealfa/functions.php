<?php

    function alfa_setup(){
        add_theme_support('post-thumbnails');
    }

    function alfa_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Widget Area', 'alfa' ),
            'id'            => 'sidebar-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title hidden">',
            'after_title'   => '</h1>',
        ) );
    }

    function register_my_menus() {
      register_nav_menus(
        array(
          'header-menu' => __( 'Menu d\'en-tête', 'alfa')
         )
       );
    }

    function create_taxonomies() {
        register_taxonomy('specialties', 'teams',
            array(
                'labels' => ['name' => __('Spécialités'),
                             'singular_name' => __('Spécialité')
                ],
                'public' => true
        ));
    };

    function create_post_types() {
        register_post_type( 'news',
            array(
                'labels' => ['name' => __( 'News' ),
                             'singular_name' => __( 'New' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'home-messages',
            array(
                'labels' => ['name' => __( 'Messages d\'accueil' ),
                             'singular_name' => __( 'Message d\'accueil' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'teams',
            array(
                'labels' => ['name' => __( 'Équipes' ),
                             'singular_name' => __( 'Équipe' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'about',
            array(
                'labels' => ['name' => __( 'À propos' ),
                             'singular_name' => __( 'À propos' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail')
            )
        );
        register_post_type( 'tarifs',
            array(
                'labels' => ['name' => __( 'Tarifs' ),
                             'singular_name' => __( 'Tarif' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'contact',
            array(
                'labels' => ['name' => __( 'Contact' ),
                             'singular_name' => __( 'Contact' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'faq',
            array(
                'labels' => ['name' => __( 'F.A.Q.' ),
                             'singular_name' => __( 'F.A.Q.' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'links',
            array(
                'labels' => ['name' => __( 'Liens' ),
                             'singular_name' => __( 'Lien' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'downloads',
            array(
                'labels' => ['name' => __( 'Téléchargements' ),
                             'singular_name' => __( 'Téléchargement' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'stages',
            array(
                'labels' => ['name' => __( 'Stages / Jobs' ),
                             'singular_name' => __( 'Stage / Job' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'partners',
            array(
                'labels' => ['name' => __( 'Partenariats' ),
                             'singular_name' => __( 'Partenariat' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'prevent-service',
            array(
                'labels' => ['name' => __( 'Service Prévention / Formation' ),
                             'singular_name' => __( 'Service Prévention / Formation' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'therapy-service',
            array(
                'labels' => ['name' => __( 'Service Thérapeutique' ),
                             'singular_name' => __( 'Service Thérapeutique' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'parent-service',
            array(
                'labels' => ['name' => __( 'Service Parentalité' ),
                             'singular_name' => __( 'Service parentalité' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
        register_post_type( 'risks-reduce-service',
            array(
                'labels' => ['name' => __( 'Service Réduction des Risques' ),
                             'singular_name' => __( 'Service Réduction des Risques' )
                ],
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author')
            )
        );
    }

	function remove_admin_menus () {
		global $menu;

		// all users
		$restrict = explode(',', 'Links,Comments');
		
		// non-administrator users
		$restrict_user = explode(',', 'Appearance,Plugins,Users,Tools,Settings,Custom Fields');

		// WP localization
		$f = create_function('$v,$i', 'return __($v);');
		array_walk($restrict, $f);
		if (!current_user_can('activate_plugins')) {
			array_walk($restrict_user, $f);
			$restrict = array_merge($restrict, $restrict_user);
		}

		// remove menus
		end($menu);
		while (prev($menu)) {
			$k = key($menu);
			$v = explode(' ', $menu[$k][0]);
			if(in_array(is_null($v[0]) ? '' : $v[0] , $restrict)) unset($menu[$k]);
		}

	}
	add_action('admin_menu', 'remove_admin_menus');

    add_action( 'init', 'create_post_types' );
    add_action( 'init', 'create_taxonomies' );
    add_action( 'init', 'register_my_menus' );
    add_action( 'widgets_init', 'alfa_widgets_init' );
    add_action('after_setup_theme', 'alfa_setup');