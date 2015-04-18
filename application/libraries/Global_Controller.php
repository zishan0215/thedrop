<?php
class Global_Controller extends MY_Controller
{
	function __construct() {
		parent::__construct();
		$this->data['meta_title'] = 'The Drop';
		$this->load->library('session');
		$this->load->model('global_m');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// Login check
		// $exception_uris = array(
		// 	'user/login',
		// 	'user/logout',
		// 	'global'
		// );
		// if (in_array(uri_string(), $exception_uris) == FALSE) {
		// 	if ($this->user_m->loggedin() == FALSE) {
		// 		redirect('user/login');
		// 	}
		// }
	}
}

?>
