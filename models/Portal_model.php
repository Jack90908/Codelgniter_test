<?php

class Portal_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function select_all_data()
    {
        $query = $this->db->get( $this->table );
        return $query->result();
    }

    public function insert_mb($data)
    {
        //$this->db->set(`username`, $_POST['username']);
        //$this->db->set(`password`, MD5($_POST['password']));
        //$this->db->set(`createDate`, date(Y-m-d H:i:s));
        $this->db->insert('guestbook', $data);
        $member = $this->db->insert_id();
        return $member;
    }
    public function delete_mb($data)
    {
      $this->db->where('password',$data['password']);
      $this->db->where('username',$data['username']);
      $this->db->delete('guestbook');
      return $this->db->affected_rows();
    }
  }
