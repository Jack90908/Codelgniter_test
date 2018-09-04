<?php

class Article_model extends CI_Model{
  public $table = 'articles';
  public $primaryKey = 'id';


  function __construct()
  {
    parent::__construct();
  }

  public function select_all_data()
  {
    $query = $this->db->get( $this->table );
    return $query->result();
  }
  public function select_data($id)
  {
    $query = $this->db->get_where($this->table,
            [$this->primaryKey=> $id]);
      return $query->row();
  }
  public function insert_data($data)
  {
    if(!$data['title']==null){
    $this->db->insert($this->table, $data);
  }
    return $this->db->insert_id();
  }

  public function update_data($data)
  {
    $this->db->where($this->primaryKey,$data['id']);
    /*$this->db->where('id',$data['id']);*/
    $this->db->update($this->table,$data);
    return $this->db->affected_rows();
  }

  public function delete_data($id)
  {
    $this->db->where('id',$id);
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }
}
 ?>
