<?php 
  get_header();
  while(have_posts()){
    the_post(); 
    pagesBanner(); 
    ?>
    <!--- Dynamic About Aletta HTML Content Here --->
    <main class="main_container">
      <h2 class="title__secondary">My Cart</h2>
      <section>
          <div class="page-wrapper">
           <?php the_content()?>  
          </div>
      </section>
    </main>
 <?php 
  }  
get_footer(); 
?>