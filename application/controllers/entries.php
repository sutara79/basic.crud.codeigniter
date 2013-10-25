<?php
/**
 * Entries コントローラ
 * ブログ記事のCRUD機能を提供する
 */
class Entries extends CI_Controller {
	private $name = 'entries';
	private $data = null;

	// ----------------------------------------------------
	// コンストラクタ
	public function __construct() {
		parent::__construct();

		// メソッドでよく使われるモデルやヘルパーを一括して読み込んでおく 
		$this->load->model('Entry');
		$this->load->library('session');
		$this->lang->load('common');
		$this->load->helper(array('url', 'html', 'form', 'language', 'my_nav'));
	}

	// ----------------------------------------------------
	// プライベートメソッド (ビューを呼び出す) 
	private function _loadView($method) {
		$this->data['method'] = $method;
		$this->load->view('layouts/header', $this->data);
		$this->load->view($this->name.'/'.$method, $this->data);
		$this->load->view('layouts/footer', $this->data);
	}

	// ----------------------------------------------------
	// 全件表示 
	public function index() {
		$this->data['rows'] = $this->Entry->get();
		$this->_loadView(__FUNCTION__);
	}

	// ----------------------------------------------------
	// 1件の詳細 
	public function view($id) {
		$this->data['row'] = $this->Entry->get_where($id);
		$this->_loadView(__FUNCTION__);
	}

	// ----------------------------------------------------
	// 挿入 
	public function insert() {
		// POST送信後 
		if ($this->input->post()) {
			if ($this->Entry->insert()) {
				$this->session->set_userdata('msg', array('success', lang('crud_inserted')));
			} else {
				$this->session->set_userdata('msg', array('danger', lang('crud_error')));
			}
			redirect('entries/index', 'refresh');
		}
		// 初期状態 
		$this->_loadView(__FUNCTION__);
	}

	// ----------------------------------------------------
	// 編集 
	public function edit($id) {
		// POST送信後 
		if ($this->input->post()) {
			if ($this->Entry->update($id)) {
				$this->session->set_userdata('msg', array('success', lang('crud_updated')));
			} else {
				$this->session->set_userdata('msg', array('danger', lang('crud_error')));
			}
			redirect("entries/view/{$id}", 'refresh');
		}
		// 初期状態
		$this->data['row'] = $this->Entry->get_where($id);
		$this->_loadView(__FUNCTION__);
	}

	// ----------------------------------------------------
	// 削除
	public function delete($id) {
		$result = $this->Entry->delete($id);
		$this->session->set_userdata('msg', array('warning', lang('crud_deleted')));
		redirect('entries/index', 'refresh');
	}
}
