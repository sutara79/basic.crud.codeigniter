<?php echo form_open("entries/edit/{$row->id}", array('role' => 'form')) ?>
	<div class="form-group">
		<?php echo form_label(lang('entries_name'), 'name') ?>
		<?php echo form_error('name'); ?>
		<?php echo form_input('name', set_value('name', $row->name), 'class="form-control"') ?>
	</div>
	<div class="form-group">
		<?php echo form_label(lang('entries_body'), 'body') ?>
		<?php echo form_error('body'); ?>
		<?php echo form_textarea('body', set_value('name', $row->body), 'class="form-control"') ?>
	</div>
	<?php echo form_submit('submit', lang('entries_submit'), 'class="btn btn-primary"') ?>
<?php echo form_close() ?>
