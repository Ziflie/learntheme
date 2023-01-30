<h1>This is blogpost: <?php the_title(); ?> </h1>


<div class="header-container">
   <a>published on: <?php the_date(); ?></a>
   <?php the_tags('<span><i>tag:</i></span>'); ?>
         <?php
         the_content();
         ?> 
      <span><?php comments_number(); ?></span>

      <?php
      comments_template();
      ?>

</div>