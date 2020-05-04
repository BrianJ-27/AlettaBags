<?php 
  get_header();
  while(have_posts()){
    the_post(); 
    pagesBanner(); 
    ?>
    <!--- Dynamic About Aletta HTML Content Here --->
    <main class="main_container">
      <h2 class="title__secondary">Meet Miss Aletta</h2>
      <section>
          <div class="page-wrapper aletta_bio">
            <div class="col" id="aletta__bio_content">
              <h3 class="title__tertiary owner__name">Alicia Mendez</h3>
              <h4 class="owner__title"> CEO &amp; BRAND PRESIDENT</h4>
              <?php the_content();?>
            </div>
            <div class=" col" id="img__wrapper">
              <?php the_post_thumbnail();?>
            </div>
          </div>
      </section>
    </main>
 <?php 
  }  
get_footer(); 
?>