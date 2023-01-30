<html>
    <head>
 <?php
 get_header();
 ?>
  
</head>

<h1>This is page: <?php the_title(); ?> </h1>
    <article class="frontpage-container">
       <div>
        <h1>
       <?php
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
                    the_content(); 
                }
            }
        ?>
        </h1>
        </div>

  

    </article>
<?php
get_comments(); ?>

   <?php
get_footer()
?>

</html>
     