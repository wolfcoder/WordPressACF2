<?php 
$event_name = get_sub_field("event_name");
$location = get_sub_field("location");
$date = get_sub_field("date");
$website = get_sub_field("website");
$booth = get_sub_field("booth");

?>
<div class="event-detail">
          <h3>Event Details</h3>
          <p><span class="title">Event name:</span> <?php echo $event_name; ?></p>
          <p><span class="title">Location:</span> <?php echo $location; ?></p>
          <p><span class="title">Date:</span> <?php echo $date; ?></p>
          <p><span class="title">Website:</span> <?php echo $website; ?></p>
          <p><span class="title">Booth:</span> <?php echo $booth; ?></p>
</div>