<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custheme
 */

$themeurl          = get_stylesheet_directory_uri();
$siteurl           = get_option( "siteurl" );
$logo              = get_field( "logo", "option" );
$menu_toggle_icon  = get_field( "menu_toggle_icon", "option" );
$close_toggle_icon = get_field( "close_toggle_icon", "option" );
$menu              = get_field( "menu", "option" )

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microporous</title>
    <!-- Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
          integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"
          integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
            integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo $themeurl; ?>/assets/css/theme.min.css?time=<?php echo time(); ?>">
    <script src="<?php echo $themeurl; ?>/assets/js/theme.js?time=<?php echo time(); ?>" defer></script>
    <script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=yxwvxmsifcegctltzugrea"
            async="true"></script>
	<?php wp_head(); ?>
</head>
<body>
<section id="header_new" class="top-nav">
    <div class="sticky_container">
        <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container-fluid">

				<?php
				if ( $logo ) {
					?>
                    <a class="navbar-brand" href="<?php echo site_url( '/' ) ?>">
                        <img src="<?php echo $logo ?>" alt="" class="img-fluid"><span
                                class="sr-only">logo</span></a>
					<?php
				}

				?>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
					<?php
					if ( $menu_toggle_icon ) {
						?>
                        <img src="<?php echo $menu_toggle_icon ?>" alt="" class="navbar-toggler-icon">
						<?php
					}
					if ( $close_toggle_icon ) {
						?>
                        <span class="close_navbar hidden"><img src="<?php echo $close_toggle_icon ?>"
                                                               alt="close_icon"></span>
						<?php
					} ?>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <!--                        bams menu-->
						<?php
						foreach ( $menu as $data ) {
							$primary_link          = $data['primary_link'];
							$submenu               = $data['submenu'];
							$featured              = $data['featured'];
							$submenu_link_repeater = $data['submenu_link_repeater'];
							if ( $submenu ) {
								?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="<?php echo $primary_link['url'] ?? '#'; ?>"
                                       aria-expanded="false">
										<?php echo $primary_link['title']; ?>
                                    </a>
                                    <div class="dropdown-toggle"></div>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="dropdown-content">
											<?php
											if ( $submenu_link_repeater ) {
												foreach ( $submenu_link_repeater as $content ) {
													$submenu_link = $content['submenu_link'];
													?>
                                                    <a class="dropdown-item"
                                                       href="<?php echo $submenu_link['url']; ?>"><?php echo $submenu_link['title']; ?></a>
												<?php }
											} ?>
                                        </div>
                                    </div>
                                </li>
								<?php
							} else {
								if ( $featured ) {
									?>
                                    <li class="nav-item">
                                        <a class="nav-link featured-link"
                                           href="<?php echo $primary_link['url']; ?>"><?php echo $primary_link['title']; ?></a>
                                    </li>
									<?php
								} else {
									?>

                                    <li class="nav-item single-link">
                                        <a class="nav-link"
                                           href="<?php echo $primary_link['url']; ?>"><?php echo $primary_link['title']; ?></a>
                                    </li>
									<?php
								}
							}
						}
						?>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>

