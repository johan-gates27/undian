<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undian extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('undian_model');
    $this->load->library('session');
    $this->load->helper('file');
  }

  public function index()
  {
    $data['jml_pemenang_param'] = 1;
    $data['list_hadiah'] = $this->undian_model->get_list_hadiah();
    $data['list_peserta'] = $this->undian_model->get_list_peserta();
    $this->load->view('undian/undian', $data);
  }
}
