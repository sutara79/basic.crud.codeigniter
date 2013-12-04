<?php
/**
 * Entries コントローラ
 * ブログ記事のCRUD機能を提供する
 * parent: application/core/MY_Controller.php
 */
class Entries extends MY_Controller {
	public function __construct() {
		parent::__construct();

		$this->name = 'entries';
		$this->model = 'Entry';
		$this->load->model($this->model);
	}
}