<?php

class Suratmasuk_model extends CI_Model{
    function getdata(){       
        return $this->db->order_by('tgl_diterima', 'DESC')->get('tb_suratmasuk')->result_array();
    }

    function insert($data){
        return $this->db->insert('tb_suratmasuk',$data);
    }
    function delete($id_surat){
        return $this->db->where(['id_surat' => $id_surat])->delete('tb_suratmasuk');
    }
    function find($id_surat){
        $sql = $this->db->query('SELECT * FROM tb_suratmasuk WHERE id_surat='.$id_surat.''); 
        return $sql->row_array();
    }
    
    function update($id_surat, $data){
        return $this->db
                ->where(['id_surat' => $id_surat])
                ->update('tb_suratmasuk',$data);
    }
    //ambil surat masuk dalam range dua tahun agar tidak terlalu banyak data --tidak jadi dipakai
    function get_duatahun(){       
        $thn = date('Y');
        $thnp = $thn-1;
        $sql = $this->db->query('SELECT * FROM tb_suratmasuk WHERE YEAR(tgl_surat)>="'.$thnp.'" ORDER BY tgl_surat DESC'); 
        return $sql->result_array();
    }

    function lap($tgl_atas, $tgl_bawah){
        $sql = $this->db->query('SELECT * FROM tb_suratmasuk WHERE tgl_diterima BETWEEN "'.$tgl_atas.'" AND "'.$tgl_bawah.'" ORDER BY tgl_diterima ASC'); 
        return $sql->result_array();
    }
}
