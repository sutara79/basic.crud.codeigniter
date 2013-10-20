<html>
<head>
<title>My Blog</title>
</head>
<body>
	<h1>Welcome to my Blog!</h1>
	<?php foreach ($result as $row) : ?>
		|
		<?php foreach ($row as $val) : ?>
			<?php print "{$val} |" ?>
		<?php endforeach ?>
		<br>
	<?php endforeach ?>
	<?php print $paging ?>
</body>
</html>
