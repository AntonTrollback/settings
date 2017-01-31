<form method="post" class="js-knowledgeTest Knowledge">

  <div class="Knowledge-intro">
    <div class="Type u-colorPurpleAlt">
      <h1 class="u-colorOrange Knowledge-title">Har du koll på hur normkreativ du är på jobbet?</h1>
      <p>Vi ser kunskap som ett spektrum, inte som en tävling och därför har vi skapat ett test som fungerar som en barometer. Vi vänder oss speciellt till dig som har extra ansvar på din arbetsplats. Det är hos dig kunskapen måste finnas för att sedan kunna få snurr i resten av verksamheten.</p>
    </div>
    <button class="Knowledge-begin js-begin" type="button">Starta testet!</button>
  </div>

  <?php foreach ($knowledge_test as $key=>$data): ?>
    <article class="Knowledge-question">
      <div class="u-textCenter">
        <div class="Type Type--plain">
          <h1 class="Type-h3 u-colorTeal">
            <?php echo $data; ?>
          </h1>
        </div>
      </div>
      <div class="u-textCenter">
        <div class="Range">
          <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="Range-choice">
              <div class="Range-choiceInner">
                <input class="Range-input" name="question_<?php echo $key + 1; ?>" id="question_<?php echo $key + 1; ?>_<?php echo $i; ?>" type="radio" value="<?php echo $i; ?>" <?php if ($i === 1) : ?> checked<?php endif; ?> required>
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

  <div style="display: none;">
    <button class="Button" type="submit">Skicka</button>
  </div>

  <input type="hidden" name="action" value="submit_knowledge_test">

</form>
