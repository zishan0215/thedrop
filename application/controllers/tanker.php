<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tanker extends Tanker_Controller {

	public function index() {
		$this->load->model('tanker_m');
		if($this->input->post('route')) {
			$route = $this->input->post('route');
			$data['rid'] = $this->tanker_m->get_route_id($route);
			$data['tinfo'] = $this->tanker_m->get_tanker_by_area($route);
		} else {
			$data['rid'] = 1;
			$data['tinfo'] = $this->tanker_m->get_tanker_by_area("Sarita Vihar");
		}
		$this->load->view('world/world_header', $data);
		$this->load->view('world/tanker');
    $this->load->view('world/world_footer');
	}

}
