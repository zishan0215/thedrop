<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Complaints extends World_Controller {

	public function index() {
    $this->load->model('complaints_m');
    $data['complaints'] = $this->complaints_m->get();
    $this->load->view('world/world_header', $data);
		$this->load->view('world/complaints');
	}

  public function view() {
    $this->load->model('complaints_m');
    $id = $this->input->post('cid');
    $data['complaint'] = $this->complaints_m->get_by(array('cid'=>$id));
    $this->load->view('world/world_header', $data);
		$this->load->view('world/complaints_view');
  }

}
