<form method="post" class="js-knowledgeTest">
  <?php foreach ($knowledge_test as $key=>$data): ?>
    <article>
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
                <div class="Range-square" role="presentational"></div>
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
  <div>
    <button class="Button" type="submit">Skicka</button>
  </div>
  <input type="hidden" name="action" value="submit_knowledge_test">
</form>
<style>
  .js-explaination {
    font-size: 13px;
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
  }
  button[data-explaination] {
    color: black;
    text-decoration: underline;
  }
</style>