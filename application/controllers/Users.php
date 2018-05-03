<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

  public function register()
  {
	  $data['title'] = 'Sign Up';

	  $this->form_validation->set_rules('name', 'Name', 'required');
	  $this->form_validation->set_rules('username', 'Userame', 'required|is_unique[users.username]');
	  $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
	  $this->form_validation->set_rules('password', 'Password', 'required');
	  $this->form_validation->set_rules('password_confirmation', 'Confirm Password', 'required|matches[password]');

	  if ($this->form_validation->run() === FALSE) {
	  	$this->load->view('templates/header');
		$this->load->view('users/register', $data);
		$this->load->view('templates/footer');
	  } else {
		// Encrypt password
		$enc_password = md5($this->input->post('password'));

		$this->user_model->register($enc_password);

		redirect('posts');
	  }

  }

}
