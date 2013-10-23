<h2>Edit: <?php print $row->id ?></h2>
<nav>
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
<?php $this->load->helper('form') ?>
<?php print form_open("entries/edit/{$row->id}", array('role' => 'form')) ?>
<div class="form-group">
	<?php print form_label('Title', 'name') ?>
	<?php print form_input('name', $row->name, 'class="form-control"') ?>
</div>
<div class="form-group">
	<?php print form_label('Body', 'body') ?>
	<?php print form_textarea('body', $row->body, 'class="form-control"') ?>
</div>
<?php print form_submit('submit', 'Publish this entry', 'class="btn btn-primary"') ?>
<?php print form_close() ?>
