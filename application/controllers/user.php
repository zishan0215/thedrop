<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends User_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
    	$this->load->view('user/user_header');
		$this->load->view('user/main_layout');
	}

	public function login() {
		if ($this->user_m->loggedin() == TRUE ) echo "Logged in";
		$this->user_m->loggedin() == FALSE || redirect('user/');
		$rules = $this->user_m->rules;
    	$this->form_validation->set_rules($rules);
    	//echo $this->user_m->hash('zishan');
    	if ($this->form_validation->run() == TRUE) {
    	//if($this->input->post('login')) {
    		var_dump($this->input->post('email'));
    		if($this->user_m->login() == TRUE) {
    			redirect('user/');
    		} else {
    			$this->session->set_flashdata('error', 'That email/password combination does not exist');
    			redirect('user/login', 'refresh');
    		}
    	}
		$this->load->view('landing_layout');
	}

	public function logout() {
		$this->user_m->logout();
		redirect('user/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */