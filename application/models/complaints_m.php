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
  }
}
