<?php defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        // check_admin();
        $this->load->model('customer_m');
    }
	
	public function index()
	{
		$data['row'] = $this->customer_m->get();
		$this->template->load('template', 'customer/customer_data', $data);
	}

	public function add() 
	{
		$customer = new stdClass();
		$customer->id_perusahaan = null;
		$customer->name = null;
        $customer->sektor_perusahaan = null;
		$customer->phone = null;
		$customer->email = null;
		$customer->address = null;
		$data = array(
			'page' => 'add',
			'row' => $customer
		);
		$this->template->load('template', 'customer/customer_form', $data);
	}

	public function edit($id)
	{
		$query = $this->customer_m->get($id);
		if($query->num_rows() > 0) {
			$customer = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $customer
			);
			$this->template->load('template', 'customer/customer_form', $data);
		} else {
			echo "<script>alert('data not found');";
            echo "window.location='".site_url('customer')."';</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->customer_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->customer_m->edit($post);
		}

		if($this->db->affected_rows() > 0) {
            echo "<script>alert('data saved successfully');</script>";
        }
        echo "<script>window.location='".site_url('customer')."';</script>";
	}

	public function del($id)
	{
		$this->customer_m->del($id);
		if($this->db->affected_rows() > 0) {
            echo "<script>alert('data deleted successfully');</script>";
        }
        echo "<script>window.location='".site_url('customer')."';</script>";

	}
}
