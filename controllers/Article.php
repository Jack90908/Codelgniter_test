<?php

class Article extends CI_controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('article_model');
  }
  public function index()
    {
      $query = $this->article_model->select_all_data();
      $this->load->view('article_index',[
        'query' => $query
      ]);
      return true;
    }

    public function create()
    {
      if( ! $this->input->post()){
        $this->load->view('article_create');
        return true;
      }
    $data['title'] = $this->input->post('title', true);
    $data['content'] = $this->input->post('content',true);
    if(!$this->article_model->insert_data($data)){
      echo "新增失敗,標題不能留白";
      return true;
    }

    echo "新增成功";
    echo '<br><a href="create">回新增</a><br><a href="index">到查詢頁面</a>';
    return true;
    }

    public function show($id = null)
    {
      $query = $this->article_model->select_data($id);
      $this->load->view('article_show',['query'=> $query]);
      return true;
    }

    public function edit($id = null)
    {
      if(! $query=$this->article_model->select_data($id)){
        echo"無資料可修改";
        echo'<a href="index">回查詢</a>';
        return true;
      }
      if(!$this ->input->post()){
        $this->load->view('article_edit',[
          'query'=>$query
        ]);
        return true;
      }
      $data = [
        'id' => $id,
        'title' => $this->input->post('title',true),
        'content' => $this->input->post('content',true)
      ];
      if(! $this->article_model->update_data($data)){
        echo "更新失敗";
        echo $data['id'];
        return true;
      }
      echo "更新成功";
      echo '<a href="'.base_url('article/').'">回上頁</a>';
      return true;
    }

    public function delete($id = null)
    {
      if(! $query=$this->article_model->select_data($id)){
        echo"無資料可刪除";
        echo'<a href="index">回查詢</a>';
        return true;
      }
      if(! $this->article_model->delete_data($id)){
        echo "更新失敗";
        return true;
      }
      echo "更新成功";
      echo '<a href="'.base_url('article/').'">回上頁</a>';
      return true;
    }
}
?>
