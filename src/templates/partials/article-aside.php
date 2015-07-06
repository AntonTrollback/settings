<?php $title = $aside_title ? $aside_title : get_the_title(); ?>

<aside class="Site-aside">
  <div class="Type">
    <?php the_image(); ?>
    <h1 class="u-colorTeal"><?php echo $title; ?></h1>
  </div>
</aside>
