<?php
class Tanker_m extends MY_Model {
  protected $_table_name = 'tanker';
	protected $_primary_key = 'tid';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'tid';

  public function insert_data($data) {
    $query = "insert into tanker(place,vid,filling) values('{$data['place']}','{$data['vid']}','{$data['filling']}')";
    $this->db->query($query);
    $id = $this->db->insert_id();
    //insert into travels
  }

  public function get_tanker_info() {
    $query = "select * from tanker as a, travels as b where a.tid = b.tid";
    $q = $this->db->query($query);
    return $q->result();
  }

  public function get_tanker_by_area($area) {
    $query = "select * from tanker as a, travels as b where a.tid = b.tid and a.route = '{$area}'";
    $q = $this->db->query($query);
    return $q->result();
  }

  public function get_route_id($route) {
    $query = "select rid from route where name='{$route}'";
    $q = $this->db->query($query);
    return $q->result()[0]->rid;
  }

}
