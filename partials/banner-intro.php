<div class="Banner">
  <div class="Banner-background"
       data-anchor-target=".Banner"
       data-top="transform: translateY(0%)"
       data-top-center="transform: translateY(-20%)"
       style="background-image: url(<?php the_image_url( 'size-banner-hq' ); ?>)">
  </div>

  <?php if ($post->post_name === 'start'): ?>
    <div class="Banner-content">
      <div class="BannerLogo">
        <div class="BannerLogo-type">
          <img src="<?php get_asset_url( 'settings.png' ); ?>" alt="Settings">
        </div>
        <h1>
          <span class="u-hiddenVisually">Settings:</span>
          <div class="BannerLogo-sub">Normkreativa möjligheter</div>
        </h1>
        <div class="BannerLogo-diamond"
         data-anchor-target=".Banner"
         data-top="transform: rotate(45deg) translate(-50%, -50%)"
         data-top-bottom="transform: rotate(45deg) translate(-30%, -30%)"></div>
      </div>
    </div>
  <?php endif; ?>
</div>
