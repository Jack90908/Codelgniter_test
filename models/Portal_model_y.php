<?php

class Portal_model_y extends CI_Model{
    //public $table = 'guestbook';

    public function __construct()
    {
        $this->load->database();
    }

/*
    public function insert_mb($data)
    {
        //$this->db->set(`username`, $data['username']);
        //$this->db->set(`password`, MD5($data['password']));
        //$this->db->set(`createDate`, $data['createDate']);
        $this->db->insert($this->table, $data);
    */

    public function insert_mb($data)
    {
    $this->db->insert('guestbook', $data);
    $member = $this->db->insert_id();
    return $member;
    }
    //return $member;

}
