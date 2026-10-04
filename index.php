<?php
     
     get_header();


/*
function machine ($solid, $liquid) {
    echo "<p>Using $solid and $liquid you can make your drink </p>";
}

machine('Apple', 'Water');
machine('Nuts', 'Milk');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>


<?php 

$names = array('apple', 'orange', 'banana', 'mango', 'pineapple',);

$total = 0;

/* count hocche Php er emn ekta tool , jetah nijea iee count korea oi number ta use korea,
 jmn ekhane array er number count korea 5 boshai dibeh. 

while ($total < count($names)) {
    echo "<li> Your favoruite fruit is $names[$total]</li>";
    $total++;
}

?>

<p>Your favourtie fruit is <?php echo $names[3] ?>.(bad system)</p>
<p>Your favourtie fruit is <?php echo $names[2] ?>.(bad system)</p>


<?php

$count= 1;

while ($count <= 10) {
    echo "<li>$count</li>";
    $count++;
}

?>


<?php

/* have_post() - Current WordPress query/result-এর মধ্যে কি কোনো post আছে কি না check করা?
   while ( have_posts() ) - যতক্ষণ post বাকি আছে, ততক্ষণ এই code-এর ভিতরের কাজ চালাও. 
   the_post() - পরবর্তী post-এ চলে যায় এবং সেই post-কে current post হিসেবে সেট করে.


while(have_posts()){
    the_post(); ?> 
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    
    <?php
}

*/

 /* *** kicu function ea amra echo korsi , kicu function likhle iee output show korse. REASON : jei function ea return use kora hoi shetah echo chara value dei nah,
    And onnn function ea echo use kora asea,tai Call korle iee Output show korea

  return - Value ফেরত dei but result show korea nah. example: ami kaj shes korea report submit korsi, echo - Screen-এ value দেখায়. example: kaj shes korea report er result show. 
  konta teh return use kora konta teh echo korah bojhar upai - get diea start holeh return use korah,example: get_the_title();
  the diea start holeh echo use korah,example: The title(); Real example : 

  function doubleNum($y){
    echo $y * 2;
  }
  doubleNum(5);

  function tripleNum($x){
    return $x * 3;
  }
  echo tripleNum(3);
 */

?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/library-hero.jpg'); // ei function Theme folder theke image-er exact URL Return kore ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Mar</span>
              <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
              <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Apr</span>
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
              <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Jan</span>
              <span class="event-summary__day">20</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best School</a></h5>
              <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Feb</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
              <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bus.jpg');?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/apples.jpg'); ?>) ">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg'); ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>


   <?php get_footer();

?>