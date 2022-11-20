<?php
function wl_customizer_register($wp_customize){

    // Header Area Function
    $wp_customize->add_section('wl_header_area', array(
        'title' =>__('Header Area', 'shourovhasan'),
        'description' => 'You can update or change your header area from here'
    ));

    $wp_customize->add_setting('wl_logo', array(
        'default' => get_bloginfo('template_directory').'/img/logo-1.png'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wl_logo', array(
        'label' => 'Change Logo',
        'setting' => 'wl_logo',
        'section' => 'wl_header_area'
    )));
    

    // Menu Positioning Function
    $wp_customize->add_section('wl_menu_option', array(
        'title'=>__('Menu Position Option', 'shourovhasan'),
        'description'=>'If you want to change the menu position, you can change it from here.'
    ));

    $wp_customize->add_setting('wl_menu_position', array(
        'default'=>'right_menu'
    ));

    $wp_customize->add_control('wl_menu_position', array(
        'label'=> 'Menu Position',
        'description'=>'Select your menu position.',
        'setting'=> 'wl_menu_position',
        'section'=> 'wl_menu_option',
        'type'=> 'radio',
        'choices'=> array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu'
        ),
    ));



    // Menu Positioning Function
    $wp_customize->add_section('wl_footer_option', array(
        'title'=>__('Footer Position Option', 'shourovhasan'),
        'description'=>'If you want to change the footer settings, you can change it from here.'
    ));

    $wp_customize->add_setting('wl_copyright_section', array(
        'default'=>'&copy; Copyright 2022 | BoomDevs'
    ));

    $wp_customize->add_control('wl_copyright_section', array(
        'label'=> 'Copyright Text',
        'description'=>'You can update your copyright text from here.',
        'setting'=> 'wl_copyright_section',
        'section'=> 'wl_footer_option',
    ));

    //Theme Color
    $wp_customize->add_section('wl_color_option', array(
        'title'=>__('Theme Color', 'shourovhasan'),
        'description'=>'If you want to change the Theme Color, you can change it from here.'
    ));

    $wp_customize->add_setting('wl_bg_color', array(
        'default'=>'#ffffff'
    ));

    $wp_customize->add_control(new WP_Customize_color_control($wp_customize, 'wl_bg_color', array(
        'label'=> 'Background Color',
        'section'=> 'wl_color_option',
        'setting'=> 'wl_bg_color',
    )));
    $wp_customize->add_setting('wl_primary_color', array(
        'default'=>'#1783FF'
    ));

    $wp_customize->add_control(new WP_Customize_color_control($wp_customize, 'wl_primary_color', array(
        'label'=> 'Primary Color',
        'section'=> 'wl_color_option',
        'setting'=> 'wl_primary_color',
    )));

}

add_action( 'customize_register', 'wl_customizer_register' );


function wl_theme_color_customize(){
?>
<style>
body {
    background: <?php echo get_theme_mod('wl_bg_color');
    ?>
}

:root {
    --blue: <?php echo get_theme_mod('wl_primary_color');
    ?>
}
</style>
<?php
}
add_action('wp_head', 'wl_theme_color_customize');