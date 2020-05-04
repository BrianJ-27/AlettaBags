<?php get_header();
  while(have_posts()){
    the_post(); 
    pagesBanner();
?>
<!---html goes here-->


<?php }
get_footer();?>