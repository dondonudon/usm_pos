<?php defined('BASEPATH') OR exit('No direct script acces allowed');

/**
 * 
 */
class User extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_user");
		$this->load->library("form_validation");
		//  $this->load->model("M_login");
		// if($this->M_login->isNotLogin()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data["user"] = $this->M_user->getAll();
		$this->load->view("admin/user/list", $data);
	}

	public function add()
	{
		$user = $this->M_user;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		if ($validation->run()) {
			$user->save();
			$this->session->set_flashdata('success', 'Berhasil Disimpan');
		}

		$this->load->view("admin/user/new_form");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/user/');

		$user = $this->M_user;
    	$validation = $this->form_validation;
    	$validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
        	$this->session->set_flashdata('success', 'Berhasil Update');       
        	// $this->load->view("admin/user/edit_form", $data);
		}

		$data["user"] = $user->getById($id);
		if (!$data["user"]) show_404();

		$this->load->view("admin/user/edit_form", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_user->delete($id)) {
			redirect(site_url('admin/user'));
		}
	}
}