<?php echo form_open("{$controller}/edit/{$row->id}", array('role' => 'form')) ?>
	<?php // 名前 ------------------------------------------------ ?>
	<div class="form-group">
		<label for="name"><?php echo lang('users_name') ?></label>
		<?php echo form_error('name'); ?>
		<input
			type="text"
			name="name"
			class="form-control"
			value="<?php echo set_value('name', $row->name); ?>"
			placeholder="<?php echo lang('users_name_ph') ?>"
		>
	</div>
	<?php // メール ------------------------------------------------ ?>
	<div class="form-group">
		<label for="mail"><?php echo lang('users_mail') ?></label>
		<?php echo form_error('mail'); ?>
		<input
			type="mail"
			name="mail"
			class="form-control"
			value="<?php echo set_value('mail', $row->mail); ?>"
			placeholder="<?php echo lang('users_mail_ph') ?>"
		>
	</div>
	<?php // パスワード ------------------------------------------------ ?>
	<div class="form-group">
		<label for="password"><?php echo lang('users_password') ?></label>
		<?php echo form_error('password'); ?>
		<input
			type="password"
			name="password"
			class="form-control"
			value="<?php echo set_value('password'); ?>"
			placeholder="<?php echo lang('users_password_ph') ?>"
		>
	</div>
	<?php // パスワード(再入力) ------------------------------------------------ ?>
	<div class="form-group">
		<label for="password_confirm"><?php echo lang('users_password_confirm') ?></label>
		<?php echo form_error('password_confirm'); ?>
		<input
			type="password"
			name="password_confirm"
			class="form-control"
			value="<?php echo set_value('password_confirm'); ?>"
		>
	</div>
	<?php echo form_submit('submit', lang('users_submit'), 'class="btn btn-primary"') ?>
<?php echo form_close() ?>
