<?php $this->load->helper(array('url', 'html')) ?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>TestBlog</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<header><h1>TestBlog</h1></header>
			<nav>
				<?php print ul(
					array(
						anchor('entries/index', 'Home'),
						anchor('entries/insert', 'Insert')
					),
					array('class' => 'nav nav-pills')
				)	?>
			</nav>
