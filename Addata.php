<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//echo 'chạy được chưa ?';
		$this->load->view('add_data');
		
	}
	public function insertData_controller()
	{
		$sodienthoai = $this->input->post('so');
		$giasdt  =  $this->input->post('gia');
		// truyền dữ liệu vào model
		$this->load->model('add_data_model');

		if ($this->add_data_model -> insert($sodienthoai,$giasdt)== 0) {

			echo 'thất bại rồi';
			
		}
		else {
			echo('insert thành công');
		}
		
	}

}

/* End of file Addata.controller.php */
/* Location: ./application/controllers/Addata.controller.php */