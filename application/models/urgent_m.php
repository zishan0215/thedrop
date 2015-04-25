<?php
class Urgent_m extends MY_Model {
  protected $_table_name = 'urgent';
	protected $_primary_key = 'uid';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'timestamp';

  public function insert($data) {
    $q = $this->db->query("insert into urgent(cname,mobile,location) values('{$data['cname']}',{$data['mobile']},'{$data['area']}')");
  }

  public function get_new() {
    $q = $this->db->query("select * from urgent where status = 'Pending'");
    return $q->result();
  }

  public function urgent_count() {
    $q = $this->db->query("select count(*) as c from urgent where status = 'Pending'");
    return $q->result()[0]->c;
  }

  public function esc_count() {
    $q = $this->db->query("select count(*) as c from escalate");
    return $q->result()[0]->c;
  }

  public function get_complaint($id) {
    $q = $this->db->query("select * from urgent where uid = $id");
    return $q->result()[0];
  }

  public function update_urgent($data) {
    $q = $this->db->query("update urgent set authority='{$data['authority']}', status='{$data['status']}' where uid={$data['uid']}");
  }

}
