<?php
$link = '<a class="Event Event--linked" href="' . $event['url'] . '">';
$open = $event['url'] ? $link : '<div class="Event">';
$close = $event['url'] ? '</a>' : '</div>';
?>

<?php echo $open; ?>
  <div class="Event-figure">
    <div class="Event-date">
      <span><?php echo $event['month']; ?></span>
      <span><?php echo $event['year']; ?></span>
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
<?php echo $close ?>
