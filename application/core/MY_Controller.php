<?php
/**
 * 親コントローラ
 * 各コントローラの共通機能を記述している
 */
class MY_Controller extends CI_Controller {
	protected $name = null; // このコントローラの名前
	protected $model = null; // コントローラで使用するモデル名
	protected $data = null; // ビューへ渡すデータを格納する

	// ***********************************************
	// コンストラクタ
	public function __construct() {
		parent::__construct();

		// メソッドでよく使われるモデルやヘルパーを一括して読み込んでおく
		$this->load->library('session');
		$this->lang->load('common');
		$this->load->helper(array('url', 'html', 'form', 'language', 'my_nav'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
	}

	// ***********************************************
	// ビューを呼び出す(プロテクテッドメソッド )
	protected function _loadView($action) {
		$this->data['controller'] = $this->name;
		$this->data['action'] = $action;
		$this->load->view('layouts/header', $this->data);
		$this->load->view($this->name.'/'.$action, $this->data);
		$this->load->view('layouts/footer', $this->data);
	}

	// ***********************************************
	// 全件表示 
	public function index() {
		$this->data['rows'] = $this->{$this->model}->get();
		$this->_loadView(__FUNCTION__);
	}

	// ***********************************************
	// 1件の詳細 
	public function view($id) {
		$this->data['row'] = $this->{$this->model}->get_where($id);
		$this->_loadView(__FUNCTION__);
	}

	// ***********************************************
	// 挿入 
	public function insert() {
		$action = __FUNCTION__;
		// POST送信後 
		if ($this->input->post()) {
			// バリデーション設定: /application/config/form_validation.php
			if ($this->form_validation->run("{$this->name}_{$action}")) {
				if ($this->{$this->model}->insert()) {
					$this->session->set_userdata('msg', array('success', lang('crud_inserted')));
				} else {
					$this->session->set_userdata('msg', array('danger', lang('crud_error')));
				}
				redirect("{$this->name}/index", 'refresh');
			}
		}
		// 初期状態 
		$this->_loadView($action);
	}

	// ***********************************************
	// 編集 
	public function edit($id) {
		$action = __FUNCTION__;
		// POST送信後 
		if ($this->input->post()) {
			// バリデーション設定: /application/config/form_validation.php
			if ($this->form_validation->run("{$this->name}_{$action}")) {
				if ($this->{$this->model}->update($id)) {
					$this->session->set_userdata('msg', array('success', lang('crud_updated')));
				} else {
					$this->session->set_userdata('msg', array('danger', lang('crud_error')));
				}
				redirect("{$this->name}/view/{$id}", 'refresh');
			}
		}
		// 初期状態
		$this->data['row'] = $this->{$this->model}->get_where($id);
		$this->_loadView($action);
	}

	// ***********************************************
	// 削除
	public function delete($id) {
		$result = $this->{$this->model}->delete($id);
		$this->session->set_userdata('msg', array('warning', lang('crud_deleted')));
		redirect("{$this->name}/index", 'refresh');
	}
}
