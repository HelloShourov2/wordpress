<?php get_header(); ?>

<section id="body_area" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    get_template_part('template_part/post_setup');
                    // var_export($post);
                    ?>
                <!-- <img src="<?php echo $post->guid; ?>" alt="<?php the_title(); ?>"> -->
                <img src="<?php echo esc_url($post->guid); ?>" alt="<?php esc_attr(get_the_title()); ?>">
                <p><a href="<?php echo $post->guid; ?>">Download</a></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="color:red">
                    <h3>Tempate: Image.php</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>