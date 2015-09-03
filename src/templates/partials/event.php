<<?php echo $event['url'] ? 'a href="' . $event['url'] . '" class="Event Event--linked"' : 'div class="Event"'; ?>>
  <div class="Event-figure">
    <div class="Event-month">
      <span><?php echo $event['month']; ?></span>
    </div>
    <div class="Event-day">
      <span><?php echo $event['day']; ?></span>
    </div>
  </div>

  <div class="Event-body">
    <div class="Type Type--plain">
      <span class="Event-title"><?php echo $event['title']; ?><br></span>
      <span class="u-colorGreen u-sm-show"><?php echo $event['desc']; ?></span>
    </div>
  </div>
</<?php echo $event['url'] ? 'a' : 'div' ?>>
