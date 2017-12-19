<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    
  //public  function dashboard(){

    //    $this->load->view('user/dashboard');
    //}



   //public function index(){

     //   $this->load->view('user/dashboard');
    //}

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
     public function Prueba()
    {
        $this->load->view('user/edit_ride');
    }
    public function Eliminar()
    {
        $this->load->view('user/eliminar_ride');
    }
    public function healp()
    {
        $this->load->view('user/healp');
    }
    public function about()
    {
        $this->load->view('user/about');
    }
     public function contact()
    {
        $this->load->view('user/contact');
    }
     public function settings()
    {
        $this->load->view('user/settings');
    }
    
	
	public function authenticate() {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$r = $this->User_model->authenticate($username, $password);

		if (count($r) > 0 ) {
			$user = $r[0];
            echo "Welcome {$user->username}";
            $s_user=array('s_username'=>$username);
            $this->session->set_userdata($s_user);
			redirect('register_ride');
		} else {
			echo "Invalid user name or password";
		}
	}

	public function list() {
        $user_create=$this->session->userdata('s_username');
       $rides = $this->User_model->all($user_create);

       $data['rides'] = $rides;
       $this->load->view('user/dashboard', $data);

	}

        public function listHome() {
        $from = $this->input->post('from');
        $to = $this->input->post('to');
       $rides = $this->User_model->allHome($from,$to);

       $data['rides'] = $rides;
       $this->load->view('user/Home', $data);

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
            redirect('user/register_user');
        }
    }

    public function saveRide()
    {
        // get the params
        $user_create=$this->session->userdata('s_username');
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
            redirect('user/register_ride');
        }
    }

    public function editRide()
    {
        // get the params
        $user_create=$this->session->userdata('s_username');
        $name = $this->input->post('name');
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $descripcion = $this->input->post('descripcion');
        $departure = $this->input->post('departure');
        $estimate = $this->input->post('estimate');
        $days = $this->input->post('days');
        


        $rideE = array(
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
        $r=$this->User_model->editRide($name,$rideE);
        
        // redirect
        if($r) {

            redirect('user/dashboard');
        }else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('user/dashboard');
        }
    }

     public function eliminarRide()
    {
        // get the params
        $name = $this->input->post('name');
       
        // call the model to save
        $r=$this->User_model->eliminarRide($name);
        
        // redirect
        if($r) {

            redirect('user/dashboard');
        }else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('user/dashboard');
        }
    }
    public function editUser()
    {
        // get the params
        $user_create=$this->session->userdata('s_username');
        $fullname = $this->input->post('fullname');
        $speed = $this->input->post('speed');
        $about = $this->input->post('about');

        $userE = array(
            'full_name' => $fullname,
            'speed_average' => $speed,
            'about_me' => $about

        );
        // call the model to save
        $r=$this->User_model->editUser($user_create,$userE);
        
        // redirect
        if($r) {

            redirect('user/dashboard');
        }else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('user/dashboard');
        }
    }


   
}
