<?php
	$hlm='';
	if (isset($_GET['page'])) {
		$hlm=$_GET['page'];
	}

	$current_page=$hlm;

	switch ($hlm) {
		case 'home':
			$hlm="include 'pages/home.php';";
			break;

		case 'readmore':
			$hlm="include 'pages/readmore.php';";
			break;

		case 'category':
			$hlm="include 'pages/category.php';";
			break;

		case 'search':
			$hlm="include 'pages/searchResult.php';";
			break;

		case 'contact':
			$hlm="include 'pages/contact.php';";
			break;

		case 'about':
		$hlm="include 'pages/about.php';";
		break;
	}

	$content=$hlm;
?>
