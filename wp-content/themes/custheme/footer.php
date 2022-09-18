<?php
$column_1 = get_field( "column_1", "option" );

$site_brand  = $column_1['site_brand'];
$description = $column_1['description_menu'];
$location_1  = $column_1['location_1'];
$mail_1      = $column_1['mail_1'];
$location_2  = $column_1['location_2'];
$mail_2      = $column_1['mail_2'];
$linkedin    = $column_1['linkedin'];
$youtube     = $column_1['youtube'];

$column_2    = get_field( "column_2", "option" );
$header_2    = $column_2['header_title'];
$child_menu2 = $column_2['child_menu'];

$column_3 = get_field( "column_3", "option" );
$column_4 = get_field( "column_4", "option" );

$copyright = get_field("copyright", "option")
?>
<footer>
    <div class="wrapper">
        <ul class="main-list">
            <li class="header-menu">
                <a href="<?php echo $site_brand['url']; ?>"><?php echo $site_brand['title']; ?></a>
                <p><?php echo $description; ?></p>
                <ul class="child-menu">
                    <li class="location">
                        <a href="<?php echo $location_1['url']; ?>"><?php echo $location_1['title']; ?></a>
                    </li>
                    <li class="mail">
                        <a <?php echo 'href="mailto:' . $mail_1 . '"'; ?>><?php echo $mail_1; ?></a>
                    </li>
                    <li class="location">
                        <a href="<?php echo $location_2['url']; ?>"><?php echo $location_2['title']; ?></a>
                    </li>
                    <li class="mail">
                        <a <?php echo 'href="mailto:' . $mail_2 . '"'; ?>><?php echo $mail_2; ?></a>
                    </li>
                    <li class="linkedin">
                        <a href="<?php echo $linkedin['url']; ?>" target="_blank"><?php echo $linkedin['title']; ?></a>
                    </li>
                    <li class="youtube">
                        <a href="<?php echo $youtube['url']; ?>" target="_blank"><?php echo $youtube['title']; ?></a>
                    </li>
                </ul>
            </li>
            <li class="header-menu">
                <a href="<?php echo $header_2['url']; ?>"><?php echo $header_2['title']; ?></a>
                <ul class="child-menu">
					<?php if ( $child_menu2 ) {
						foreach ( $child_menu2 as $menu ) {
							$item   = $menu['link'];
							$is_big = $menu['is_big'];
							?>
                            <li><a href="<?php echo $item['url'] ?? '#'; ?>"
                                   class="<?php echo $is_big ? 'big' : ''; ?>"> <?php echo $item['title'] ?? '&nbsp;'; ?></a>
                            </li>
							<?php
						}
					} ?>
                </ul>
            </li>
            <li class="header-menu">
				<?php if ( $column_3 ) {
					foreach ( $column_3 as $data3 ) {
						$header = $data3['child_menu_header'];
						$menus   = $data3['child_menu'];
						?>
                        <a href="#"><?php echo $header['title']; ?></a>
                        <ul class="child-menu">
							<?php
							if ( $menus ) {
								foreach ( $menus as $menu ) {
                                    $item = $menu['link']
									?>
                                    <li><a href=""><?php echo $item['title']; ?></a></li>
									<?php
								}
							}
							?>

                        </ul>
                        <br>
						<?php
					}
				}; ?>
            </li>
            <li class="header-menu">
	            <?php if ( $column_4 ) {
		            foreach ( $column_4 as $data4 ) {
			            $header = $data4['child_menu_header'];
			            $menu   = $data4['child_menu'];
			            $is_button = $data4['is_button'];
			            ?>
                        <a href="#" class="<?php echo $is_button ? 'track-btn' : ''; ?>"><?php echo $header['title']; ?></a>
                        <ul class="child-menu">
				            <?php
				            if ( $menu ) {
					            foreach ( $menu as $data ) {
						            $item = $data['link']
						            ?>
                                    <li><a href=""><?php echo $item['title']; ?></a></li>
						            <?php
					            }
				            }
				            ?>
                        </ul>
                        <br>
			            <?php
		            }
	            }; ?>
            </li>
        </ul>
    </div>
    <div class="copyright">
        <?php echo $copyright ;?>
    </div>
</footer>

</body>
</html>
