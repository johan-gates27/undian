<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Undian extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    // $this->load->model('undian_model');
    $this->load->library('session');
    $this->load->helper('file');
  }

  public function index()
  {
    $data['jml_pemenang_param'] = 1;
    $data['list_peserta'] = [
      ["NIK" => "111",  "NAMA" => "NAMA 111",  "BAGIAN" => "BAGIAN 111"],
      ["NIK" => "112",  "NAMA" => "NAMA 112",  "BAGIAN" => "BAGIAN 112"],
      ["NIK" => "113",  "NAMA" => "NAMA 113",  "BAGIAN" => "BAGIAN 113"],
      ["NIK" => "114",  "NAMA" => "NAMA 114",  "BAGIAN" => "BAGIAN 114"],
      ["NIK" => "115",  "NAMA" => "NAMA 115",  "BAGIAN" => "BAGIAN 115"],
      ["NIK" => "116",  "NAMA" => "NAMA 116",  "BAGIAN" => "BAGIAN 116"],
      ["NIK" => "117",  "NAMA" => "NAMA 117",  "BAGIAN" => "BAGIAN 117"],
      ["NIK" => "118",  "NAMA" => "NAMA 118",  "BAGIAN" => "BAGIAN 118"],
      ["NIK" => "119",  "NAMA" => "NAMA 119",  "BAGIAN" => "BAGIAN 119"],
      ["NIK" => "120",  "NAMA" => "NAMA 120",  "BAGIAN" => "BAGIAN 120"],
      ["NIK" => "121",  "NAMA" => "NAMA 121",  "BAGIAN" => "BAGIAN 121"],
      ["NIK" => "122",  "NAMA" => "NAMA 122",  "BAGIAN" => "BAGIAN 122"],
      ["NIK" => "123",  "NAMA" => "NAMA 123",  "BAGIAN" => "BAGIAN 123"],
      ["NIK" => "124",  "NAMA" => "NAMA 124",  "BAGIAN" => "BAGIAN 124"],
      ["NIK" => "125",  "NAMA" => "NAMA 125",  "BAGIAN" => "BAGIAN 125"],
      ["NIK" => "126",  "NAMA" => "NAMA 126",  "BAGIAN" => "BAGIAN 126"],
      ["NIK" => "127",  "NAMA" => "NAMA 127",  "BAGIAN" => "BAGIAN 127"],
      ["NIK" => "128",  "NAMA" => "NAMA 128",  "BAGIAN" => "BAGIAN 128"],
      ["NIK" => "129",  "NAMA" => "NAMA 129",  "BAGIAN" => "BAGIAN 129"],
      ["NIK" => "130",  "NAMA" => "NAMA 130",  "BAGIAN" => "BAGIAN 130"],
      ["NIK" => "131",  "NAMA" => "NAMA 131",  "BAGIAN" => "BAGIAN 131"],
      ["NIK" => "132",  "NAMA" => "NAMA 132",  "BAGIAN" => "BAGIAN 132"],
      ["NIK" => "133",  "NAMA" => "NAMA 133",  "BAGIAN" => "BAGIAN 133"],
      ["NIK" => "134",  "NAMA" => "NAMA 134",  "BAGIAN" => "BAGIAN 134"],
      ["NIK" => "135",  "NAMA" => "NAMA 135",  "BAGIAN" => "BAGIAN 135"],
      ["NIK" => "136",  "NAMA" => "NAMA 136",  "BAGIAN" => "BAGIAN 136"],
      ["NIK" => "137",  "NAMA" => "NAMA 137",  "BAGIAN" => "BAGIAN 137"],
      ["NIK" => "138",  "NAMA" => "NAMA 138",  "BAGIAN" => "BAGIAN 138"],
      ["NIK" => "139",  "NAMA" => "NAMA 139",  "BAGIAN" => "BAGIAN 139"],
      ["NIK" => "140",  "NAMA" => "NAMA 140",  "BAGIAN" => "BAGIAN 140"],
      ["NIK" => "141",  "NAMA" => "NAMA 141",  "BAGIAN" => "BAGIAN 141"],
      ["NIK" => "142",  "NAMA" => "NAMA 142",  "BAGIAN" => "BAGIAN 142"],
      ["NIK" => "143",  "NAMA" => "NAMA 143",  "BAGIAN" => "BAGIAN 143"],
      ["NIK" => "144",  "NAMA" => "NAMA 144",  "BAGIAN" => "BAGIAN 144"],
      ["NIK" => "145",  "NAMA" => "NAMA 145",  "BAGIAN" => "BAGIAN 145"],
      ["NIK" => "146",  "NAMA" => "NAMA 146",  "BAGIAN" => "BAGIAN 146"],
      ["NIK" => "147",  "NAMA" => "NAMA 147",  "BAGIAN" => "BAGIAN 147"],
      ["NIK" => "148",  "NAMA" => "NAMA 148",  "BAGIAN" => "BAGIAN 148"],
      ["NIK" => "149",  "NAMA" => "NAMA 149",  "BAGIAN" => "BAGIAN 149"],
      ["NIK" => "150",  "NAMA" => "NAMA 150",  "BAGIAN" => "BAGIAN 150"],
      ["NIK" => "151",  "NAMA" => "NAMA 151",  "BAGIAN" => "BAGIAN 151"],
      ["NIK" => "152",  "NAMA" => "NAMA 152",  "BAGIAN" => "BAGIAN 152"],
      ["NIK" => "153",  "NAMA" => "NAMA 153",  "BAGIAN" => "BAGIAN 153"],
      ["NIK" => "154",  "NAMA" => "NAMA 154",  "BAGIAN" => "BAGIAN 154"],
      ["NIK" => "155",  "NAMA" => "NAMA 155",  "BAGIAN" => "BAGIAN 155"],
      ["NIK" => "156",  "NAMA" => "NAMA 156",  "BAGIAN" => "BAGIAN 156"],
      ["NIK" => "157",  "NAMA" => "NAMA 157",  "BAGIAN" => "BAGIAN 157"],
      ["NIK" => "158",  "NAMA" => "NAMA 158",  "BAGIAN" => "BAGIAN 158"],
      ["NIK" => "159",  "NAMA" => "NAMA 159",  "BAGIAN" => "BAGIAN 159"],
      ["NIK" => "160",  "NAMA" => "NAMA 160",  "BAGIAN" => "BAGIAN 160"]
    ];
    $this->load->view('undian/undian', $data);
  }
}
