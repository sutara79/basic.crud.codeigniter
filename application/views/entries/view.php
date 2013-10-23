<h2>View: <?php print $row->id ?></h2>
<nav>
	<?php print ul(
		array(
			anchor(
				"entries/edit/{$row->id}", ' ',
				array(
					'class' => 'glyphicon glyphicon-pencil',
					'title' => 'Edit'
				)
			),
			anchor(
				"entries/delete/{$row->id}", ' ',
				array(
					'class' => 'glyphicon glyphicon-trash',
					'title' => 'Delete',
					'onclick' => 'return confirmDelete()'
				)
			)
		),
		array('class' => 'nav nav-pills')
	) ?>
</nav>
<section>
	<h3><?php print $row->name ?></h3>
	<time>
		<ul>
			<li>created: <?php print $row->created ?></li>
			<li>modified: <?php print $row->modified ?></li>
		</ul>
	</time>
	<div><?php print str_replace("\n", '<br>', $row->body) ?></div>
</dl>
