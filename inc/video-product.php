<?php

add_action( 'cmb2_admin_init', 'cmb2_pishro_metabox_product' );

function cmb2_pishro_metabox_product()
{

    $video_pro = new_cmb2_box(array(
        'id' => 'pishro_product_metabox',
        'title' => __('ویدیو معرفی دوره', 'cmb2'),
        'object_types' => array('product'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));


    $video_pro->add_field( array(
        'name'    => 'آپلود ویدیو',
        'desc'    => 'آپلود فایل ویدیوی معرفی دوره',
        'id'      => 'pishro_video_product',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلود ویدیو' // Change upload button text. Default: "Add or Upload File"
        ),

        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );


    $video_pro->add_field( array(
        'name'    => 'پوستر ویدیو',
        'desc'    => 'آپلود پوستر برای ویدیو',
        'id'      => 'pishro_video_product_poster',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلود تصویر' // Change upload button text. Default: "Add or Upload File"
        ),

    ) );



}