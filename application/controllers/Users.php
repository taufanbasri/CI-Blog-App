<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

  /**
   * User registration function
   */
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

  /**
   * User login function
   */
  public function login()
  {
	  $data['title'] = 'Sign In';

	  $this->form_validation->set_rules('username', 'Username', 'required');
	  $this->form_validation->set_rules('password', 'Password', 'required');

	  if ($this->form_validation->run() === FALSE) {
	  	$this->load->view('templates/header');
		$this->load->view('users/login', $data);
		$this->load->view('templates/footer');
	  } else {
		  // Get username
		  $username = $this->input->post('username');
		  $password = md5($this->input->post('password'));

		  // Login User
		  $user_id = $this->user_model->login($username, $password);

		  if ($user_id) {
		  	// Create Session
			$user_data = [
				'user_id' => $user_id,
				'username' => $username,
				'logged_in' => true
			];

			$this->session->set_userdata($user_data);

			$this->session->set_flashdata('user_loggedin', 'You are now logged in!');

			redirect('posts');
		  } else {
			$this->session->set_flashdata('login_failed', 'Login is invalid!');

			redirect('users/login');
		  }


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
