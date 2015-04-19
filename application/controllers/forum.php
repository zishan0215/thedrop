<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends Forum_Controller {

	public function index() {
    $this->load->view('world/world_header');
		$this->load->view('world/forum');
    $this->load->view('world/world_footer');
	}

}
