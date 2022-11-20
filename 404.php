<!-- This template is for displaying header -->

<?php get_header(); ?>

<section id="body_area" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 error_page">
                <p>404 Error - Page not Found</p>
                <h1>Oops! Looks Like something was wrong</h1>
                <div class="error_search">
                    <?php get_search_form(); ?>
                </div>
                <a href="<?php echo home_url(); ?>" class="home_btn">Home</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<?php 
/*
* This template is for displaying header
*/
    get_header();

?>