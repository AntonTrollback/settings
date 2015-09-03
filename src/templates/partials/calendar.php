<div class="Calendar">
  <div class="Calendar-heading">
    <div class="Type Type--plain">
      <h2 for="email">Settings tipsar</h2>
    </div>
  </div>

  <div>
    <?php foreach ( $events as $event ): set_query_var( 'event', $event ); ?>
      <?php partial( 'event' ); ?>
    <?php endforeach; ?>
  </div>
</div>
