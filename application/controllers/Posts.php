<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Post');
	}

	public function get_all()
  {
    return $this->db->query("SELECT * FROM posts")->result_array();
  }

	public function index_json()
	{
		$data['posts'] = $this->Post->get_all();
		echo json_encode($data);
	}

	public function index_html()
	{
		$data['posts'] = $this->Post->get_all();
		$this->load->view('partials/view_posts', $data);
	}

	public function create()
	{
		$new_post = $this->input->post();
		$this->Post->create($new_post);
		$data['posts'] = $this->Post->get_all();
		$this->load->view('partials/view_posts', $data);
	}

	public function index()
	{
	$this->load->view('index');
	}

}




















