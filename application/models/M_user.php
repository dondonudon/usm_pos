<?php defined('BASEPATH') OR exit('No direct script acces alowed');

/**
 * 
 */
class M_user extends CI_model
{
	private $_table = "user";

	public $id;
	public $nama_lengkap;
	public $email;
	public $telepon;
	public $jabatan;
	public $username;
	public $password;

	public function rules()
	{
		return [
			['field' => 'nama_lengkap',
			'label' => 'Nama Lengkap',
			'rules' => 'required'],

			['field' => 'username',
			'label' => 'Username',
			'rules' => 'required'],

			['field' => 'password',
			'label' => 'Password',
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
		return $this->db->get_where($this->_table, ["id" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		// $this->kode_barang = uniqid();
		$this->nama_lengkap = $post['nama_lengkap'];
		$this->email = $post['email'];
		$this->telepon = $post['telepon'];
		$this->jabatan = $post['jabatan'];
		$this->username = $post['username'];
		$this->password = $post['password'];
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post['id'];
		$this->nama_lengkap = $post['nama_lengkap'];
		$this->email = $post['email'];
		$this->telepon = $post['telepon'];
		$this->jabatan = $post['jabatan'];
		$this->username = $post['username'];
		$this->password = $post['password'];
		$this->db->update($this->_table, $this, array('id' => $post['id']));

	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array('id' => $id));
	}

}