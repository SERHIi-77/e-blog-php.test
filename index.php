<?php
// connecting DB
require($_SERVER['DOCUMENT_ROOT'].'/configs/db.php');

// connecting Header
require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');
?>

	<div id="colorlib-page">
		<?php
			// connecting Sidebar
			require($_SERVER['DOCUMENT_ROOT'].'/partials/sidebar.php');
		?>
		<div id="colorlib-main">
			<?php
			$page = 'home';
			if (isset($_GET['p'])) {
				switch ($_GET['p']) {
					case 'photography':
						$page = 'photography';
						break;
					case 'travel':
						$page = 'travel';
						break;
					case 'fashion':
						$page = 'fashion';
						break;
					case 'about':
						$page = 'about';
						break;
					case 'contact':
						$page = 'contact';
						break;
					case 'login':
						$page = 'login';
						break;
					default:
						$page = 'home';
						break;
				}
			}

			// connect the page depending on the request
			require($_SERVER['DOCUMENT_ROOT']."/partials/pages/". $page . ".php");
			
			// connecting Footer
			require($_SERVER['DOCUMENT_ROOT'].'/partials/footer.php');
			?>

		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

<?php
// connecting Footer
require($_SERVER['DOCUMENT_ROOT'].'/partials/scripts.php');
?>
