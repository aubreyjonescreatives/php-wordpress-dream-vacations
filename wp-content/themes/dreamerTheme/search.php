<?php get_header(); ?>


<div class="row">
   
<div class="column">

<div class="searchInfo">

<h1 class="searchHeader" >Search Results</h1>



<?php while ( have_posts() ) : the_post(); ?>
<?php the_title( '<h2>', '</h2>'); ?>
<?php the_excerpt(); ?>
<?php endwhile; ?>
</div>
</div>
</div>

<?php get_footer(); ?>