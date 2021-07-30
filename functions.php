<?php


    //Cuando se activa el theme
    function amighini_setup() {

    //Habilitación de imagenes destacadas
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'amighini_setup');



    // Menus de navegación, agregar más utilizando el array
    function amighini_menus() {
        register_nav_menus(array(
            'menu-principal' => __( "Menu Principal", 'amighini' ),
            'menu-secundario' => __( "Menu Secundario", 'amighini' )
        ));
    }

    add_action('init', 'amighini_menus');


    // Scripts y Styles
    function amighini_scripts_styles() {
        // Hoja de estilos principal
        wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
    }
    add_action('wp_enqueue_scripts', 'amighini_scripts_styles');



    function estilos_login(){
        wp_enqueue_style('login-css', site_url().'https://amighini.net/wp-content/themes/amighini/assets/css/login.css', array(), '1.0');
    }
    add_action('login_head', 'estilos_login');


    function limite_extracto( $texto, $limite = '50' ) {
        $extracto = explode( ' ', $texto );
        return implode( ' ', array_slice($extracto, 0, $limite) );
    }

    add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

?>