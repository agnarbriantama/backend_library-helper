<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["data"] = $this->product_model->getAll();
        $this->load->view("admin/product/list", $data);
    }

   public function add()
    {
         $product = $this->product_model;
         $this->load->helper(array('form', 'url'));
         $this->load->library('form_validation');
       
         $this->form_validation->set_rules('name', 'Nama Mahasiswa', 'required');
         $this->form_validation->set_rules('nim', 'NIM', 'required');
         $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
         $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ( $this->form_validation->run() == FALSE) {
            $this->load->view("admin/product/new_form");
        }
            
        else{

            $product->save();
             $this->load->view("admin/product/new_form");
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        
        }
    }

   public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/product/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
}
