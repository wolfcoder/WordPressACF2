<?php

$background = get_sub_field( 'background' );
$text = get_sub_field( 'text' );
?>

<section class="hero" style="background-image:url(<?php echo $background; ?>)">
	<div class="hero-caption">
		<h2><?php echo $text; ?></h2>
	</div>
</section>
