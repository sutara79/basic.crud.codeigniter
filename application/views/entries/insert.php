<h2>Insert</h2>
<?php $this->load->helper('form') ?>
<?php print form_open('entries/insert', array('role' => 'form')) ?>
<div class="form-group">
	<?php print form_label('Title', 'name') ?>
	<?php print form_input('name', '', 'class="form-control"') ?>
</div>
<div class="form-group">
	<?php print form_label('Body', 'body') ?>
	<?php print form_textarea('body', '', 'class="form-control"') ?>
</div>
<?php print form_submit('submit', 'Publish this entry', 'class="btn btn-primary"') ?>
<?php print form_close() ?>
