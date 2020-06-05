<?php defined('BASEPATH') OR exit('No direct script acces alowed');

/**
 * 
 */
class M_customer extends CI_model
{
	private $_table = "table_customer";

	public $id_customer;
	public $nama_cust;
	public $alamat_cust;
	public $telepon;
	public $email_cust;

	public function rules()
	{
		return [
			['field' => 'nama_cust',
			'label' => 'Nama Customer',
			'rules' => 'required'],

			['field' => 'telepon',
			'label' => 'No. Telepon',
			'rules' => 'numeric'],

		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_customer" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		// $this->kode_barang = uniqid();
		$this->nama_cust = $post['nama_cust'];
		$this->alamat_cust = $post['alamat_cust'];
		$this->telepon = $post['telepon'];
		$this->email_cust = $post['email_cust'];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_customer = $post['id_customer'];
		$this->nama_cust = $post['nama_cust'];
		$this->alamat_cust = $post['alamat_cust'];
		$this->telepon = $post['telepon'];
		$this->email_cust = $post['email_cust'];
		$this->db->update($this->_table, $this, array('id_customer' => $post['id_customer']));

	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array('id_customer' => $id));
	}

}