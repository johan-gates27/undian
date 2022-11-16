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

    if (empty($this->session->userdata('conf_color'))) {
      $this->session->set_userdata("conf_color", "primary");
    }

    if (empty($this->session->userdata('conf_size'))) {
      $this->session->set_userdata("conf_size", "h2");
    }
  }

  public function index()
  {
    $data['jml_pemenang_param'] = 1;
    $data['list_hadiah'] = $this->undian_model->get_list_hadiah();
    $data['list_peserta'] = $this->undian_model->get_list_peserta();
    $data['list_pemenang'] = $this->undian_model->get_list_pemenang();
    $data['list_hangus'] = $this->undian_model->get_list_hangus();
    $this->load->view('undian/undian', $data);
  }

  public function simpan()
  {
    $response = array(
      'csrfName' => $this->security->get_csrf_token_name(),
      'csrfHash' => $this->security->get_csrf_hash()
    );
    $pemenang = $this->input->post('pemenang');
    $hangus = $this->input->post('hangus');
    $id_hadiah = $this->input->post('id_hadiah');
    $id_batch = date('YmdHis');

    $simpan_pemenang = 0;
    $simpan_hangus = 0;

    if (!empty($pemenang)) {
      foreach ($pemenang as $nik) {
        $simpan_pemenang = $simpan_pemenang + $this->undian_model->insert_pemenang(["nik" => $nik, "id_hadiah" => $id_hadiah, "id_batch" => $id_batch]);
      }
    }

    if (!empty($hangus)) {
      foreach ($hangus as $nik) {
        $simpan_hangus = $simpan_hangus + $this->undian_model->insert_hangus(["nik" => $nik, "id_hadiah" => $id_hadiah, "id_batch" => $id_batch]);
      }
    }

    // $response['pemenang'] = $pemenang;
    // $response['hangus'] = $hangus;
    $response['simpan_pemenang'] = $simpan_pemenang;
    $response['simpan_hangus'] = $simpan_hangus;

    echo json_encode($response);
  }

  public function config_ui()
  {
    $response = array(
      'csrfName' => $this->security->get_csrf_token_name(),
      'csrfHash' => $this->security->get_csrf_hash()
    );

    $color = $this->input->post('color');
    $size = $this->input->post('size');

    if (!empty($color)) {
      $this->session->set_userdata("conf_color", $color);
    }

    if (!empty($size)) {
      $this->session->set_userdata("conf_size", $size);
    }

    echo json_encode($response);
  }
}
