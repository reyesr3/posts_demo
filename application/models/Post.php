<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {

	public function get_all()
	{
		$query = "SELECT * FROM posts";
		return $this->db->query($query)->result_array();
	}

		public function create($new_post)
	{
		$query = "INSERT INTO posts (message, created_at, updated_at)
				  VALUES (?,?,?)";
		$values = array(
				 	$new_post['message'],
				  	date('Y-m-d H:i:s'),
				  	date('Y-m-d H:i:s')
				  	);
		return $this->db->query($query, $values);
	}
}























