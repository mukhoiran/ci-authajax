<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('users_model');
  }

  public function register(){
    $validator = array('success' => false, 'messages'=> array());

    $validate_data = array(
      array(
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'required|is_unique[users.username]'
      ),
      array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required'
      ),
      array(
        'field' => 'passwordAgain',
        'label' => 'Password Again',
        'rules' => 'required|matches[password]'
      ),
      array(
        'field' => 'fullName',
        'label' => 'Name',
        'rules' => 'required'
      ),
      array(
        'field' => 'contact',
        'label' => 'Contact',
        'rules' => 'required|integer'
      )
    );

    $this->form_validation->set_rules($validate_data);
    $this->form_validation->set_message('is_unique', 'The {field} already exist');
    $this->form_validation->set_message('integer', 'The {field} must be number');
    $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

    if($this->form_validation->run() === true){
      $this->users_model->register();
      $validator['success'] = true;
      $validator['messages'] = 'Successfully Registered';
    }else{
      $validator['success'] = false;
      foreach ($_POST as $key => $value) {
        $validator['messages'][$key] = form_error($key);
      }
    }

    echo json_encode($validator);
  }

	public function index()
	{
		$this->load->view('welcome_message');
	}
}