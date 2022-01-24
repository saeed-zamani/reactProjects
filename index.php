<?php get_header(); ?>


<section class="box-slider">
    <div id="main_slider" class="owl-carousel owl-theme">
        <div class="item"><img src="<?php echo get_template_directory_uri().'/img/1.png' ?>"> </div>
        <div class="item"><img src="<?php echo get_template_directory_uri().'/img/2.jpg' ?>"> </div>
    </div>
</section>


<div class="line"></div>

<?php
include_once 'inc/template/tv.php';
?>



<section class="article">
    <div class="container">
        <div class="article-head">
            <div class="article-title">
                <h2>مقالات</h2>
                <h5>بلاگ</h5>
            </div>

            <div class="article-link">
                <a href="<?php echo get_post_type_archive_link('tv'); ?>">مقالات بیشتر</a>
            </div>
        </div>

        <div class="article-slider">
            <div id="multi_slider" class="owl-carousel owl-theme">

                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                        <div class="item box-article">
                            <?php the_post_thumbnail('article'); ?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                            <p><?php the_excerpt(); ?></p>
                            <div class="btn-more"><a href="<?php the_permalink(); ?>">بیشتر بخوانید</a> </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>


            </div>

        </div>

    </div>
</section>



<div class="line"></div>



<section class="adv">
    <div class="container">
        <div class="right-adv">
            <h2>آموزش رایگان وردپرس</h2>
            <p>آموزش صفرتاصد وردپرس از کار با پنل مدیریت وردپرس بصورت رایگان تا طراحی حرفه ای قالب وردپرس، برای مشاهده روی دکمه زیر کلیک کنید</p>
            <a href="#">آموزش وردپرس</a>
        </div>

        <div class="left-adv">
            <figure>
                <img src="<?php echo get_template_directory_uri().'/img/wd.png' ?>">
            </figure>
        </div>
    </div>
</section>




<div class="line"></div>



<?php include_once 'inc/template/course.php'; ?>



<div class="line"></div>



<?php get_footer(); ?>