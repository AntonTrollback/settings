<?php

$score = $knowledge_test_success['score'];
$body = $knowledge_test_success['body'];

$theme = array('u-colorOrange', 'u-colorBlue', 'u-colorPinkDark', 'u-colorDiplomeringPrimary', 'u-colorGreen')[$score - 1];

?>

<div class="Knowledge Knowledge--success">
  <div class="Knowledge-resultBody">
    <div class="Knowledge-figureWrap">
      <div class="Knowledge-figure <?php echo $theme; ?>"></div>
      <div class="Knowledge-figure Knowledge-figure--alt <?php echo $theme; ?>"></div>
    </div>

    <div class="Knowledge-resultPrimaryText">
      <div class="Type <?php echo $theme; ?>">
        <?php echo $body; ?>
      </div>
    </div>

    <div class="ShareWrap">
      <script src="https://cdn.jsdelivr.net/sharer.js/latest/sharer.min.js"></script>
      <div class="Type ShareWrap-title">
        <h2 class="u-colorPinkDark">Tipsa andra!</h2>
      </div>

      <button
        class="Share Share--facebook sharer button"
        data-sharer="facebook"
        data-url="http://settings.se/barometer">
        Facebook
      </button>
      <button
        class="Share Share--linkedin sharer button"
        data-sharer="linkedin"
        data-url="http://settings.se/barometer">
        LinkedIn
      </button>
      <button
        class="Share Share--twitter sharer button"
        data-sharer="twitter"
        data-title="Hur normkreativ är du på jobbet? Gör testet! 💫"
        data-url="http://settings.se/barometer">
        Twitter
      </button>
      <button
        class="Share Share--email sharer button"
        data-sharer="email"
        data-title="Gör testet! 💫"
        data-subject="Hur normkreativ är du på jobbet?"
        data-url="http://settings.se/barometer">
        E-post
      </button>
    </div>
  </div>

  <div class="Knowledge-diplomeraSection">
    <img class="Knowledge-diplomeraLogo" src="<?php asset_url('src/images/diplomeringen-white.svg'); ?>" alt="Normkreativt ledarskap – Diplomeringen">
    <div class="Knowledge-diplomeraBody">
      <div class="Type Knowledge-diplomeraText">
        <p>Vår 1-åriga utbildning möjliggör för arbetsplatser, organisationer och högskolor att blir mer socialt hållbara, tar tillvara på mänskliga resurser och bli fria från diskriminering.</p>
      </div>
      <a href="/diplomering" class="Knowledge-button Knowledge-diplomera">Diplomera!</a>
    </div>
  </div>
</div>
