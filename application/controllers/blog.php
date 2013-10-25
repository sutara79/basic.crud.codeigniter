<?php
class Blog extends CI_Controller {
	function index() {
		print 'Hello World!';
	}

	function test1() {
		$data['msg'] = 'こんにちは';
		$this->load->view('test1', $data);
	}

	function test2() {
	}
}
