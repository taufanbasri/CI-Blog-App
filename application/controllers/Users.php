<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

  public function register()
  {
	  $data['title'] = 'Sign Up';

	  $this->form_validation->set_rules('name', 'Name', 'required');
	  $this->form_validation->set_rules('username', 'Userame', 'required|is_unique[users.username]', [
		  'is_unique' => 'Username is already exists'
	  ]);
	  $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
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

		// Set message
		$this->session->set_flashdata('user_registered', 'You are now registered and can log in!');

		redirect('posts');
	  }

  }

  function check_email_exists($email)
  {
  	$this->form_validation->set_message('check_email_exists', 'The email is already exists.');

	if ($this->user_model->check_email_exists($email)) {
		return true;
	} else {
		return false;
	}

  }

}
