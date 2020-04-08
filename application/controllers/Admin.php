<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {
	public function index()
	{
		if($this->session->has_userdata('session_user_id')){
			// $this->load->model('Dash_model');
			// $data['modify']=$this->Dash_model->get_personal($user_id);
			$this->load->view('admin_dash',$data);
		}
		else{
		$this->load->view('dash');
	     }
	}

	public function users()
	{
		$this->load->view('admin_users');
	}
	public function order_booking()
	{
		$this->load->view('admin_order_booking');
	}
	public function vendors()
	{
		$this->load->view('admin_vendors');
	}
}