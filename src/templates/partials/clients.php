<section class="ColoredSection">
  <div class="Type u-colorWhite">
    <h1 class="Type-h2"><?php the_field('clients_title'); ?></h1>

    <?php if (get_field('clients_body')): ?>
      <p><?php the_field('clients_body'); ?></p>
    <?php endif; ?>

    <ul class="Type-columns">
      <?php
        $items = explode(',', get_field('clients_list'));
        foreach ($items as $item) { echo '<li>' . trim($item); }
      ?>
    </ul>
  </div>
</section>
