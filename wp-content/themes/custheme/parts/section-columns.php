<div class="row">
    <div class="col">

		<?php
		$columns = get_sub_field( 'columns' );

		foreach ( $columns as $column ): ?>
            <div class="container">
                <h3><?php echo $column['title']; ?></h3>
                <p><?php echo $column['content']; ?></p>
                <a href="<?php echo $column['link']['url']; ?>"> Find out More </a>
            </div>
		<?php endforeach; ?>
    </div>
</div>
