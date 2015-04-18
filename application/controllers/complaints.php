<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Complaints extends World_Controller {

	public function index() {
    $this->load->model('complaints_m');
    $data['complaints'] = $this->complaints_m->get();
    $data['new_complaint'] = $this->input->get('add');
    $this->load->view('world/world_header', $data);
		$this->load->view('world/complaints');
    $this->load->view('world/world_footer');
	}

  public function view() {
    $this->load->model('complaints_m');
    $id = $this->input->post('cid');
    $data['complaint'] = $this->complaints_m->get_by(array('cid'=>$id));
    // $area = $data['complaint'][0]->area;
    // $area = urlencode($area);
    // $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address={$area}";
    // $resp_json = file_get_contents($url);
    // $resp = json_decode($resp_json, true);
    // if($resp['status'] == 'OK') {
    //   $lati = $resp['results'][0]['geometry']['location']['lat'];
    //   $longi = $resp['results'][0]['geometry']['location']['lng'];
    // }
    $this->load->view('world/world_header', $data);
		$this->load->view('world/complaints_view');
    $this->load->view('world/world_footer');
  }

  public function new_complaint() {
    $this->load->model('complaints_m');
    $this->load->view('world/world_header');
		$this->load->view('world/new_complaint');
    $this->load->view('world/world_footer');
  }

  public function add_complaint() {
    $this->load->model('complaints_m');
    $data['cname'] = $this->input->post('cname');
    $data['mobile'] = $this->input->post('mobile');
    $data['address'] = $this->input->post('address');
    $data['area'] = $this->input->post('area');
    $data['description'] = $this->input->post('description');
    $this->complaints_m->add_complaint($data);
    header('Location: /thedrop/index.php/complaints?add=1');
  }

}
