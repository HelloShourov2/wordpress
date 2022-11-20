<!-- This template is for displaying header -->

<?php get_header(); ?>
<h1>This is Home page</h1>
<section id="body_area" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>