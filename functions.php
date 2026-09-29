<?php 

  /* This is mainly behind the scenes file. This is where we can have a
conversation with the WordPress system itself.

 - Telling WordPress to load our CSS file. 
    
 add_action('wp_enqueue_scripts', - hey WordPress , I want to load some css or js file.
      liberty_files(); - function diea js, cs file load korte pari, ekhane css load korbo.
      wp_enqueue_style - ei function diea css file load korbo
      get_stylesheet_uri() - manually css file er location na diea function diea url chinai diea hoieache. But ei Function shudu Root Css file k point korte pare.    
      university_styles - Main CSS file er nickname diea chinai deoa.
      font-awesome - Set a nickname of font_awesome icons.
      google-font - Set a nickname for custom google fonts.
      get_theme_file_uri() - current WordPress theme-এর যেকোনো file-এর URL বের করে দেয়.
      wp_enqueue_script() - this function is used for loading js file.
      But Js file load korte extra kicu argument er dorkar hoi - onno kono js file er upor dependencies asea kina, thakle - array('name'), nah thakle - Null
      then version number for the script - 1.0.1, last argument - WordPress asking us, do you want to load this file right before the closing body tag yes(true) or no(false).
      */


    function liberty_files(){
      wp_enqueue_script('college_js', get_theme_file_uri('/build/index.js'), array('jquery'),'1.0', true);
      wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'); // Loading Custom google font.
      wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); // loading fontawesome icon.
      // wp_enqueue_style('university_styles', get_stylesheet_uri());
      wp_enqueue_style('university_styles', get_theme_file_uri('/build/style-index.css'));
      wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
    }

   add_action('wp_enqueue_scripts', 'liberty_files');  // 'wp_enqueue_scripts' hocche WordPress er HOOK.
              
   // আমি এখানে function-টা execute করব না,যখন wp_enqueue_scripts Hook টি রান করবে, তখন liberty_files ফাংশনটি চালাবে, তাই শুধু এটির নাম দিব.

?>