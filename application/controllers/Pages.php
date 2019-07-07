<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {

	public function index($page = 'login')
	{
    if( ! file_exists(APPPATH.'views/'.$page.'.php')){
      show_404();
    }

    $data['title'] = ucfirst($page);

		if($page == 'login' || $page == 'register') {
			$this->loggedIn();
		} else if($page == 'register') {
			$this->loggedRegisterIn();
		}
		else {
			$this->notLoggedIn();

			$this->load->library('session');

			$this->load->model('users_model');

			$data['userData'] = $this->users_model->fetchUserData($this->session->userdata('user_id'));
		}

		$this->load->view($page, $data);
	}
}
