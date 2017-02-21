<?php
$link_url = get_field('link_url');
$highlight = get_field('highlight');
$highlight_text = get_field('highlight_title');
$diplomeringen_design = get_field('show_diplomering_design');

$has_aside = $link_url || $highlight;
$is_collapsed = (is_page() || isset($is_home)) && $has_aside;

// Define text color theme for posts
global $theme_key;
$theme_key = (is_page() || isset($is_home)) ? 0 : $theme_key;

$title_theme = array('u-colorTeal', 'u-colorPinkDark', 'u-colorGreen', 'u-colorOrange')[$theme_key];
$body_theme = array('u-colorPurple', '', 'u-colorPurpleAlt', 'u-colorBlue')[$theme_key];

if ($diplomeringen_design) {
  $title_theme = 'u-colorDiplomeringPrimary';
  $body_theme = 'u-colorDiplomeringSecondary';
}
?>

<div class="Section u-cf <?php echo $has_aside ? '' : 'Section--full '; ?>">
  <div class="Section-main">
    <?php if ($is_collapsed): ?>
    <div class="Expander">
    <?php endif; ?>

      <div class="Type <?php echo $body_theme; ?>">
        <?php if ($diplomeringen_design): ?>
          <div class="Type-logoWrap">
            <img class="Type-logo" src="<?php asset_url('src/images/diplomeringen.svg'); ?>" alt="Normkreativt ledarskap – Diplomeringen">
          </div>
          <img class="Type-logo--fixed" role="presentation" src="<?php asset_url('src/images/diplomeringen-black.svg'); ?>" alt="Normkreativt ledarskap – Diplomeringen">
          <h1 class="u-hiddenVisually"><?php the_title(); ?></h1>
        <?php else: ?>
          <h1 class="<?php echo $title_theme; ?>"><?php the_title(); ?></h1>
        <?php endif; ?>

        <?php the_content(); ?>

        <?php if ($link_url): ?>
        <?php partial('article-button-inline'); ?>
        <?php endif; ?>
      </div>

    <?php if ($is_collapsed): ?>
      <div class="Expander-action u-colorPurple">
        <button type="button" class="Expander-actionText u-link">Läs mer</button>
      </div>
    </div>
    <?php endif; ?>
  </div>


  <?php
  if ($link_url) {
    partial('article-button');
  }

  if ($highlight) {
  	$post = $highlight;
  	setup_postdata($post);
    set_query_var('aside_title', $highlight_text);
    partial('article-aside');
    wp_reset_postdata();
  }
  ?>
</div>
