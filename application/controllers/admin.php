<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {

	public function index() {
		echo $this->admin_m->hash('zishan');
    $this->load->view('admin/admin_header');
		$this->load->view('admin/main_layout');
	}

	public function login() {
		$this->admin_m->loggedin() == FALSE || redirect('admin/');
		$rules = $this->admin_m->rules;
    	$this->form_validation->set_rules($rules);
	    if($this->input->post('submit')) {
	    	if ($this->form_validation->run() == TRUE) {
	    		if($this->admin_m->login() == TRUE) {
	    			redirect('admin/');
	    		} else {
	    			$this->session->set_flashdata('error', 'That email/password combination does not exist');
	    			//$this->session->set_userdata(array('error' => 1));
	    			redirect('admin/login?error=1', 'refresh');
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
		$this->admin_m->logout();
		redirect('admin/');
	}
}
