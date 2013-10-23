<h2>Home</h2>
<table class="table table-hover table-responsive">
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>body</th>
			<th>created</th>
			<th>modified</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($rows as $row) : ?>
		<tr>
			<?php foreach ($row as $val) : ?>
			<td style="max-width:200px; white-space: nowrap; overflow: hidden"><?php print $val ?></td>
			<?php endforeach ?>
			<td>
				<?php print ul(
					array(
						anchor(
							"entries/view/{$row->id}", ' ',
							array(
								'class' => 'glyphicon glyphicon-arrow-right',
								'title' => 'View'
							)
						),
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
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
