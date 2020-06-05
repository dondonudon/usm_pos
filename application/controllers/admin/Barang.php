<?php defined('BASEPATH') OR exit('No direct script acces allowed');

/**
 * 
 */
class Barang extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_barang");
		$this->load->library("form_validation");
		// $this->load->model("M_login");
		// if($this->M_login->isNotLogin()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data["barang"] = $this->M_barang->getAll();
		$this->load->view("admin/barang/list", $data);
	}

	public function add()
	{
		$barang = $this->M_barang;
		$validation = $this->form_validation;
		$validation->set_rules($barang->rules());

		if ($validation->run()) {
			$barang->save();
			$this->session->set_flashdata('success', 'Berhasil Disimpan');
		}

		$this->load->view("admin/barang/new_form");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/barang/');

		$barang = $this->M_barang;
    	$validation = $this->form_validation;
    	$validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->update();
        	$this->session->set_flashdata('success', 'Berhasil Update');       
        	// $this->load->view("admin/barang/edit_form", $data);
		}

		$data["barang"] = $barang->getById($id);
		if (!$data["barang"]) show_404();

		$this->load->view("admin/barang/edit_form", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_barang->delete($id)) {
			redirect(site_url('admin/barang'));
		}
	}
}