<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class World extends World_Controller {

	public function index() {
    	$this->load->view('world/world_header');
		$this->load->view('world/index');
	}

}
