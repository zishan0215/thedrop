<?php
class User_Controller extends MY_Controller
{
	function __construct() {
		parent::__construct();
		$this->data['meta_title'] = 'Jamia Connect';
		$this->load->library('session');
		$this->load->model('user_m');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// Login check
		$exception_uris = array(
			'user/login', 
			'user/logout'
		);
		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if ($this->user_m->loggedin() == FALSE) {
				redirect('user/login');
			}
		}
	}
}

?>