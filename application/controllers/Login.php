<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $user_id=$this->input->post('user_id');
        $pass=$this->input->post('pswd');
	$this->load->model('login_model');
        if($user_id=="admin" && $pass=="1234"){
            $this->session->set_userdata('session_user_id',$user_id);
                return redirect('admin/index');
        }
        else if($user_id=="superadmin" && $pass=="1234"){
            $this->session->set_userdata('session_user_id',$user_id);
                return redirect('superadmin/index');
        }
        else if($user_id=="vendor" && $pass=="1234"){
            $this->session->set_userdata('session_user_id',$user_id);
                return redirect('vendor/index');
        }
        else if($user_id=="client" && $pass=="1234"){
            $this->session->set_userdata('session_user_id',$user_id);
                        return redirect('client/index');
        // $this->load->view('client');
        }
        
        // $user_id=$this->login_model->isvalidate($user_id,$pass);
        else if ($this->login_model->isvalidate($user_id,$pass)){
            // $this->load->library('session');
            $this->session->set_userdata('session_user_id',$user_id);
            
            return redirect('dash/index');

        }
        else{
            $this->load->library('session');
            $this->session->set_flashdata('Login_failed','Invalid Username/ Password');
            return redirect('/');
            
        }
    }
    public function logout(){
        session_unset();
		session_destroy();
        return redirect('/');
    }
	
}
