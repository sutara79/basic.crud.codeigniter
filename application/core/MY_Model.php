<?php
/**
 * 親モデル
 * 各モデルの共通機能を記述している
 */
class MY_Model extends CI_Model {
	protected $table = null; // このモデルが接続するテーブル名
	protected $fields = null; // このモデルが扱うフィールド(配列)
	protected $date_format = 'Y-m-d h:i:s';

	// ***********************************************
	// コンストラクタ
	function __construct() {
		parent::__construct();

		$this->load->database('default');
		$this->load->helper('language');
	}

	// ***********************************************
	// 全件を返す
	public function get() {
		$query = $this->db->get($this->table);
		return $query->result();
	}

	// ***********************************************
	// 1件の詳細
	public function get_where($id) {
		$query = $this->db->get_where($this->table, array('id' => $id));
		$rows = $query->result();

		// 1件の情報だけを返す
		return $rows[0];
	}

	// ***********************************************
	// 1件を追加
	public function insert() {
		// 現在時刻を取得
		$date = date($this->date_format);
		$save = array(
			'created' => $date,
			'modified' => $date
		);
		for ($i = 0; $i < count($this->fields); $i++) {
			$save[$this->fields[$i]] = $this->input->post($this->fields[$i]);
		}
		return $this->db->insert($this->table, $save);
	}

	// ***********************************************
	// 1件を更新
	public function update($id) {
		// 更新するレコードを主キーで指定
		$this->db->where('id', $id);

		// 現在時刻を取得
		$date = date($this->date_format);
		$save = array(
			'modified' => $date
		);
		for ($i = 0; $i < count($this->fields); $i++) {
			$save[$this->fields[$i]] = $this->input->post($this->fields[$i]);
		}
		return $this->db->update($this->table, $save);
	}

	// ***********************************************
	// 1件を削除
	public function delete($id) {
		$this->db->where('id', $id);
		return $this->db->delete($this->table);
	}
}
