<?php
// Front Page
get_header();
?>


<section id="service_area">
    <!-- <section id="slider_area">
        <div class="slider">
            <?php 
                query_posts('post_type=slider&post_status=publish&post_per_page=3&order=ASC&paged=' . get_query_var('post'));

                if(have_posts()):
                    while(have_posts()) : the_post();
            ?>
            <div class="slider_thumb">
                <?php
                    echo the_post_thumbnail('slider')  
                ?>
            </div>
            <?php 
                endwhile;
                endif;
            ?>
        </div>
    </section> -->


    <section id="slider_area">
        <div class="owl-carousel owl-theme">
            <?php 
                query_posts('post_type=slider&post_status=publish&post_per_page=3&order=ASC&paged=' . get_query_var('post'));

                if(have_posts()):
                    while(have_posts()) : the_post();
            ?>
            <div class="slider_thumb">
                <?php
                    echo the_post_thumbnail('slider')  
                ?>
            </div>
            <?php 
                endwhile;
                endif;
            ?>
        </div>
    </section>

    <div id="homepage_post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php dynamic_sidebar('home-1') ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php 
                query_posts('post_type=service&post_status=publish&post_per_page=3&order=ASC&paged=' . get_query_var('post'));
                if(have_posts()):
                    while(have_posts()) : the_post();?> <div class="col-md-4">
                <div class="child_service">
                    <h2><?php the_title(); ?></h2>
                    <?php 
                    echo the_post_thumbnail('service')
                   ?>
                    <?php 
                    the_excerpt();
                   ?>
                </div>
            </div>
            <?php 
                endwhile;
                endif;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>