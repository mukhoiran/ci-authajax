<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

  public function register()
  {

    $salt = $this->salt();

    $password = $this->makePassword($this->input->post('password'), $salt);

    $insert_data = array(
      'username' => $this->input->post('username'),
      'password' => $password,
      'salt' => $salt,
      'name' => $this->input->post('fullName'),
      'contact' => $this->input->post('contact')
    );

    $this->db->insert('users', $insert_data);
  }

  public function salt()
  {
    return password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
  }

  public function makePassword($password = null, $salt = null)
  {
    if($password && $salt) {
      return hash('sha256', $password.$salt);
    }
  }
}
