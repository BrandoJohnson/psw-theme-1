<?php

function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

// Widgetize the theme

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Sign-Up Form Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Consult Form Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Header Right Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );



// Gravity Form Redirect

add_filter("gform_confirmation", "custom_confirmation", 10, 4);
function custom_confirmation($confirmation, $form, $lead, $ajax){
    if($form["id"] == "1" || $form["id"] =='7' || $form["id"] =='6'){
        $confirmation = array("redirect" =>"http://www.publicservicewebsites.net/wp-signup.php");
    }
    else if($form["id"] == "2"){
        $confirmation = "Thanks for contacting us. We will get in touch with you soon";
    }

    return $confirmation;
}


// GA Tracking Code

add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-60182937-1', 'auto');
        ga('send', 'pageview');

    </script>

<?php } ?>
