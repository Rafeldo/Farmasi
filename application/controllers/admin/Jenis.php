<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('jenis_model');
  }


  public function index()
  {
      $jenis = $this->jenis_model->listing();

      $valid = $this->form_validation;
      $valid->set_rules('nama_jenis','Nama','required',
            array(   'required'  => 'Nama Harus Diisi'));

      $valid->set_rules('kode_jenis','Kode jenis','required|is_unique[jenis.kode_jenis]',
            array(   'required'  => 'Kode jenis Harus Diisi',
                     'is_unique' => 'Kode jenis <strong>'.$this->input->post('kode_jenis'),
                                    '</strong> Sudah Ada. Buat kode jenis Buku Baru'));

      if($valid->run()=== FALSE)
      {
         $data = array( 'judul'  => 'Kelola Jenis Buku',
                        'jenis'   => $jenis,
                        'isi'    => 'admin/jenis/list');
         $this->load->view('admin/layout/wrapper', $data, FALSE);
      }
      else
      {
         $i = $this->input;
         $data = array( 'kode_jenis'     => $i->post('kode_jenis'),
                        'nama_jenis'         => $i->post('nama_jenis'),
                        'keterangan'   => $i->post('keterangan'),
                        'urutan'   => $i->post('urutan')
                     );
         $this->jenis_model->tambah($data);
         $this->session->set_flashdata('sukses', 'Data Telah Ditambahkan');
         redirect(base_url('admin/jenis'),'refresh');
      }
  }

  public function edit($id_jenis)
  {
     $jenis = $this->jenis_model->detail($id_jenis);

      $valid = $this->form_validation;
      $valid->set_rules('nama_jenis','Nama','required',
            array(   'required'  => 'Nama Harus Diisi'));


      if($valid->run()=== FALSE)
      {
         $data = array( 'judul'  => 'Edit Jenis Buku',
                        'jenis'   => $jenis,
                        'isi'    => 'admin/jenis/edit');
         $this->load->view('admin/layout/wrapper', $data, FALSE);
      }
      else
      {
         $i = $this->input;
            $data = array( 'id_jenis'      => $id_jenis,
                           'kode_jenis'     => $i->post('kode_jenis'),
                           'nama_jenis'         => $i->post('nama_jenis'),
                           'keterangan'   => $i->post('keterangan'),
                           'urutan'   => $i->post('urutan'));

         $this->jenis_model->edit($data);
         $this->session->set_flashdata('sukses', 'Data Telah Diedit');
         redirect(base_url('admin/jenis'),'refresh');
      }
  }

  public function delete($id_jenis)
  {
     if($this->session->userdata('kode_jenis') == "" && $this->session->userdata('akses_level')=="")
     {
       $this->session->set_flashdata('sukses', 'Silahkan Login Dahulu');
       redirect(base_url('login'), 'refresh');
     }
     $data = array('id_jenis'  => $id_jenis);
     $this->jenis_model->delete($data);
     $this->session->set_flashdata('sukses', 'Data Telah Didelete');
     redirect(base_url('admin/jenis'),'refresh');

  }

}
