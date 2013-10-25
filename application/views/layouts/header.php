<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title><?php print lang('app_title') ?></title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<?php print link_tag('assets/css/common.css') ?>
	</head>
	<body>
		<div class="container">
			<header><h1><?php print lang('app_title') ?></h1></header>

			<!-- メッセージ表示欄 -->
			<?php if ($msg = $this->session->userdata('msg')) : ?>
				<div class="alert alert-<?php print $msg[0] ?> fade in">
					<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
					<?php print $msg[1] ?>
				</div>
				<?php $this->session->unset_userdata('msg') ?>
			<?php endif ?>

			<!-- グローバルナビゲーション -->
			<nav>
				<ul class="nav nav-pills">
					<li<?php if ($method == 'index') print ' class="active"' ?>>
						<?php print anchor(
							'entries/index', ' ',
							array(
								'class' => 'glyphicon glyphicon-home',
								'title' => lang('action_index')
							)
						) ?>
					</li>
					<li<?php if ($method == 'insert') print ' class="active"' ?>>
						<?php print anchor(
							'entries/insert', ' ',
							array(
								'class' => 'glyphicon glyphicon-plus',
								'title' => lang('action_insert')
							)
						) ?>
					</li>
					<?php if (isset($row->id)) print myMenu($row->id, $method) ?>
				</ul>
			</nav>
			<br>
