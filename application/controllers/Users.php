<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

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

	public function login()
	{
    $validator = array('success' => false, 'messages'=> array());

    $validate_data = array(
      array(
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'callback_validate_username|required'
      ),
      array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required'
      )
    );

    $this->form_validation->set_rules($validate_data);
    $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

    if($this->form_validation->run() === true){

      $login = $this->users_model->login();

      if($login){
        $this->load->library('session');

        $newdata = array(
          'user_id'  => $login,
          'logged_in' => TRUE
        );

        $this->session->set_userdata($newdata);

        $validator['success'] = true;
        $validator['messages'] = 'dashboard';
      }else{
        $validator['success'] = false;
        $validator['messages'] = 'Incorrect Password';
      }
    }else{
      $validator['success'] = false;
      foreach ($_POST as $key => $value) {
        $validator['messages'][$key] = form_error($key);
      }
    }

    echo json_encode($validator);
	}

  public function validate_username(){
    $username = $this->users_model->validate_username();
    if($username === true){
      return true;
    }else{
        $this->form_validation->set_message('validate_username', 'The {field} does not exist');
      return false;
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    header('location: ../');
  }

  public function update() {
    $validator = array('success' => false, 'messages' => array());

    $validate_data = array(
      array(
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'required|callback_username_exists'
      ),
      array(
        'field' => 'fullName',
        'label' => 'Name',
        'rules' => 'required'
      ),
      array(
        'field' => 'contact',
        'label' => 'Contact',
        'rules' => 'required'
      )
    );

    $this->form_validation->set_rules($validate_data);
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

    if($this->form_validation->run() === true) {
      $this->load->library('session');
      $userId = $this->session->userdata('user_id');

      $update = $this->users_model->update($userId);

      if($update) {

        $validator['success'] = true;
        $validator['messages'] = 'Successfully Updated';
      }
      else {
        $validator['success'] = false;
        $validator['messages'] = 'Incorrect Password';
      } // /else
    }
    else {
      $validator['success'] = false;
      foreach ($_POST as $key => $value) {
        $validator['messages'][$key] = form_error($key);
      }
    }

    echo json_encode($validator);
  }

  public function username_exists()
  {
    $this->load->library('session');
    $userId = $this->session->userdata('user_id');

    $username_exists = $this->users_model->usernameExists($userId);

    if($username_exists === false) {
      return true;
    }
    else {
      $this->form_validation->set_message('username_exists', 'The {field} already exists');
      return false;
    }
  }

  public function changepassword()
  {
    $validator = array('success' => false, 'messages' => array());

    $validate_data = array(
      array(
        'field' => 'currentPassword',
        'label' => 'Current Password',
        'rules' => 'required|callback_validCurrentPassword'
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
      )
    );

    $this->form_validation->set_rules($validate_data);
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

    if($this->form_validation->run() === true) {
      $this->load->library('session');
      $userId = $this->session->userdata('user_id');

      $changepassword = $this->users_model->changepassword($userId);

      if($changepassword) {
        $validator['success'] = true;
        $validator['messages'] = 'Successfully Updated';
      }
    }
    else {
      $validator['success'] = false;
      foreach ($_POST as $key => $value) {
        $validator['messages'][$key] = form_error($key);
      }
    }

    echo json_encode($validator);
  }

  public function validCurrentPassword()
  {
    $this->load->library('session');
    $userId = $this->session->userdata('user_id');

    $password_exists = $this->users_model->validCurrentPassword($userId);

    if($password_exists === true) {
      return true;
    }
    else {
      $this->form_validation->set_message('validCurrentPassword', 'The {field} value is invalid');
      return false;
    }

  }
}
