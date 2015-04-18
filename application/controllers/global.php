<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Global extends User_Controller {

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
		$this->user_m->loggedin() == FALSE || redirect('user/');
		$rules = $this->user_m->rules;
    	$this->form_validation->set_rules($rules);
	    if($this->input->post('submit')) {
	    	if ($this->form_validation->run() == TRUE) {
	    		var_dump($this->input->post('email'));
	    		if($this->user_m->login() == TRUE) {
	    			redirect('user/');
	    		} else {
	    			$this->session->set_flashdata('error', 'That email/password combination does not exist');
	    			//$this->session->set_userdata(array('error' => 1));
	    			redirect('user/login?error=1', 'refresh');
	    		}
	    	} else {
	    		$this->data['error'] = 'Incorrect input. Please try again';
	    	}
	    }
		if($this->input->get('error') == 1) {
			$this->data['error'] = 'Incorrect email/password combination. Please try again';
		}
		$this->load->view('landing_layout', $this->data);
	}

	public function logout() {
		$this->user_m->logout();
		redirect('user/');
	}
}
