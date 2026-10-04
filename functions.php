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
      
      after_setup_theme - etah action hook. Etah Theme-এর features/setup configure করে.
      add_theme_support(); - Theme-এ WordPress-এর নির্দিষ্ট built-in feature enable korea.
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
  
  
  /* register_nav_menu() - Ei function Theme-এ একটি navigation menu location/register করে, যাতে Dashboard থেকে menu assign করা যায়.
     'headerMenuLocation' - ei argument name নিজের মতো দিয়া যাবে,এটা menu location-এর unique ID/name.ekhane menu location-টার নাম headerMenuLocation.
     'Header Menu' - এটা argument name Dashboard-এ user readable name হিসেবে দেখতে পাবে.
     register_nav_menu('headerMenuLocation', 'Header Menu') - WordPress, আমার theme-এ menu location তৈরি করো যার internal ID headerMenuLocation, আর Dashboard-এ এটাকে Header Menu নামে দেখাও.
     *Dashboard থেকে menu বানালে এই headerMenuLocation-এ assign করবে.

  */

  function liberty_feature() {
    register_nav_menu('headerMenuLocation', 'Header Menu'); // Theme-e menu location register kore; 1st ta internal name for location, 2nd ta Dashboard-e dekhano name.
    add_theme_support('title-tag'); // WordPress-কে site-এর <title> tag automatically add করার permission diea holo.
  }

   add_action('after_setup_theme', 'liberty_feature'); // Theme setup হওয়ার সময় WordPress-কে আমাদের theme-এর features(liberty_feature) চালাতে বলা হচ্ছে।

?>