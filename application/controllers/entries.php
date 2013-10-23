<?php
class Entries extends CI_Controller {
	private $name = 'entries';
	private $data = null;
	
	// コンストラクタ
	public function __construct() {
		parent::__construct();
		$this->load->model('Entry');
	}
	
	// プライベートメソッド (ビューを呼び出す)
	private function _loadView($method) {
		$this->load->view('layouts/header');
		$this->load->view($this->name.'/'.$method, $this->data);
		$this->load->view('layouts/footer');
	}

	// 全件表示
	public function index() {
		$this->data['rows'] = $this->Entry->get();
		$this->_loadView(__FUNCTION__);
	}
	
	// 1件の詳細
	public function view($id) {
		$this->data['row'] = $this->Entry->get_where($id);
		$this->_loadView(__FUNCTION__);
	}

	// 挿入
	public function insert() {
		// POST送信後
		if ($this->input->post()) {
			$this->Entry->insert();
			// 投稿後、リダイレクト
			$this->load->helper('url');
			redirect('/entries/index', 'refresh');
		}
		// 初期状態
		$this->_loadView(__FUNCTION__);
	}

	// 編集
	public function edit($id) {
		// POST送信後
		if ($this->input->post()) {
			$this->Entry->update($id);
			// 投稿後、リダイレクト
			$this->load->helper('url');
			redirect("entries/view/{$id}", 'refresh');
		}
		// 初期状態
		$this->data['row'] = $this->Entry->get_where($id);
		$this->_loadView(__FUNCTION__);
	}

	// 削除
	public function delete($id) {
		$result = $this->Entry->delete($id);
		var_dump($result);
		/*
		// 投稿後、リダイレクト
		$this->load->helper('url');
		redirect('/entries/index', 'refresh');*/
	}
}
