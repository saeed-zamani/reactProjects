<?php


function add_theme_scripts(){
    // اضافه کردن فایل های css
    wp_enqueue_style('all' , get_template_directory_uri() . '/css/all.css' , array() , false , 'all');
    wp_enqueue_style('owl.carousel' , get_template_directory_uri() . '/css/owl.carousel.min.css' , array() , false , 'all');
    wp_enqueue_style('owl.theme' , get_template_directory_uri() . '/css/owl.theme.default.min.css' , array() , false , 'all');
    wp_enqueue_style('style' , get_stylesheet_uri() , array() , false , 'all');

    //اضافه کردن فایل جاوااسکریپت
    wp_enqueue_script('jq' , get_template_directory_uri() . '/js/jquery-3.5.1.min.js' , array() , false , true);
    wp_enqueue_script('owl.carousel.js' , get_template_directory_uri() . '/js/owl.carousel.min.js' , array('jquery') , false , true);
    wp_enqueue_script('main' , get_template_directory_uri() . '/js/main.js' , array('jquery') , false , true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



function pishro_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');

    /*add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );*/

    add_image_size('article',313,181,true);
    add_image_size('tv_large',820,548,true);
    add_image_size('tv_small',265,165,true);
    add_image_size('product',400,190,true);

    register_nav_menus(
        array(
            'main-menu' => __( 'جایگاه فهرست اصلی ' ),
            'top-menu' => __( 'جایگاه فهرست بالای سایت' )
        )
    );
}
add_action('after_setup_theme','pishro_setup_theme');


function pishro_widget() {
    register_sidebar( array(
        'name'          => __( 'ناحیه کناری بلاگ' ),
        'id'            => 'pishro_blog',

        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'فوتر 1' ),
        'id'            => 'pishro_footer_one',

        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'فوتر 2' ),
        'id'            => 'pishro_footer_two',

        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'فوتر 3' ),
        'id'            => 'pishro_footer_three',

        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'pishro_widget' );

function custop_excerpt_length() {
    return 25;
}
add_filter('excerpt_length' , 'custop_excerpt_length',999);

// پاک کردن محصولات مرتبط از باکس اصلی محتوا ووکامرس
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


 // اضافه کردن تب مدرس
add_filter( 'woocommerce_product_tabs', 'woocommerce_product_teacher' );
function woocommerce_product_teacher( $tabs ) {
    $tabs['course_teacher'] = array(
        'title' 	=> __( 'مدرس', 'woocommerce' ),
        'priority' 	=> 20,
        'callback' 	=> 'woocommerce_product_teacher_content'
    );
    return $tabs;
}
function woocommerce_product_teacher_content() {
    $teacher_name = get_post_meta(get_the_ID() , 'pishro_course_teacher_name' , true);
    if (!empty($teacher_name)) {
        ?>
        <div class="course-teacher">
            <?php
            $teacher_pic = get_post_meta(get_the_ID() , 'pishro_course_teacher_pic' , true);
            if (!empty($teacher_pic)) {
                ?>
                <div class="teacher-pic">
                    <img src="<?php echo $teacher_pic; ?>">
                </div>
                <?php
            }
            ?>

            <div class="teacher-aboute">
                <h5><?php echo $teacher_name; ?></h5>
                <?php
                $teacher_aboute = get_post_meta(get_the_ID() , 'pishro_course_teacher_aboute' , true);
                if (!empty($teacher_aboute)) {
                    echo $teacher_aboute;
                }
                ?>
            </div>
        </div>
        <?php
    }
}

// اضافه کردن تب فهرست جلسات
add_filter( 'woocommerce_product_tabs', 'woocommerce_product_lesson_list' );
function woocommerce_product_lesson_list( $tabs ) {
    $tabs['lesson_list'] = array(
        'title' 	=> __( 'فهرست جلسات', 'woocommerce' ),
        'priority' 	=> 10,
        'callback' 	=> 'woocommerce_product_lesson_list_content'
    );
    return $tabs;
}
function woocommerce_product_lesson_list_content(){
require_once 'admin/content-tab-lesson.php';
}

require_once 'inc/tv-posttype.php';
require_once 'inc/video-tv.php';
require_once 'inc/video-product.php';
require_once 'inc/teacher-product.php';
require_once 'inc/lesson.php';
