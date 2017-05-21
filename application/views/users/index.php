<table class="table table-hover">
	<thead>
		<tr>
			<th><?php echo lang('users_id') ?></th>
			<th><?php echo lang('users_name') ?></th>
			<th><?php echo lang('users_mail') ?></th>
			<th><?php echo lang('users_password') ?></th>
			<th><?php echo lang('created') ?></th>
			<th><?php echo lang('modified') ?></th>
			<th><?php echo lang('control_entry') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($rows as $row) : ?>
		<tr>
			<?php foreach ($row as $val) : ?>
			<td><?php echo htmlspecialchars($val) ?></td>
			<?php endforeach ?>
			<td>
				<ul class="nav nav-pills">
					<?php echo myMenu($row->id, $action, $controller) ?>
				</ul>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
