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
			// connecting Main
			require($_SERVER['DOCUMENT_ROOT'].'/partials/pages/home.php');
			
			// connecting Footer
			require($_SERVER['DOCUMENT_ROOT'].'/partials/footer.php');
			?>

		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

<?php
// connecting Footer
require($_SERVER['DOCUMENT_ROOT'].'/partials/scripts.php');
?>
