<?php
class Users extends CI_Controller
{
	// Register user
	public function register()
	{
		$data['title'] = 'Daftar';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
		$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/register', $data);
			$this->load->view('templates/footer');
		} else {
			// Encrypt password
			$enc_password = md5($this->input->post('password'));

			$this->user_model->register($enc_password);

			// Set message
			$this->session->set_flashdata('success_register_user', 'Register berhasil! Silahkan Login');

			redirect('users/login');
		}
	}

	// Log in user
	public function login()
	{
		$data['title'] = 'Masuk';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/login', $data);
			$this->load->view('templates/footer');
		} else {

			// Get username
			$username = $this->input->post('username');
			// Get and encrypt the password
			$password = md5($this->input->post('password'));

			// Login user
			$user_id = $this->user_model->login($username, $password);

			if ($user_id) {
				// Create session
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);

				// Set message
				$this->session->set_flashdata('success_user_login', 'Berhasil login');

				redirect('pages/view');
			} else {
				// Set message
				$this->session->set_flashdata('error_user_login', 'Gagal Login');

				redirect('users/login');
			}
		}
	}

	// Log user out
	public function logout()
	{
		// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		// Set message
		$this->session->set_flashdata('success_user_logout', 'Berhasil logout');

		redirect('users/login');
	}

	// Check if username exists
	public function check_username_exists($username)
	{
		$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
		if ($this->user_model->check_username_exists($username)) {
			return true;
		} else {
			return false;
		}
	}

	// Check if email exists
	public function check_email_exists($email)
	{
		$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
		if ($this->user_model->check_email_exists($email)) {
			return true;
		} else {
			return false;
		}
	}
}
