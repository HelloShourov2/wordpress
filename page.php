<?php get_header(); ?>

<section id="body_area" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php 
                get_template_part('template_part/blog_setup');
               ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>