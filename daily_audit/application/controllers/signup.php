<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}
	public function sign()
	{
		if ($this->input->post('signup'))
		 {
				$signup = array('email' => $this->input->post('email') ,
								'password' =>$this->input->post('password') 
								);
				$query = $this->model->insert('login',$signup);

				if ($query) 
				{
					$this->index();
				}
		 }	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */