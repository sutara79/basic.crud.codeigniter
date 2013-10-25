<dl class="dl-horizontal">
	<dt><?php print lang('field_id') ?></dt>
	<dd><?php print $row->id ?></dd>

	<dt><?php print lang('field_name') ?></dt>
	<dd><?php print $row->name ?></dd>
	
	<dt><?php print lang('field_body') ?></dt>
	<dd><?php print str_replace("\n", '<br>', $row->body) ?></dd>

	<dt><?php print lang('field_created') ?></dt>
	<dd><?php print $row->created ?></dd>

	<dt><?php print lang('field_modified') ?></dt>
	<dd><?php print $row->modified ?></dd>
</dl>	
