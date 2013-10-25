<?php print form_open('entries/insert', array('role' => 'form')) ?>
	<div class="form-group">
		<?php print form_label(lang('field_name'), 'name') ?>
		<?php print form_input('name', '', 'class="form-control"') ?>
	</div>
	<div class="form-group">
		<?php print form_label(lang('field_body'), 'body') ?>
		<?php print form_textarea('body', '', 'class="form-control"') ?>
	</div>
	<?php print form_submit('submit', lang('view_submit'), 'class="btn btn-primary"') ?>
<?php print form_close() ?>
