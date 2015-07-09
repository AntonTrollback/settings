
<div class="Calendar">
  <div class="Calendar-header">
    <div class="Type Type--plain">
      <h2 for="email">Settings kalender</h2>
    </div>
  </div>

  <ul>
    <?php foreach ( $events as $event ): ?>
      <li class="Calendar-item u-cf">
        <div class="Calendar-date">
          <div class="Calendar-month">
            <span><?php echo $event['month']; ?></span>
          </div>
          <div class="Calendar-day">
            <span><?php echo $event['day']; ?></span>
          </div>
        </div>

        <a class="Calendar-body" href="https://facebook.com/events/<?php echo $event['id']; ?>">
          <h2><?php echo $event['name']; ?></h2>
          <p class="u-colorGreen u-sm-show"><?php echo $event['desc']; ?></p>
        </a>
      </li>
    <?php endforeach; ?>
  </li>
</div>
