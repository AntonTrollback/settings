<?php $title = $aside_title ? $aside_title : get_the_title(); ?>

<aside class="Section-aside">
  <a class="u-blockLink" href="<?php the_permalink(); ?>">
    <div class="Section-asideFigure">
      <?php image(); ?>
    </div>
    <div class="Type Type--plain u-colorPurple">
      <p><?php echo $title; ?></p>
    </div>
  </a>
</aside>
