<form method="post" class="js-knowledgeTest Knowledge" novalidate>

  <div class="Knowledge-intro">
    <div class="Type">
      <h1 class="Knowledge-title">Har du koll på hur normkreativ du är på jobbet?</h1>
      <p>Vi ser kunskap som ett spektrum, inte som en tävling och därför har vi skapat ett test som fungerar som en barometer. Vi vänder oss speciellt till dig som har extra ansvar på din arbetsplats. Det är hos dig kunskapen måste finnas för att sedan kunna få snurr i resten av verksamheten.</p>
    </div>
    <button class="Knowledge-button Knowledge-begin js-begin" type="button">Starta testet!</button>
  </div>

  <div class="Knowledge-questions is-hidden">

    <?php foreach ($knowledge_test as $key=>$data): ?>
      <article class="Knowledge-question">
        <p class="Knowledge-questionText"><?php echo $data; ?></p>
        <div class="Knowledge-range">
          <div class="Range">
            <?php for ($i = 1; $i <= 5; $i++): ?>
              <div class="Range-choice">
                <div class="Range-choiceInner">
                  <input class="Range-input" name="question_<?php echo $key + 1; ?>" id="question_<?php echo $key + 1; ?>_<?php echo $i; ?>" type="radio" value="<?php echo $i; ?>" required>
                  <div class="Range-figure" role="presentational"></div>
                  <label class="Range-label" for="question_<?php echo $key + 1; ?>_<?php echo $i; ?>">
                    <?php echo $i; ?>
                  </label>
                </div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
      </article>
    <?php endforeach; wp_reset_postdata(); ?>

    <button class="Knowledge-button Knowledge-submit" type="submit">Visa resultat! <span class="Knowledge-hint">Alla frågor är inte besvarade!</span></button>

    <input type="hidden" name="action" value="submit_knowledge_test">
  </div>

</form>
