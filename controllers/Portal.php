<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Portal extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('portal_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('portal_index');
    }

    public function memberCreate()
    {
        if(!$this ->input->post())
        {
            $this->load->view('portal/index');
            return true;
        }

        /*
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['createDate'] = date("Y-m-d H:i:s");
        print_r($data);
        */
        $password = md5($this->input->post('password', true));
        $data = array(
          'username' => $this->input->post('username',true),
          'password' => $password,
        #  'createDate' => date("Y-m-d H:i:s")
        );
        //print_r($data);

        $this->portal_model->insert_mb($data);
        echo "success!";
        redirect('portal');
        //$success = $this->Portal_modelL->insert_mb($data);


    }

    public function memberUpdate()
    {
    $password = md5($this->input->post('password', true));
    $data = array(
      'username' => $this->input->post('username', true),
      'password' => $password,
      #'createDate' => date("Y-m-d H:i:s")
      );
      print_r($data);
      echo "update success!";
      $this->portal_model->update_mb($data);
      redirect('portal');
    }

    public function memberDelete($data = null)
    {
    $password = md5($this->input->post('password', true));
    //echo $password;
    $data = array(
      'username' =>$this->input->post('username', true) ,
      'password' =>$password
    );
      if(! $this->portal_model->delete_mb($data))
      {
      echo "帳號或密碼錯誤!";
      return true;
    }
    echo "成功刪除";
    return true;
      //redirect('portal');
    }




}
