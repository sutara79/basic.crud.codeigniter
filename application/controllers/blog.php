<?php
class Blog extends CI_Controller {

	public function index() {
		print 'Hello World!';
	}
	public function comments() {
		// 通常のモデル呼び出し
		$this->load->model('Model_blog');
		$data['result'] = $this->Model_blog->get_last_ten_entries();

		// ページネーション
		$this->load->library('pagination');
		$config['base_url'] = 'http://http://localhost/CodeIgniter/index.php/blog/comments/';
		$config['total_rows'] = 200;
		$config['per_page'] = 20; 
		$this->pagination->initialize($config); 
		$data['paging'] = $this->pagination->create_links();

		// ビューを呼び出す
		$this->load->view('blog/comments', $data);
	}
}
