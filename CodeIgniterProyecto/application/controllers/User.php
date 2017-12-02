<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    
    function dashboard(){

        $this->load->view('user/dashboard');
    }



   public function index(){

        $this->load->view('user/home');
    }

    public function login()
    {
        $this->load->view('user/login');
    }

    public function register_user()
    {
        $this->load->view('user/register_user');
	}
     public function register_ride()
    {
        $this->load->view('user/register_ride');
    }
	
	public function authenticate() {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$r = $this->User_model->authenticate($username, $password);

		if (count($r) > 0 ) {
			$user = $r[0];
            echo "Welcome {$user->username}";
			redirect('register_ride');
		} else {
			echo "Invalid user name or password";
		}
	}

	public function list() {
       $userlog=$this->input->post('username');
       $users = $this->User_model->all($userlog);

        
        $data['rides'] = $users;
        $data['title'] = 'List of your rides';
        
        $this->load->view('user/list', $data);

	}



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

    public function saveRide()
    {
        // get the params
        $user_create=$this->input->post('username');
        $name = $this->input->post('name');
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $descripcion = $this->input->post('descripcion');
        $departure = $this->input->post('departure');
        $estimate = $this->input->post('estimate');
        $days = $this->input->post('days');
        


        $ride = array(
            'user_create' => $user_create,
            'name' => $name,
            'start' => $start,
            'end' => $end,
            'descripcion' => $descripcion,
            'departure' => $departure,
            'estimate' => $estimate,
            'days'=> $days

        );
        // call the model to save
        $r = $this->User_model->saveRide($ride);
        
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
