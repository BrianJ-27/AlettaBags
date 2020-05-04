<?php 
get_header();
while (have_posts()) {
    the_post();
    pagesBanner();
    ?>
    
<main class="main_container">
  <!-- Featured Gallery Section -->
  <section id="featured-bags">
        <h2 class="title__secondary">View Our Unique Selections</h2>
        

        <?php

          //*Custom Query* that pulls in the featured gallery images
          $alettaFeaturedGallery = new WP_Query(array(
            'posts_per_page' => 4,
            'post_type' => 'gallery',
            'order' => 'ASC',
            )
          );

            while($alettaFeaturedGallery->have_posts()){
              $alettaFeaturedGallery->the_post();?> 
                <div class="gallery__container">
                  <div class="gallery_feature--img"><?php the_post_thumbnail(); ?></div>
                  <div class="gallery__overlay">
                    <h3 class="title__tertiary g-title"><?php the_title(); ?></h3>
                    <p class="text__content"><?php the_content(); ?></p>
                  </div>  
                </div>
          <?php } 
          wp_reset_postdata();
          ?>
          
       
  </section>
    
   

    <!-- Design A Bag Section -->
    <section id="design-a-bag">
        <h2 class="title__secondary">Discover Your Favorite Bag</h2>
        <div>
       
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonials white_txt" 
        style="background : linear-gradient(rgba(102, 51, 153, 0.8),rgba(102, 51, 153, 0.8)),url('<?php echo get_theme_file_uri("/assests/img/raw/merged-500heightpics.png") ?>');
        filter:drop-shadow(8px 8px 10px gray);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed; 
        ">
      <h2 class="customer__title">What Our Customers are Saying!</h2>
      <div class="reviews__wrapper">
      <?php


        //*Custom Query* that pulls in the three testimonials
        $alettaTestimonials = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'testimonial',
          'order' => 'ASC',
          )
        );
        
          while($alettaTestimonials->have_posts()){
            $alettaTestimonials->the_post();?> 
           
              <div class="reviews">
                <div class="img__avatar">
                  <?php the_post_thumbnail(); ?>
                </div>
                <h3 class="customer__name"><?php the_title();?></h3>
          
                  <?php the_content();?>
                
              </div>
           
         <?php } 
         wp_reset_postdata();
        ?>
        
      </div>
    </section>

    <!-- Instagram Showcase Section -->
    <section class="flex_container" id="showCase">
      <h2 class="title__secondary">Showcase Your Look</h2>
      <?php echo do_shortcode('[instagram-feed]'); ?>
    </section>

    <!-- About Aletta Bio Section -->
    <section class="aboutAletta" id="person">
      <h2 class="title__secondary">About AlettaBags</h2>
      <div class="bio__container white_txt">
        <?php the_content();?>
      </div>
    </section>

    <!--Bag Contact Form Section -->
    <section class="contactUs scroll" id="contactMe">
      <h2 class="title__secondary">We Want to Hear From You</h2>

      <?php echo do_shortcode('[wpforms id="134"]') ?>

    </section>

    <!-- Newsletter Section -->
    <section class="newsletter" style=" background: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url('<?php echo get_theme_file_uri("/assests/img/raw/anna-hamilton-e5IMVSjZ1dA-unsplash.jpg") ?>'); background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      padding: 2em;
      margin: 1em;
      @include mq('md'){
        margin: 1em 3em;
      }">
      <div id="mc_embed_signup">
        <form
          action="#"
          method="post" id="subscribe-form" name="mc-embedded-subscribe-form" class="validate"
          target="_blank" novalidate>
          <div>
            <p class="subscribe__title">Exclusive Deals & Latest News!</p>
            <?php echo do_shortcode('[wpforms id="107"]') ?>
          </div>
        </form>
      </div>
    </section>

  </main>
  <?php }

get_footer();

?>

