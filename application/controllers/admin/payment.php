<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->m_admin->sesiku();
	}

	public function index()
	{
		$data['payment']=$this->m_admin->tampil_payment();
		$this->load->view('admin/confirmation/payment',$data);
	}

	function confirm($reservation_code, $flag)
	{
		$reservation_code = $this->uri->segment(4);
		$flag = $this->uri->segment(5);

		echo $reservation_code;
		echo $flag;

		$data = array(
			'status' => $flag,
		);
		$this->m_admin->confirm_payemnt($reservation_code,$data);
		redirect('admin/payment','refresh');
	}

}

/* End of file reservation.php */
/* Location: ./application/controllers/reservation.php */