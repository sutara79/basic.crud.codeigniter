<?php
/**
 * Entry モデル
 * CRUD機能におけるDBとの応答を担当する
 * parent: application/core/MY_Model.php
 */
class Entry extends MY_Model {
	// ***********************************************
	// コンストラクタ
	public function __construct() {
		parent::__construct();

		// このモデルが接続するテーブル名
		$this->table = 'entries';

		// 更新に使われるフィールド(id, created, modifiedを除く)
		$this->fields = array('name', 'body');
	}
}
