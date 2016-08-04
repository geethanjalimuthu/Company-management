<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Controller file for employer.
*/
class employeraccess extends CI_CONTROLLER
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Employer');
	}

	public function register(){

		if($this->session->userdata('user')){
			redirect('profile','refresh');
		}
		else{
		$this->load->view('employer-registration');
		}
	}
	public function directLogin(){
		if($this->session->userdata('user')){
			redirect('profile','refresh');
		}
		else{
		$this->load->view('employer-login');
		}
	}

	public function login(){
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('designation','Designation','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run() == False){
			
			$this->load->view('employer-registration');
			//unset($this->validation_errors());
			//redirect('employer-registration','refresh');

		}
		else{
			$data = array('name'=>$this->input->post('name'),
				'emailid'=>$this->input->post('email'),
				'designation'=>$this->input->post('designation'),
				'password'=>md5($this->input->post('password')));

			$email = $this->Employer->emailcheck($data['emailid']);

			if(count($email) > 0 ){
				$this->session->set_flashdata('email',"Email already exists.Please give valid email") ;
				redirect('employer-registration','refresh');
			}
			else{
				$value = $this->Employer->register($data);
				
				if($value){
					$this->session->flashdata('success','Your account registered successfully');
					$this->load->view('employer-login');
				}
			}
		}
		
	}

	public function postEmployerLogin(){
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run() == False){
			 
			 $this->load->view('employer-login');
			
		}
		else{
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));

			$validate = $this->Employer->validateEmployer($email,$password);
			
			if(count($validate)== 1){
				//print_r($validate[0]);
				$this->session->set_userdata('user',$validate[0]);
				//print_r($this->session->userdata('user'));die();
				redirect('profile','refresh');
			}
			else{
				$this->session->set_flashdata('invalid',"invalid username or password");
				redirect('employer-login','refresh');
			}

		}
	}
	public function employerProfile(){

		if($this->session->userdata('user')){
			$this->load->view('profile');
		}
		else{
			$this->load->view('employer-login');
		}
		
	}
	public function logout(){
		if($this->session->userdata('user')){
			$this->session->unset_userdata('user');
			$this->session->set_flashdata('logout',"You logged out successfully.Thankyou");
			redirect('employer-login','refresh');
		}
	}
}