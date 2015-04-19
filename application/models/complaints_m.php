<?php
class Complaints_m extends MY_Model {
  protected $_table_name = 'complaints';
	protected $_primary_key = 'cid';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'timestamp';

  public function add_complaint($data) {
    $query = "insert into complaints(cname, ";
    if($data['mobile']) $query .= "mobile, ";
    if($data['address']) $query .= "address, ";
    $query .= "area, description) ";
    $query .= "values('{$data['cname']}', ";
    if($data['mobile']) $query .= "{$data['mobile']}, ";
    if($data['address']) $query .= "'{$data['address']}', ";
    $query .= "'{$data['area']}', '{$data['description']}')";
    $this->db->query($query);
    return $this->db->insert_id();
  }

  public function total_count() {
    $q = $this->db->query('select count(*) as c from complaints');
    return $q->result()[0]->c;
  }

  public function ures_count() {
    $q = $this->db->query("select count(*) as c from complaints where status = 'Pending'");
    return $q->result()[0]->c;
  }

  public function res_count() {
    $q = $this->db->query("select count(*) as c from complaints where status = 'Resolved'");
    return $q->result()[0]->c;
  }

  public function get_urgent() {
    $q = $this->db->query("select * from urgent order by timestamp desc");
    return $q->result();
  }

  public function get_all() {
    $q = $this->db->query("select * from complaints order by timestamp desc");
    return $q->result();
  }

  public function get_new() {
    $q = $this->db->query("select * from complaints where status = 'Pending'");
    return $q->result();
  }

  public function get_complaint($id) {
    $q = $this->db->query("select * from complaints where cid = $id");
    return $q->result()[0];
  }

  public function update_action($data) {
    $q = $this->db->query("update complaints set authority='{$data['authority']}', status='{$data['status']}' where cid={$data['cid']}");
  }

}
