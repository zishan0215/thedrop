<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {

	public function index() {
		$this->load->model('complaints_m');
		$this->load->model('urgent_m');
		$data['name'] = $this->session->userdata('name');
		$data['ures'] = $this->complaints_m->ures_count();
		$data['urgent'] = $this->urgent_m->urgent_count();
		$data['esc'] = $this->urgent_m->esc_count();
		$this->load->view('admin/admin_header',$data);
		$this->load->view('admin/index');
		$this->load->view('admin/admin_footer');
	}

	public function esc_complaints() {
		$this->load->model('complaints_m');
		$data['esc'] = $this->complaints_m->get_esc();
		$data['name'] = $this->session->userdata('name');
		$this->load->view('admin/admin_header',$data);
		$this->load->view('admin/esc_complaints');
		$this->load->view('admin/admin_footer');

	}

	public function tanker() {
		$this->load->model('tanker_m');
		$data['name'] = $this->session->userdata('name');
		$data['tinfo'] = $this->tanker_m->get_tanker_info();
		$this->load->view('admin/admin_header',$data);
		$this->load->view('admin/tanker');
		$this->load->view('admin/admin_footer');
	}

	public function add_tanker() {
		if($this->input->post('add_tanker')) {
			$this->load->model('tanker_m');
			$data['place'] = $this->input->post('place');
			$data['atime'] = $this->input->post('atime');
			$data['dtime'] = $this->input->post('dtime');
			$data['vid'] = $this->input->post('vid');
			$data['filling'] = $this->input->post('filling');
			$this->tanker_m->insert_data($data);
		}
		$data['name'] = $this->session->userdata('name');
		$this->load->view('admin/admin_header',$data);
		$this->load->view('admin/add_tanker');
		$this->load->view('admin/admin_footer');
	}

	public function get_complaints() {
		$this->load->model('complaints_m');
		$data['name'] = $this->session->userdata('name');
		$data['complaints'] = $this->complaints_m->get_all();
		$this->load->view('admin/admin_header',$data);
		$this->load->view('admin/get_complaints');
		$this->load->view('admin/admin_footer');
	}

	public function new_complaints() {
		$this->load->model('complaints_m');
		$data['name'] = $this->session->userdata('name');
		$data['new'] = $this->complaints_m->get_new();
		$this->load->view('admin/admin_header', $data);
		$this->load->view('admin/new_complaints');
		$this->load->view('admin/admin_footer');
	}

	public function new_urgent() {
		$this->load->model('urgent_m');
		$data['name'] = $this->session->userdata('name');
		$data['new'] = $this->urgent_m->get_new();
		$this->load->view('admin/admin_header', $data);
		$this->load->view('admin/new_urgent');
		$this->load->view('admin/admin_footer');
	}

	public function action_urgent() {
		$this->load->model('urgent_m');
		$data['name'] = $this->session->userdata('name');
		$data['id'] = $this->input->post('uid');
		$data['complaint'] = $this->urgent_m->get_complaint($data['id']);
		$this->load->view('admin/admin_header', $data);
		$this->load->view('admin/action_urgent');
		$this->load->view('admin/admin_footer');
	}

	public function update_urgent() {
		$this->load->model('urgent_m');
		$data['uid'] = $this->input->post('uid');
		$data['authority'] = $this->input->post('authority');
		$data['status'] = $this->input->post('status');
		$this->urgent_m->update_urgent($data);
		header('Location:/thedrop/index.php/admin');
	}

	public function action_complaint() {
		$this->load->model('complaints_m');
		$data['name'] = $this->session->userdata('name');
		$data['id'] = $this->input->post('cid');
		$data['complaint'] = $this->complaints_m->get_complaint($data['id']);
		$this->load->view('admin/admin_header', $data);
		$this->load->view('admin/action_complaint');
		$this->load->view('admin/admin_footer');
	}

	public function update_action() {
		$this->load->model('complaints_m');
		$data['cid'] = $this->input->post('cid');
		$data['authority'] = $this->input->post('authority');
		$data['status'] = $this->input->post('status');
		$this->complaints_m->update_action($data);
		header('Location:/thedrop/index.php/admin');
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
		$this->load->view('admin/login', $this->data);
	}

	public function logout() {
		$this->admin_m->logout();
		redirect('admin/');
	}
}
