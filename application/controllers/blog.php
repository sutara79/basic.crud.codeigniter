<?php
class Blog extends CI_Controller {

	public function index() {
		print 'Hello World!';
	}
	public function comments() {
		$this->load->model('Model_blog');
		$data['result'] = $this->Model_blog->get_last_ten_entries();
		$this->load->view('blog/comments', $data);
	}
}
