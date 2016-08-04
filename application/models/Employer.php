<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employer extends CI_MODEL
{
	public function __construct(){
		parent::__construct();
	}

	public function emailcheck($email){
		$this->db->select('*');
		$this->db->from('employer');
		$this->db->where(array('emailid'=>$email));
		return  $this->db->get()->result();
		}
	public function register($data){
		$insert = $this->db->insert('employer',$data);
		if($insert){
			return true;
		}
		else{
			return false;
		}
	}
	public function validateEmployer($email,$password){
		
		$this->db->select('*');
		$this->db->from('employer');
		$this->db->where('emailid',$email);
		$this->db->where('password',$password);
		$employer = $this->db->get();
		
		if($employer){
			return $employer->result_array();
		}
		else {
			return false;
		}
	}
}
?>