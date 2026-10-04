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


    <!-- breadcrumb box tokon iee show korbe jokon kono sub/children page ea thakbeh.etah ekta condition,Etar jonno IF Statement Lagbe. Learning IF : 

    -->

    <?php // if tokon iee kaj korbe jokon parenthesis er modhea condition true hobe.false/0 holeh kaj korbe nah  
    /* if (2+2 == 4) {
      echo "the best College.";
     }  
      
     echo get_the_ID();
     echo wp_get_post_parent_id();
     echo wp_get_post_parent_id(get_the_ID());

     if (wp_get_post_parent_id(get_the_ID())) {
      echo "I'm Child Page.";
     }  

    breadcrumb box er ei condition korte IF lagbeh.so, eita check er jonno dorkar porbe PAGE ID er.
    evry page have a Unique numerical ID,ei ID editing time ea URL ea thakeh,also wp function diea dekha jai.
    get_the_ID(); - ei function current page er ID show korea.
    wp_get_post_parent_id(): - Current page/post-এর parent-এর ID show করে; *parent না থাকলে 0 return করে।*
    wp_get_post_parent_id(get_the_ID()); - আমি এখন যে page/post-এ আছি, তার parent-এর ID আমাকে দাও।
    if(0) means = False. so, if er condition jodi 0 hoi tahle if kaj korbe na.
    -------------------------------
    get_the_title(); - current page/post er title return korea , but ei function er arrgument use korle oi page er title Show korai.
    get_the_title($Parentpage) = get_the_title(wp_get_post_parent_id(get_the_ID())) - বর্তমান page-এর parent page-এর title বের করো। means  - get_the_ID() → 25 (Current page ID), wp_get_post_parent_id(25) → 10(Current page parent ID), get_the_title(10) → About Us (ID 10 page title) 
    get_the_title(0) → Current page/post-এর title return korea.

    get_permalink(); - current post/page-এর URL/permalink return করে,but ei function er arrgument use korle oi page er Url return korai.
    get_permalink($Parentpage); = get_permalink(wp_get_post_parent_id(get_the_ID())); - বর্তমান page-এর parent page-এর URL/permalink বের করো। - same get_the-title($Parentpage) er breakdown er motoh.
    */
    
    // The breadcrumb box will only show if the current page has a parent page.
    $Parentpage = wp_get_post_parent_id(get_the_ID()) ;

    if ($Parentpage) { ?>
         <div class="container container--narrow page-section">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($Parentpage); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($Parentpage); ?></a> <span class="metabox__main"><?php the_title();?></span>
        </p>
      </div>

    <?php }
     

     ?>

    <!-- Side menu show korbe oi page gulah teh jara parent & Children page.It's a condition so need If.
      also here is 2 condition : parent page, child page . childpage finding er jonno $Parentpage variable asea, parent page bujhar variable make korah lagbeh.
    -->
    <?php 
    /*
    get_pages(array('child_of' => get_the_ID())); - Current page er child page gulah return korbe, child page na thakle empty array(0) return kore, tai if false hoy.
    ei function use korar reason hocche eagulah return korea kono kicu show korbe na.eavabe Parent page find kora hoise.
    or - or diea multiple condition add korah jai , jekono ekta true holeh iee if er statement run hobe.
    */
    $findParentArray = get_pages(array(
      'child_of' => get_the_ID()
    )); 
    
    if ($Parentpage or $findParentArray ) { ?>
       
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($Parentpage); ?>"><?php echo get_the_title ($Parentpage); ?></a></h2>
        <ul class="min-list">
          <?php 
          /*
          get_pages(); - Similar to wp_list_pages(). ** but get pages() return korea r wp_list_pages() output dei.
          wp_list_pages(); - site -এর সব Page-কে তাদের title link করে automatically list আকারে দেখায়।
          'title_li' - হলো wp_list_pages() function-এর একটি argument/key, যেটা page list-এর title/header কে বোঝায়.
          'child_of' - eitar mane jei parent page ea aci tar under-e থাকা childpage show koro,So value lagbe.
          -----------------------
          *** Associative Array - etah diea number index er bodole meaningful (name)key diye value rakha hoy. - benefit: meaningful name er under ea value store.
          $normal = array('cat', 'dog', 'bird'); - normal array.
          $valueName = array('cat' => 'fish', dog => 'meat', 'bird' => 'insect'); - associative array 'key' => 'value'
           
          $valueName = array('cat' => 'fish', 'dog' => 'meat', 'bird' => 'insect');
          echo $valueName['cat']; 
          -----------------------
          ekon amra chai je ei side menu bar show korbe Only parent & child page ea.onno kono page ea noi(means condition)
          else - if er condition false/0 holeh else er kaj korbe.
          $Parentpage - যে page/post-এ আছে, তার parent-এর ID দেয়. - ekhane  parent page na thakle 0 dibe, 0 means false tokon else excute hobe.

          Childpage Order - By default, WordPress will use alphabetical ordering, but we can use our own custom ordering,
          'sort_order' - কোন জিনিসের(field er) ভিত্তিতে Pages-গুলো সাজাবে,wp_list_pages()-এর একটি argument
          'menu_order' - WordPress-এর Menu Order value অনুযায়ী সাজাবে,wp_list_pages()-এর একটি argument

          */
          if($Parentpage){
            $FindChildPage = $Parentpage ; // current page er parent page er ID.
          } else {
            $FindChildPage = get_the_ID(); // $FindChildPage = current page er Post ID.
          }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $FindChildPage, // current page er Childpage gulah show koro.
             'sort_column' => 'menu_order' // Page-গুলোকে তাদের Menu Order অনুযায়ী সাজায়.
          ));
          
          ?>
        </ul>
      </div>
      
      <?php } ?>
       

      <div class="generic-content">
        <?php the_content(); ?>
      </div>
    </div>  

    <?php

}
    get_footer();
?>