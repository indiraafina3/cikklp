<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

function validate(){
	$username = $this->input->post('username');
 	$password = $this->input->post('password');
  	$this->db->get_where('user',$arr)->row();
}
}