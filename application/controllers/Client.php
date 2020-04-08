<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
	public function index()
	{
		if($this->session->has_userdata('session_user_id')){
			// $this->load->model('Dash_model');
			// $data['modify']=$this->Dash_model->get_personal($user_id);
			$this->load->view('client_dash',$data);
		}
		else{
		$this->load->view('dash');
	     }
	}
	public function step0()
	{
		$this->load->view('step1');
	}
	public function step1()
	{
		$this->load->view('step2');
	}
	public function step2()
	{
		$this->load->view('step3');
	}
	public function step3()
	{
		$this->load->view('step4');
	}
	public function step4()
	{
		$this->load->view('step5');
	}
	public function step5()
	{
		$this->load->view('success');
	}
	
}
