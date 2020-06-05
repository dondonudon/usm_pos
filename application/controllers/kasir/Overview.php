<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		// $this->load->model("auth");
		// if($this->auth->isNotLogin()) redirect(site_url('kasir/login'));
	}

	public function index()
	{
        // load view kasir/overview.php
        $this->load->view("kasir/overview");
	}
}