<?php
/**
 * User モデル
 * parent: application/core/MY_Model.php
 */
class User extends MY_Model {
	// ***********************************************
	// コンストラクタ
	public function __construct() {
		parent::__construct();
		
		// このモデルが接続するテーブル名
		$this->table = 'users';
		
		// 更新に使われるフィールド(id, created, modifiedを除く)
		$this->fields = array('name', 'mail', 'password');
	}

	// ***********************************************
	// 1件を更新 (親クラスのメソッドを上書き)
	public function update($id) {
		// 更新するレコードを主キーで指定
		$this->db->where('id', $id);

		$save = array();
		$save['modified'] = date($this->date_format);
		$save['name'] = $this->input->post('name');
		$save['mail'] = $this->input->post('mail');
		
		// パスワードは新しいものが入力されている場合のみ変更する
		if ($pw = $this->input->post('password')) {
			$save['password'] = $pw;
		}
		return $this->db->update($this->table, $save);
	}
}
