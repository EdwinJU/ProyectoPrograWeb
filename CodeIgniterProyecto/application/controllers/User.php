<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    
    function home(){

        $this->load->view('user/home');
    }



   public function index(){

        $this->load->view('user/home');
    }

    public function login()
    {
        $this->load->view('user/login');
    }

    public function register()
    {
        $this->load->view('user/register');
	}
	
	public function authenticate() {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$r = $this->User_model->authenticate($username, $password);
		if (count($r) > 0 ) {
			$user = $r[0];
			redirect('home');
		} else {
			echo "Invalid user name or password";
		}
	}

	//public function list() {
      // $busqueda=$this->input->post('busqueda');
       //$users = $this->User_model->all($busqueda);

        
        //$data['musicos'] = $users;
        //$data['title'] = 'List of Users';
        
        //$this->load->view('user/list', $data);

	//}



    public function save()
    {
		// get the params
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $phone = $this->input->post('phone');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        


		$user = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone' => $phone,
            'username' => $username,
            'password' => $password

        );
		// call the model to save
		$r = $this->User_model->save($user);
		
		// redirect
        if ($r) {
            // $this->session->set_flashdata('message', 'User saved');
            redirect('login');
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('user/register');
        }
    }
}
