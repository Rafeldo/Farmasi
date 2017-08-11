<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahasa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('bahasa_model');
  }


  public function index()
  {
      $bahasa = $this->bahasa_model->listing();

      $valid = $this->form_validation;
      $valid->set_rules('nama_bahasa','Nama','required',
            array(   'required'  => 'Nama Harus Diisi'));

      $valid->set_rules('kode_bahasa','Kode bahasa','required|is_unique[bahasa.kode_bahasa]',
            array(   'required'  => 'Kode bahasa Harus Diisi',
                     'is_unique' => 'Kode bahasa <strong>'.$this->input->post('kode_bahasa'),
                                    '</strong> Sudah Ada. Buat kode bahasa Buku Baru'));

      if($valid->run()=== FALSE)
      {
         $data = array( 'judul'  => 'Kelola Bahasa Buku',
                        'bahasa'   => $bahasa,
                        'isi'    => 'admin/bahasa/list');
         $this->load->view('admin/layout/wrapper', $data, FALSE);
      }
      else
      {
         $i = $this->input;
         $data = array( 'kode_bahasa'     => $i->post('kode_bahasa'),
                        'nama_bahasa'         => $i->post('nama_bahasa'),
                        'keterangan'   => $i->post('keterangan'),
                        'urutan'   => $i->post('urutan')
                     );
         $this->bahasa_model->tambah($data);
         $this->session->set_flashdata('sukses', 'Data Telah Ditambahkan');
         redirect(base_url('admin/bahasa'),'refresh');
      }
  }

  public function edit($id_bahasa)
  {
     $bahasa = $this->bahasa_model->detail($id_bahasa);

      $valid = $this->form_validation;
      $valid->set_rules('nama_bahasa','Nama','required',
            array(   'required'  => 'Nama Harus Diisi'));


      if($valid->run()=== FALSE)
      {
         $data = array( 'judul'  => 'Edit Bahasa Buku',
                        'bahasa'   => $bahasa,
                        'isi'    => 'admin/bahasa/edit');
         $this->load->view('admin/layout/wrapper', $data, FALSE);
      }
      else
      {
         $i = $this->input;
            $data = array( 'id_bahasa'      => $id_bahasa,
                           'kode_bahasa'     => $i->post('kode_bahasa'),
                           'nama_bahasa'         => $i->post('nama_bahasa'),
                           'keterangan'   => $i->post('keterangan'),
                           'urutan'   => $i->post('urutan'));

         $this->bahasa_model->edit($data);
         $this->session->set_flashdata('sukses', 'Data Telah Diedit');
         redirect(base_url('admin/bahasa'),'refresh');
      }
  }

  public function delete($id_bahasa)
  {
     if($this->session->userdata('kode_bahasa') == "" && $this->session->userdata('akses_level')=="")
     {
       $this->session->set_flashdata('sukses', 'Silahkan Login Dahulu');
       redirect(base_url('login'), 'refresh');
     }
     $data = array('id_bahasa'  => $id_bahasa);
     $this->bahasa_model->delete($data);
     $this->session->set_flashdata('sukses', 'Data Telah Didelete');
     redirect(base_url('admin/bahasa'),'refresh');

  }

}
