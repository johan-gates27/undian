<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Undian_model extends CI_Model
{

  // function get_ref_param_scoring($custom_select = NULL, $where_array, $order = NULL)
  // {
  //   if (!empty($where_array)) {
  //     $this->db->where($where_array);
  //   }

  //   if (!empty($custom_select)) {
  //     $this->db->select($custom_select, false);
  //   };

  //   if (!empty($order)) {
  //     $this->db->order_by($order);
  //   };

  //   $query = $this->db->get('ref_param_scoring');
  //   // print_r($this->db->last_query());
  //   return $query->result();
  // }



  function get_list_hadiah()
  {
    $str = "SELECT 
                h.id, 
                h.nama,
                h.qty as qty_awal,
                tmp.jml as terpakai,
                h.qty-tmp.jml as sisa
            FROM HADIAH H 
            LEFT JOIN (
              SELECT ID, SUM(JML) JML FROM (
                SELECT ID, 0 AS JML FROM HADIAH H 
                UNION
                SELECT ID_HADIAH AS ID, COUNT(ID) JML FROM PEMENANG P GROUP BY ID_HADIAH
              ) AS TMP GROUP BY ID
            ) AS TMP ON H.ID = TMP.ID
            ORDER BY H.[order] asc
            ";

    $query = $this->db->query($str);

    // print_r($this->db->last_query());
    return $query->result_array();
  }
  function get_list_peserta()
  {
    $str = "SELECT
              USR.NAME,
              USR.NIK,
              BRC.SUBPARENT_NAME,
              USR.JABATAN,
              USR.UNIT, BRC.BRANCH_NAME,
              BRC.PARENT_NAME
            FROM USERS USR 
            LEFT JOIN BRANCHS BRC ON USR.UNIT = BRC.BRANCH_CODE
            INNER JOIN ABSEN ABS ON USR.NIK = ABS.NIK
            LEFT JOIN PEMENANG PEM ON USR.NIK = PEM.NIK 
            WHERE 1=1
            AND USR.STATUS = '1'
            AND PEM.NIK IS NULL
            ;
    ";
    $query = $this->db->query($str);
    // print_r($this->db->last_query());
    return $query->result_array();
  }
}
