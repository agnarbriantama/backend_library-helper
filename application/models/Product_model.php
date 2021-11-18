<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "data";

    public $id_mahasiswa;
    public $name;
    public $nim;
    public $jenis_kelamin;
    public $alamat;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'nim',
            'label' => 'NIM',
            'rules' => 'required'],
            
            ['field' => 'jenis_kelamin',
            'label' => 'jenis_kelamin',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_mahasiswa" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_mahasiswa = uniqid();
        $this->name = $post["name"];
        $this->nim = $post["nim"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_mahasiswa = $post["id"];
        $this->name = $post["name"];
        $this->nim = $post["nim"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->db->update($this->_table, $this, array('id_mahasiswa' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_mahasiswa" => $id));
    }
}
