<!DOCTYPE html>
<html <?php language_attributes(); // Site-er language & text direction browser-ke janay, jate browser, SEO & screen reader thikvabe bujhte pare. ?> >
    <head>
        <meta charset ="<?php bloginfo('charset'); // Browser-ke character encoding bole dey, jate Bangla, English o special character thikvabe show hoy.ta naholeh kicu character ভুল বা অদ্ভুত symbol dekhabe.  ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mobile ea site-er width device-er screen-er sathe match kore responsive layout-er jonno.
        ei line thakai CSS media queries এবং responsive design properly কাজ করবে -->
        <?php wp_head(); //Telling WordPress to load our CSS file, Also etah korar jonno functions file ea bolah lagbe. ?>
    </head>   
        <body<?php body_class(); // It gives you all sorts of neat information about the current screen view.class name,ID,logged In etc info dei,ei class use korea CSS & JS add kora jabe?>>
            <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url(); // giving us main url ?>"><strong>Liberty</strong> College</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">

            <!-- Adding Navigation menus controllable from the wordpress Admin -->
             <?php
              /*
              wp_nav_menu(); - ei function Dashboard-এ তৈরি করা navigation menu,website-এ display করে. also ei function parameter array accept korea.
              'theme_location' - wp_nav_menu()-এর argument/key, jetah kon location er registered menu এখানে দেখাবে সেটা janteh chai.
              'headerMenuLocation' - এটা menu location-এর ID,jetah function page ea create hoise. */
              
              wp_nav_menu(array(
              'theme_location' => 'headerMenuLocation'
             ));?> 
          
          <!-- <ul>

              site_url(); - ei Function WordPress site-এর মূল URL output দেয়. 
              
              <li><a href="<?php echo site_url('/about-us'); // site-এর মূল URL-এর সাথে about page/path যোগ করে URL তৈরি করে ?>">About Us</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li><a href="#">Blog</a></li>
            </ul> -->
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>

