<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

  public function register($enc_password)
  {
    $data = [
		'name' => $this->input->post('name'),
		'zipcode' => $this->input->post('zipcode'),
		'email' => $this->input->post('email'),
		'username' => $this->input->post('username'),
		'password' => $enc_password
	];

	return $this->db->insert('users', $data);
  }

}
