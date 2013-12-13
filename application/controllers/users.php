<?php
/**
 * Users Controller
 * ユーザを登録する
 * parent: application/core/MY_Controller.php
 */
class Users extends MY_Controller {
	public function __construct() {
		parent::__construct();

		$this->name = 'users';
		$this->model = 'User';
		$this->load->model($this->model);
	}

	// ***********************************************
	// 編集
	public function edit($id) {
		// 現在のパスワードを知るため、ユーザIDを記憶する処理を追加している
		$this->row_id = $id;
		parent::edit($id);
	}

	// ***********************************************
	// 独自バリデーション
	// パスワード変更の際には現在のパスワードを入力させる
	public function password_current($str) {
var_dump($this->input->post('password'));
		if (
			$this->input->post('password') == '' &&
			$str == '') {
				return true;
		}
		$row = $this->{$this->model}->get_where($this->row_id);
		return (md5($str) === $row->password) ? true : false;
	}
}
