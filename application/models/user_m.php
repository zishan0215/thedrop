<?php
class User_m extends MY_Model {
	protected $_table_name = 'users';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'user_name';
	public $rules = array(
		'email' => array(
			'field' => 'email', 
			'label' => 'Email', 
			'rules' => 'trim|required'
		), 
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|required'
		)
	);

	public function login() {
		$user = $this->get_by(array(
			'user_email' => $this->input->post('email'),
			'user_password' => $this->hash($this->input->post('password')),
		), TRUE);
		//var_dump($user);
		if (count($user)) {
			// Log in user
			$data = array(
				'name' => $user->user_name,
				'id' => $user->user_id,
				'loggedin' => TRUE,
				'loggedin_type' => 0
			);
			$this->session->set_userdata($data);
		}
	}

	public function logout () {
		$this->session->sess_destroy();
	}

	public function loggedin () {
		return (bool) $this->session->userdata('loggedin');
	}

	public function loggedin_type () {
		return $this->session->userdata('loggedin_type');
	}

	public function hash ($string) {
		return hash('sha512', $string . config_item('encryption_key'));
	}

}