<?php
class Model_blog extends CI_Model {

	var $title   = '';
	var $content = '';
	var $date	= '';

	function __construct() {
		// Model クラスのコンストラクタを呼び出す
		parent::__construct();
	}
	
	public function get_last_ten_entries() {
		$this->load->database();
		$query = $this->db->get('staflist', 10);
		return $query->result();
	}

	function insert_entry()
	{
		$this->title   = $_POST['title']; // 下の Note を参照してください
		$this->content = $_POST['content'];
		$this->date	= time();

		$this->db->insert('entries', $this);
	}

	function update_entry()
	{
		$this->title   = $_POST['title'];
		$this->content = $_POST['content'];
		$this->date	= time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}
}
