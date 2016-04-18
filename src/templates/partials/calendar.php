<div class="Calendar">
  <div class="Calendar-heading">
    <div class="Type Type--plain">
      <h2>Settings kalendarium</h2>
      <span class="Calendar-prev">
        <a href="https://www.facebook.com/settingsnormkreativ/events">Tidigare evenemang</a>
      </span>
    </div>
  </div>

  <div>
    <?php foreach ($events as $event): set_query_var('event', $event); ?>
      <?php partial('event'); ?>
    <?php endforeach; ?>
  </div>
</div>
