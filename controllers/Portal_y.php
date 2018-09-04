<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_y extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portal_model_y');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('portal_creates');
    }

    public function memberCreate()
    {
        if(!$this ->input->post())
        {
            $this->load->view('portal_creates');
            return true;
        }
        $data = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
      #  'createDate' => date("Y-m-d H:i:s")
      );
        //print_r($data);



        $this->Portal_model_y->insert_mb($data);
        echo "success!";
        echo '<a href="index">回首頁</a>';
        #redirect('creates');
        //$success = $this->Portal_modelL->insert_mb($data);
    }
/*
      public function insertMember()
      {
        $this->db->set('username', $_POST['username']);
        $this->db->set('password', $_POST['password']);
        $this->db->set('createDate', date("Y-m-d H:i:s"));
        $this->db->insert('guestbook');
      }
*/

}
