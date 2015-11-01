<!DOCTYPE html>
<html class="Site no-script" <?php language_attributes(); ?>>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<meta property="og:image" content="<?php share_img_url(); ?>">
<meta name="theme-color" content="#111">
<link rel="mask-icon" href="<?php asset_url( 'icon.svg' ); ?>" color="#111111">
<link rel="shortcut icon" href="<?php asset_url( 'favicon.ico' ); ?>">
<link rel="stylesheet" href="<?php asset_url( 'src/styles/settings.css' ); ?>">
<script>document.documentElement.classList.remove('no-script');</script>

<body class="Site-body">

  <?php partial( 'navigation' ); ?>
