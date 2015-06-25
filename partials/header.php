<header class="Nav" role="banner">
  <div class="Nav-wrap">
    <a class="Nav-homeLink" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <strong class="u-hiddenVisually">Startsidan</strong>
    </a>

    <nav class="Nav-inner" role="navigation">
      <svg class="Nav-logo"><use xlink:href="#logo-s"></svg>
      <?php bem_menu('primary', 'Nav'); ?>
      <svg class="Nav-logo"><use xlink:href="#logo-s"></svg>
    </nav>
  </use>
</header>