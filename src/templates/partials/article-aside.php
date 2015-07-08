<?php $title = $aside_title ? $aside_title : get_the_title(); ?>

<aside class="Section-aside">
  <a href="<?php the_permalink(); ?>">
  <div class="Type Type--plain u-colorPurple">
    <?php image(); ?>
    <p><?php echo $title; ?></p>
  </div>
  </a>
</aside>
