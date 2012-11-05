<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('Me_sec');
	}

	public function index(){

		#$data['hash']=$this->me_sec->create_hash("sample");
		#$data['password']=$this->me_sec->validate_password('sample', $data['hash']);
		$this->load->view('welcome_message',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */