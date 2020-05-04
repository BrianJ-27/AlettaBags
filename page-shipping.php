<?php
  get_header();
  while(have_posts()){
    the_post(); 
    pagesBanner();
   ?>
    <!--- Dynamic Shipping & Layaway HTML Content Here --->
    <main class="main_container">
      <section>
        <div class="page-wrapper">

            <?php the_content(); ?>
            
        </div>
      </section>
    </main>
<?php 
  }
get_footer();
?>