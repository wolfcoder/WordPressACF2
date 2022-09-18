<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cargomatic
 */

$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$logo = get_field("logo","option");
$menu_toggle_icon = get_field("menu_toggle_icon","option");
$faficon = get_field("faficon","option");
$close_toggle_icon = get_field("close_toggle_icon","option");
$login_link = get_field("login_link","option");
$login_icon = get_field("login_icon","option");
$sign_link = get_field("sign_link","option");
$menu = get_field("menu","option");

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php if($faficon){ echo $faficon['url'];} ?>" type="image/x-icon">

	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">

	<!-- Slick -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<!-- Slick Theme -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- Style -->
	<link rel="stylesheet" href="<?php echo $themeurl; ?>/assets/css/theme.min.css?time=<?php echo time(); ?>">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>

	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="<?php echo $themeurl; ?>/assets/js/theme.js?time=<?php echo time(); ?>"></script>

	<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=exg1loldr5pur6vn698fkq" async="true"></script>

	<script>
		// $(document).on('click', 'a[target="_blank"]', function() {
		// 	event.preventDefault();
		// 	var yesno = confirm("Sure you want to go to an external source?");
		// 	if (yesno) window.open($(this).attr('href'));
		// });

		jQuery(document).ready(function(){
			jQuery('.replace-placeholder input').keyup(function() {
				if($.trim(jQuery(this).val())) {
					jQuery(this).parents().addClass('placeholder-active');
				} else {
					jQuery(this).parents().removeClass('placeholder-active');
				}
			});
			jQuery('.replace-placeholder textarea').keyup(function() {
				if($.trim(jQuery(this).val())) {
					jQuery(this).parents().addClass('placeholder-active');
				} else {
					jQuery(this).parents().removeClass('placeholder-active');
				}
			});
		});
	</script>

	<style>
		.replace-placeholder {position: relative;display: block;}
		.replace-placeholder label {position: absolute;right: 0;font-weight: 600;font-size: 16px;line-height: 30px;color: #fff;width: 285px;max-width: 100%;text-align: left;pointer-events: none;}
		.replace-placeholder.placeholder-active label {opacity: 0;}
		.contact-form-content .replace-placeholder,
		.sign-up-form .form-area form .replace-placeholder {
			position: relative;
			display: block;
			flex: 0 0 43.183%;
			max-width: 43.183%;
		}
		@media (max-width: 767.98px) {
			.contact-form-content .replace-placeholder,
			.sign-up-form .form-area form .replace-placeholder {
				flex: 0 0 100%;
				max-width: 100%;
			}
		}
		.contact-form-content .replace-placeholder label,
		.half-form-overlap-content .left-area .form-area form label,
		.sign-up-form .form-area form .replace-placeholder label {
			color: #64727F;
			width: 100%;
		}
		.contact-form-content .replace-placeholder.width-100 {
			flex: 0 0 100%;
			max-width: 100%;
		}
		.contact-form-content .replace-placeholder.width-100 textarea {
			width: 100%;
		}
		.contact-form-content .replace-placeholder.width-100 label {
			left: 10px;
			top: 28px;
		}
		.sign-up-form .form-area form .replace-placeholder input {
			width: 100%;
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header-content">
						<nav class="navbar px-0 navbar-expand-lg navbar-light">
							<?php
							if($logo){
								?>
								<a class="navbar-brand" href="<?php echo site_url('/') ?>"><img src="<?php echo $logo['url'] ?>"
                                                                                                alt="<?php echo $logo['alt'] ?>"
                                                                                                class="img-fluid"><span class="sr-only">logo
                                    </span></a>
								<?php
							}

							?>
							<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
								<?php
								if($menu_toggle_icon){
									?>
									<img src="<?php echo $menu_toggle_icon['url'] ?>" alt="<?php echo $menu_toggle_icon['alt'] ?>" class="img-fluid open">
									<?php
								}
								if($close_toggle_icon){
									?>
									<img src="<?php echo $close_toggle_icon['url'] ?>" alt="<?php echo $close_toggle_icon['alt'] ?>" class="img-fluid close">
									<?php
								}
								?>
							</button>
							<div class="collapse navbar-collapse" id="navbarText">
								<ul class="navbar-nav mx-auto">
									<?php
									foreach($menu as $data){
										$primary_link = $data['primary_link'];
										$submenu = $data['submenu'];
										$submenu_link = $data['submenu_link'];
										if($submenu){
											?>
											<li class="nav-item">
												<?php
												if($primary_link){
													?>
													<a class="nav-link" <?php echo $primary_link['url'] != '#' ? 'href="'.$primary_link["url"].'"' : '' ?> target="<?php echo $primary_link['target'] ? $primary_link['target'] : '_self' ?>" ><?php echo $primary_link['title'] ?></a>
													<?php
												}

												?>
												<div class="mobile-submenu-toggle d-lg-none"><i class="fas fa-caret-down"></i></div>

												<div class="submenu">
													<?php
													if($submenu_link){
														foreach($submenu_link as $sub){
															$primary_sub_menu_link = $sub['primary_sub_menu_link'];
															$sub_menu_link = $sub['sub_menu_link'];
															?>
															<div class="submenu-item">
																<?php
																if($primary_sub_menu_link){
																	?>
																	<h3><a class="text-reset" <?php echo $primary_sub_menu_link['url'] != '#' ? 'href="'.$primary_sub_menu_link["url"].'"' : '' ?> target="<?php echo $primary_sub_menu_link['target'] ? $primary_sub_menu_link['target'] : '_self' ?>" ><?php echo $primary_sub_menu_link['title'] ?></a></h3>
																	<?php
																}
																?>
																<ul>
																	<?php
																	if($sub_menu_link){
																		foreach($sub_menu_link as $content){
																			$link = $content['link'];
																			?>
																			<li><a <?php echo $link['url'] != '#' ? 'href="'.$link["url"].'"' : '' ?> target="<?php echo $link['target'] ? $link['target'] : '_self' ?>"><?php echo $link['title'] ?></a></li>
																			<?php
																		}
																	}

																	?>
																</ul>
															</div>
															<?php
														}
													}


													?>
												</div>
											</li>
											<?php
										} else {
											?>
											<li class="nav-item">
												<?php
												if($primary_link){
													?>
													<a class="nav-link" <?php echo $primary_link['url'] != '#' ? 'href="'.$primary_link["url"].'"' : '' ?> target="<?php echo $primary_link['target'] ? $primary_link['target'] : '_self' ?>" ><?php echo $primary_link['title'] ?></a>
													<?php
												}

												?>
											</li>
											<?php
										}
									}

									?>
								</ul>
								<span class="navbar-right">
									<?php
									if($login_link){
										$defaulticon = site_url('/') .'wp-content/uploads/2021/01/login-icon.svg';
										if($login_icon['url'] == ''){
											$login_icon['url'] = $defaulticon;
											$login_icon['alt'] = 'default-icon';
										}
										?>
										<a <?php echo $login_link['url'] != '#' ? 'href="'.$login_link["url"].'"' : '' ?> target="<?php echo $login_link['target'] ? $login_link['target'] : '_self' ?>" class="login-menu"><img src="<?php echo $login_icon['url'] ?>" alt="<?php echo $login_icon['alt'] ?>"><?php echo $login_link['title'] ?></a>
										<?php
									}
									if($sign_link){
										?>
										<a <?php echo $sign_link['url'] != '#' ? 'href="'.$sign_link["url"].'"' : '' ?> target="<?php echo $sign_link['target'] ? $sign_link['target'] : '_self' ?>" class="btn"><?php echo $sign_link['title'] ?></a>
										<?php
									}

									?>
								</span>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
