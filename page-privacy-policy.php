<?php
  get_header();
  while(have_posts()){
    the_post(); 
    pagesBanner();
   ?>
    <!--- Dynamic Privacy Policy HTML Content Here --->
    <main class="main_container">
      <section>
        <div class="page-wrapper">
          <div class="col">
             <?php the_content();?>
          </div>
        </div>
      </section>
    </main>
<?php 
  }
get_footer();
?>

