<table class="table table-hover">
	<thead>
		<tr>
			<th><?php print lang('field_id') ?></th>
			<th><?php print lang('field_name') ?></th>
			<th><?php print lang('field_body') ?></th>
			<th><?php print lang('field_created') ?></th>
			<th><?php print lang('field_modified') ?></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($rows as $row) : ?>
		<tr>
			<?php foreach ($row as $val) : ?>
			<td><?php print $val ?></td>
			<?php endforeach ?>
			<td>
				<ul class="nav nav-pills">
					<?php print myMenu($row->id, $method) ?>
				</ul>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
