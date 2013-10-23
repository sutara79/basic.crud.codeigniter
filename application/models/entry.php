<?php
class Entry extends CI_Model {
	private $table = 'entries';

	function __construct() {
		// Model クラスのコンストラクタを呼び出す
		parent::__construct();

		// DBの初期設定
		$this->load->database('default');
	}

	// 全件を返す
	public function get() {
		$query = $this->db->get($this->table);
		return $query->result();
	}

	// 1件の詳細
	public function get_where($id) {
		$query = $this->db->get_where($this->table, array('id' => $id));
		$rows = $query->result();

		// 1件の情報だけを返す
		return $rows[0];
	}

	public function insert() {
		// 現在時刻を取得
		$this->date	= date('Y-m-d h:i:s');

		return $this->db->insert($this->table, array(
			'name' => $this->input->post('name'),
			'body' => $this->input->post('body'),
			'created' => $this->date,
			'modified' => $this->date,
		));
	}

	public function update($id) {
		// 現在時刻を取得
		$this->date	= date('Y-m-d h:i:s');

		// 更新するレコードを主キーで指定
		$this->db->where('id', $id);

		return $this->db->update($this->table, array(
			'name' => $this->input->post('name'),
			'body' => $this->input->post('body'),
			'modified' => $this->date,
		));
	}
	
	public function delete($id) {
		$this->db->where('id', $id);
		return $this->db->delete($this->table);
	}


	public function count_all() {
		$this->db->count_all();
	}

}
