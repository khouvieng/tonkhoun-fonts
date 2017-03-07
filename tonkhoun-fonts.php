<?php

/*
  Plugin Name: tonkhoun-fonts
  Plugin URI: https://www.tonkhoun.com/
  Description: ປລັກອິນປຽນຟອນພາສາລາວໃນເວີດແພຣດສ໌ (WordPress) ພັດທະນາໂດຍເວັບໄຊ ຕົ້ນຄູນ https://www.tonkhoun.com/ ໂດຍການນໍາໃຊ້ຟອນ Lao San Pro
  Author: ຄູນຸມານ 
  Version: 1.0.1 beta
  Author URI: https://www.tonkhoun.com
 */

add_action('wp_enqueue_scripts', 'tonkhoun_fonts_scripts');

function tonkhoun_fonts_scripts() {
    wp_register_style('custom-style', plugins_url('/tonkhoun-fonts-style.css', __FILE__), array(), '20120208', 'all');
    wp_register_style('custom-style', get_template_directory_uri() . '/tonkhoun-fonts-style.css', array(), '20120208', 'all');
    wp_enqueue_style('custom-style');
}
?>
