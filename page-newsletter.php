<?php
  get_header();
  while(have_posts()){
    the_post(); 
    pagesBanner();
   ?>
    <!--- Dynamic FAQ HTML Content Here --->
    <main class="main_container">
      <section>
      <h2 class="title__secondary">Our Newsletter</h2>
        <div class="page-wrapper">
            <div class="newsletter" style=" background: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url('<?php echo get_theme_file_uri("/assests/img/raw/anna-hamilton-e5IMVSjZ1dA-unsplash.jpg")?>'); background-position: center;
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
                <?php echo do_shortcode('[wpforms id="107"]')?>
              </div>
            </form>
          </div>
        </div>
        </div>
      </section>
    </main>
<?php 
  }
get_footer();
?>