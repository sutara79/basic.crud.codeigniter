<dl class="dl-horizontal">
	<dt><?php echo lang('users_id') ?></dt>
	<dd><?php echo $row->id ?></dd>

	<dt><?php echo lang('users_name') ?></dt>
	<dd><?php echo htmlspecialchars($row->name) ?></dd>
	
	<dt><?php echo lang('users_mail') ?></dt>
	<dd><?php echo str_replace("\n", '<br>', htmlspecialchars($row->mail)) ?></dd>
	
	<dt><?php echo lang('users_password') ?></dt>
	<dd><?php echo str_replace("\n", '<br>', htmlspecialchars($row->password)) ?></dd>
</dl>	
