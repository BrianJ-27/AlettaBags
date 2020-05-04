<?php
  get_header();
  while(have_posts()){
    the_post(); 
    pagesBanner();
   ?>
    <!--- Dynamic Customer Support HTML Content Here --->
    <main class="main_container"> 
      <section>
        <h2 class="title__secondary">Customer Support</h2>
          <p class="form__comment">Contact Aletta Bags
              We are always happy to hear from you. Give us a call at one of the numbers below,
              or send us a message using this form (we’ll be sure to get back to you within 24 hours).
            </p>
            <p class="form__contact_number">Contact Us: <span class="aletta__contact">1-813-906-6197</span> (U.S.)</p>
            <?php echo do_shortcode('[wpforms id="140"]'); ?>
      </section>
    </main> 
<?php 
  }
get_footer();
?>