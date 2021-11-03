<?php get_header(); ?>



<div class="row">
   
    <div class="column">
    
    <div class="searchInfo">
    
    <h1 class="searchHeader" >About Us</h1>
    
    






<?php while ( have_posts() ) : the_post(); ?>
<?php the_title( '<h1>', '</h1>'); ?>
<?php the_content(); ?>
<?php endwhile; ?>

</div>
</div>
</div>


<?php get_footer(); ?>