<?php

    get_header();

while(have_posts()){
    the_post(); ?>
    
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>I will replace this line later.</p>
        </div>
      </div>
    </div>


    <!-- breadcrumb box tokon iee show korbe jokon kono sub/children page ea thakbeh.Etar jonno IF Statement er Lagbe.learning IF : 
     
    
    -->

    <?php // if tokon iee kaj korbe jokon parenthesis er modhea condition true hobe.
     echo get_the_ID();
     echo wp_get_post_parent_id();
     
     if (2+2 == 4) {
      echo "the best College."; 
    
      /* The breadcrumb box will only show if the current page has a parent page.ei condition korte IF lagbeh.so, eita check er jonno dorkar porbe PAGE ID er.
    evry page have a Unique numerical ID,ei ID editing time ea URL ea thakeh,also wp function diea dekha jai.
    get_the_ID(); - ei function page ID show korea. 
    
    */

     }

     ?>

    <div class="container container--narrow page-section">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main"><?php the_title();?></span>
        </p>
      </div>

      <!--

      <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li>
        </ul>
      </div>

       -->

      <div class="generic-content">
        <?php the_content(); ?>
      </div>
    </div>  

    <?php

}
    get_footer();
?>