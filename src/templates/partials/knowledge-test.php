<form method="post">
  <?php foreach ($knowledge_test as $key=>$data): ?>
    <?php echo $data; ?>
    <?php for ($i = 1; $i <= 5; $i++): ?>
      <input name="question_<?php echo $key + 1; ?>" id="question_<?php echo $key + 1; ?>_<?php echo $i; ?>" type="radio" value="<?php echo $i; ?>" <?php if ($i === 1) : ?> checked<?php endif; ?> required>
      <label for="question_<?php echo $key + 1; ?>_<?php echo $i; ?>"><?php echo $i; ?></label>
    <?php endfor; ?>
  <?php endforeach; wp_reset_postdata(); ?>
  <div>
    <button type="submit">Skicka</button>
  </div>
  <input type="hidden" name="action" value="submit_knowledge_test">
</form>