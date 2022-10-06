<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Undian_model extends CI_Model
{

  function get_ref_param_scoring($custom_select = NULL, $where_array, $order = NULL)
  {
    if (!empty($where_array)) {
      $this->db->where($where_array);
    }

    if (!empty($custom_select)) {
      $this->db->select($custom_select, false);
    };

    if (!empty($order)) {
      $this->db->order_by($order);
    };

    $query = $this->db->get('ref_param_scoring');
    // print_r($this->db->last_query());
    return $query->result();
  }
}
