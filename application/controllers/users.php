<?php
/**
 * Users コントローラ
 * Webサイトの管理者を登録する
 * parent: application/core/MY_Controller.php
 */
class Users extends MY_Controller {
	public function __construct() {
		parent::__construct();

		$this->name = 'users';
		$this->model = 'User';
		$this->load->model($this->model);
	}
}