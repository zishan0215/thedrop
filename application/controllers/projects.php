<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends World_Controller {

	public function index() {
		$this->load->model('project_m');
		$data['projects'] = $this->project_m->get();
    $this->load->view('world/world_header', $data);
		$this->load->view('world/project');
    $this->load->view('world/world_footer');
	}

}
