<dl class="dl-horizontal">
	<dt><?php echo lang('entries_id') ?></dt>
	<dd><?php echo $row->id ?></dd>

	<dt><?php echo lang('entries_name') ?></dt>
	<dd><?php echo htmlspecialchars($row->name) ?></dd>
	
	<dt><?php echo lang('entries_body') ?></dt>
	<dd><?php echo str_replace("\n", '<br>', htmlspecialchars($row->body)) ?></dd>

	<dt><?php echo lang('created') ?></dt>
	<dd><?php echo $row->created ?></dd>

	<dt><?php echo lang('modified') ?></dt>
	<dd><?php echo $row->modified ?></dd>
</dl>	
