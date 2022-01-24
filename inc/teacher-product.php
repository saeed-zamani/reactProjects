<?php

add_action( 'cmb2_admin_init', 'cmb2_pishro_metabox_product_teacher' );

function cmb2_pishro_metabox_product_teacher(){

    $teacher_pro = new_cmb2_box(array(
        'id' => 'pishro_product_metabox_teacher',
        'title' => __('درباره مدرس', 'cmb2'),
        'object_types' => array('product'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));


    $teacher_pro->add_field( array(
        'name'    => 'تصویر مدرس',
        //'desc'    => 'آپلود فایل ویدیوی معرفی دوره',
        'id'      => 'pishro_course_teacher_pic',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true,
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلود تصویر'
        ),

        //'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );


    $teacher_pro->add_field( array(
        'name'    => 'نام و نام خانوادگی',
        'desc'    => 'نام و نام خانوادگی مدرس را وارد کنید',
        'id'      => 'pishro_course_teacher_name',
        'type'    => 'text',

    ) );

    $teacher_pro->add_field( array(
        'name'    => 'رزومه مدرس',
        'desc'    => 'در این قسمت می توانید رزومه مدرس را وارد کنید',
        'id'      => 'pishro_course_teacher_aboute',
        'type'    => 'textarea',

    ) );



}