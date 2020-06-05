<?php defined('BASEPATH') OR exit('No direct script acces alowed');

/**
 * 
 */
class M_barang extends CI_model
{
	private $_table = "table_barang";

	public $kode_barang;
	public $nama;
	public $harga1;
	public $harga2;
	public $harga3;
	public $harga4;
	public $harga5;

	public function rules()
	{
		return [
			['field' => 'nama',
			'label' => 'Nama Barang',
			'rules' => 'required'],

			['field' => 'harga1',
			'label' => 'Harga 1',
			'rules' => 'numeric'],

			['field' => 'harga2',
			'label' => 'Harga 2',
			'rules' => 'numeric'],

			['field' => 'harga3',
			'label' => 'Harga 3',
			'rules' => 'numeric'],

			['field' => 'harga4',
			'label' => 'Harga 4',
			'rules' => 'numeric'],

			['field' => 'harga5',
			'label' => 'Harga 5',
			'rules' => 'numeric'],

			['field' => 'stok',
			'label' => 'stok',
			'rules' => 'numeric']

		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["kode_barang" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		// $this->kode_barang = uniqid();
		$this->nama = $post['nama'];
		$this->harga1 = $post['harga1'];
		$this->harga2 = $post['harga2'];
		$this->harga3 = $post['harga3'];
		$this->harga4 = $post['harga4'];
		$this->harga5 = $post['harga5'];
		$this->stok = $post['stok'];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->kode_barang = $post['kode_barang'];
		$this->nama = $post['nama'];
		$this->harga1 = $post['harga1'];
		$this->harga2 = $post['harga2'];
		$this->harga3 = $post['harga3'];
		$this->harga4 = $post['harga4'];
		$this->harga5 = $post['harga5'];
		$this->stok = $post['stok'];
		$this->db->update($this->_table, $this, array('kode_barang' => $post['kode_barang']));

	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array('kode_barang' => $id));
	}

}