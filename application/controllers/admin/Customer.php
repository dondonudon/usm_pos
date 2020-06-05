<?php defined('BASEPATH') OR exit('No direct script acces allowed');

/**
 * 
 */
class Customer extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_customer");
		$this->load->library("form_validation");
		// $this->load->model("M_login");
		// if($this->M_login->isNotLogin()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data["customer"] = $this->M_customer->getAll();
		$this->load->view("admin/customer/list", $data);
	}

	public function add()
	{
		$customer = $this->M_customer;
		$validation = $this->form_validation;
		$validation->set_rules($customer->rules());

		if ($validation->run()) {
			$customer->save();
			$this->session->set_flashdata('success', 'Berhasil Disimpan');
		}

		$this->load->view("admin/customer/new_form");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/customer/');

		$customer = $this->M_customer;
    	$validation = $this->form_validation;
    	$validation->set_rules($customer->rules());

        if ($validation->run()) {
            $customer->update();
        	$this->session->set_flashdata('success', 'Berhasil Update');       
        	// $this->load->view("admin/customer/edit_form", $data);
		}

		$data["customer"] = $customer->getById($id);
		if (!$data["customer"]) show_404();

		$this->load->view("admin/customer/edit_form", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_customer->delete($id)) {
			redirect(site_url('admin/customer'));
		}
	}
}