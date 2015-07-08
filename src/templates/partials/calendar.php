<ul class="Calendar">
  <?php foreach ( $events as $event ): ?>
    <li class="Calendar-event">
      <div class="Calendar-date">
        <span class="Calendar-month"><?php echo $event['month']; ?></span>
        <span class="Calendar-day"><?php echo $event['day']; ?></span>
      </div>

      <a class="Calendar-body" href="https://facebook.com/events/<?php echo $event['id']; ?>">
        <h2><?php echo $event['name']; ?></h2>
        <p class="u-colorGreen"><?php echo $event['desc']; ?></p>
      </a>
    </li>
  <?php endforeach; ?>
</li>
