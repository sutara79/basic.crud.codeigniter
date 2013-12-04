<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title><?php echo lang('title_'.$controller) ?></title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
		<?php echo link_tag('assets/css/common.css') ?>
	</head>
	<body>
		<!-- グローバルナビゲーション1 -->
		<div class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php echo anchor('/', 'Basic CRUD for CodeIgniter', 'class="navbar-brand"') ?>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li<?php if ($controller == 'entries') echo ' class="active"' ?>>
							<?php echo anchor('entries/index', 'Entries') ?>
						</li>
						<li<?php if ($controller == 'users') echo ' class="active"' ?>>
							<?php echo anchor('users/index', 'Users') ?>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div><!-- /.navbar -->

		<div class="container">
			<header><h1><?php echo lang('title_'.$controller) ?></h1></header>

			<!-- メッセージ表示欄 -->
			<?php if ($msg = $this->session->userdata('msg')) : ?>
				<div class="alert alert-<?php echo $msg[0] ?> fade in">
					<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
					<?php echo $msg[1] ?>
				</div>
				<?php $this->session->unset_userdata('msg') ?>
			<?php endif ?>

			<!-- グローバルナビゲーション2 -->
			<nav>
				<ul class="nav nav-pills">
					<li<?php if ($action == 'index') echo ' class="active"' ?>>
						<?php echo anchor(
							$controller.'/index', ' ',
							array(
								'class' => 'glyphicon glyphicon-home',
								'title' => lang('action_index')
							)
						) ?>
					</li>
					<li<?php if ($action == 'insert') echo ' class="active"' ?>>
						<?php echo anchor(
							$controller.'/insert', ' ',
							array(
								'class' => 'glyphicon glyphicon-plus',
								'title' => lang('action_insert')
							)
						) ?>
					</li>
					<?php if (isset($row->id)) echo myMenu($row->id, $action, $controller) ?>
				</ul>
			</nav>
			<br>
