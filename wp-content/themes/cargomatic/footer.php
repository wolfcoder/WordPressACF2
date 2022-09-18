<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cargomatic
 */

$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$logo_footer = get_field("logo_footer","option");
$site_brand = get_field("site_brand","option");
$location = get_field("location","option");
$email = get_field("email","option");
$phone = get_field("phone","option");
$footer_menu_toggle_title = get_field("footer_menu_toggle_title","option");
$footer_social_links = get_field("footer_social_links","option");
$download_apps_links = get_field("download_apps_links","option");
$footer_links = get_field("footer_links","option");
$copyright_text = get_field("copyright_text","option");
$copyright_text_mobile = get_field("copyright_text_mobile","option");
$icon_close_menu_mobile = get_field("icon_close_menu_mobile","option");
$icon_toggle_menu_mobile = get_field("icon_toggle_menu_mobile","option");
$privacy_link = get_field("privacy_link","option");
$terms_link = get_field("terms_link","option");
?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="footer-content">
          <div class="footer-column">
            <div class="footer-logo">
			  <?php
			  	if($logo_footer){
					  ?>
              			<a href="<?php echo site_url('/') ?>"><img src="<?php echo $logo_footer['url'] ?>" alt="<?php echo $logo_footer['alt'] ?>" class="img-fluid" width="258"><span class="sr-only">logo footer</span></a>
					  <?php
				  }
			 
			  ?>
            </div>
			<?php 
				if($site_brand){
					?>
					<h3><?php echo $site_brand; ?></h3>
					<?php
				}
			
			?>
            <div class="cargomatic-info">
			  <?php
			  	if($location){
					  ?>
						<div class="location">
							<p><a href="#"><?php echo $location; ?></a></p>
						</div>
					  <?php
				  }
				if($email){
					?>
					<div class="email">
						<p><a href="<?php echo $email['url']; ?>" target="<?php echo $email['target'] ? $email['target'] : '_self'; ?>"><?php echo $email['title']; ?></a></p>
					</div>
					<?php
				}
				if($phone){
					?>
					<div class="phone">
						<p><a href="<?php echo $phone['url']; ?>" target="<?php echo $phone['target'] ? $phone['target'] : '_self'; ?>"><?php echo $phone['title']; ?></a></p>
					</div>
					<?php
				}
			  ?>



            </div>
            <div class="footer-social">
			<?php 
                  foreach($footer_social_links as $data){
                    $icon = $data['icon'];
                    $link = $data['link_social_media'];
                    if($icon == 'linked'){
                      ?>
                        <a <?php echo $link != '#' ? 'href="'.$link.'"' : '' ?> target="_blank"><i class="fab fa-linkedin-in"></i><span class="sr-only">open linkedin in new tab</span></a>
                      <?php
                    }
                    if($icon == 'facebook'){
                      ?>
                        <a <?php echo $link != '#' ? 'href="'.$link.'"' : '' ?> target="_blank"><i class="fab fa-facebook-f"></i><span class="sr-only">open facebook in new tab</span></a>
                      <?php
                    }
                    if($icon == 'youtube'){
                      ?>
                        <a <?php echo $link != '#' ? 'href="'.$link.'"' : '' ?> target="_blank"><i class="fab fa-youtube"></i><span class="sr-only">open youtube in new tab</span></a>
                      <?php
                    }
                    if($icon == 'twitter'){
                      ?>
                        <a <?php echo $link != '#' ? 'href="'.$link.'"' : '' ?> target="_blank"><i class="fab fa-twitter"></i><span class="sr-only">open twitter in new tab</span></a>
                      <?php
                    }
                    if($icon == 'instagram'){
                      ?>
                        <a <?php echo $link != '#' ? 'href="'.$link.'"' : '' ?> target="_blank"><i class="fab fa-instagram"></i><span class="sr-only">open instagram in new tab</span></a>
                      <?php
                    }
                  }
              ?>
            </div>
            <div class="download-apps">
			  <?php 
			  	if($download_apps_links){
					foreach($download_apps_links as $data){
						$icon = $data['icon'];
						$link = $data['link'];
						if($icon){
							?>
							<a <?php echo $link['url'] != '#' ? 'href="'.$link["url"].'"' : '' ?> target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>" ><img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="img-fluid"></a>
						  <?php
						}

					}
				}
			 
			  ?>
            </div>
          </div>
          <div class="mobile-footer-menu-toggle d-md-none">
            <?php echo $footer_menu_toggle_title != '' ? $footer_menu_toggle_title : 'Menu' ?> <img src="<?php echo $icon_toggle_menu_mobile['url'] ?>" alt="<?php echo $icon_toggle_menu_mobile['alt'] ?>" class="img-fluid" width="20"><img src="<?php echo $icon_close_menu_mobile['url'] ?>" alt="<?php echo $icon_close_menu_mobile['alt'] ?>" class="img-fluid d-none" width="20">
		  </div>
		  <?php 
		  	if($footer_links){
				  foreach($footer_links as $data){
					  $primary_link = $data['primary_link'];
					  $sublink = $data['sublink'];
					  $sub_menu_link = $data['sub_menu_link'];

					  if($sublink){
						  ?>
							<div class="footer-column mobile-footer-menu">
								<?php
								if($primary_link){
									?>
									<h3><a <?php echo $primary_link['url'] != '#' ? 'href="'.$primary_link["url"].'"' : '' ?> target="<?php echo $primary_link['target'] ? $primary_link['target'] : '_self' ?>" ><?php echo $primary_link['title'] ?></a></h3>
									<?php
								}
								?>
									<?php
									if($sub_menu_link){
										foreach($sub_menu_link as $submenu){
											$sub_menu_link2 = $submenu['sub_menu_link'];
											$primary_sub_menu_link = $submenu['primary_sub_menu_link'];
											echo '<ul>';
											if($primary_sub_menu_link){
												echo '<li>';
												?>
												<a <?php echo $primary_sub_menu_link['url'] != '#' ? 'href="'.$primary_sub_menu_link["url"].'"' : '' ?> target="<?php echo $primary_sub_menu_link['target'] ? $primary_sub_menu_link['target'] : '_self' ?>" ><?php echo $primary_sub_menu_link['title'] ?></a>										
												<?php

											}

											if($sub_menu_link2){
												if($primary_sub_menu_link){
													echo '<ul>';
												}

												foreach($sub_menu_link2 as $sub_link2){
													$link = $sub_link2['link'];
													?>
															<li><a <?php echo $link['url'] != '#' ? 'href="'.$link["url"].'"' : '' ?> target="<?php echo $link['target'] ? $link['target'] : '_self' ?>"><?php echo $link['title'] ?></a></li>
													<?php

												}
												if($primary_sub_menu_link){
													echo '</ul>';												}
												

											}
											if($primary_sub_menu_link) {
												echo '</li>';
											}
											echo '</ul>';

										}
									}
									
									?>
							</div>
						  <?php
					  } else {
						  ?>
						<div class="footer-column mobile-footer-menu">
							<?php
							if($primary_link){
								?>
								<h3><a <?php echo $primary_link['url'] != '#' ? 'href="'.$primary_link["url"].'"' : '' ?> target="<?php echo $primary_link['target'] ? $primary_link['target'] : '_self' ?>" ><?php echo $primary_link['title'] ?></a></h3>
								<?php
							}
							?>
						</div>
						  <?php
					  }
					  
				  }
			  }
		 
		  ?>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-copyright d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
			<div class="d-none d-lg-block text-center">
			<?php 
				if($copyright_text){
					?>
					<p>
						
					<?php echo nl2br($copyright_text); ?>
					<span class="separator d-none d-lg-inline-block">|</span>
					<?php
					if($privacy_link){
						?>
						<a <?php echo $privacy_link['url'] != '#' ? 'href="'.$privacy_link["url"].'"' : '' ?> target="<?php echo $privacy_link['target'] ? $privacy_link['target'] : '_self' ?>"><?php echo $privacy_link['title']; ?></a>
						<span class="separator">|</span>
						<?php
					}
					if($terms_link){
						?>
						<a <?php echo $terms_link['url'] != '#' ? 'href="'.$terms_link["url"].'"' : '' ?> target="<?php echo $terms_link['target'] ? $terms_link['target'] : '_self' ?>"><?php echo $terms_link['title']; ?></a>
						<?php
					}
					?>
					</p>
					<?php
				} 

				?>
		  	</div>
			<div class="d-lg-none text-center">
			<?php 
				if($copyright_text_mobile){
					?>
					<p>
					<?php echo nl2br($copyright_text_mobile); ?>
					<?php
					if($privacy_link){
						?>
						<a <?php echo $privacy_link['url'] != '#' ? 'href="'.$privacy_link["url"].'"' : '' ?> target="<?php echo $privacy_link['target'] ? $privacy_link['target'] : '_self' ?>"><?php echo $privacy_link['title']; ?></a>
						<span class="separator">|</span>
						<?php
					}
					if($terms_link){
						?>
						<a <?php echo $terms_link['url'] != '#' ? 'href="'.$terms_link["url"].'"' : '' ?> target="<?php echo $terms_link['target'] ? $terms_link['target'] : '_self' ?>"><?php echo $terms_link['title']; ?></a>
						<?php
					}
					?>
					</p>
					<?php
				} 

				?>
		  	</div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
