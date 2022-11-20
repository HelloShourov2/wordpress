<?php get_header(); ?>

<section id="body_area" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    get_template_part('template_part/post_setup');
                    var_export($post);
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="color:red">
                    <h3>Tempate: Attachment.php</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>