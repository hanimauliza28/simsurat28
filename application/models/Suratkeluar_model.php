<?php

class Suratkeluar_model extends CI_Model{
    function getdata(){       
        return $this->db->order_by('tgl_surat', 'DESC')->get('tb_suratkeluar')->result_array();
    }

    function insert($data){
        return $this->db->insert('tb_suratkeluar',$data);
    }
    function delete($id_surat){
        return $this->db->where(['id_surat' => $id_surat])->delete('tb_suratkeluar');
    }
    function find($id_surat){
        $sql = $this->db->query('SELECT * FROM tb_suratkeluar WHERE id_surat='.$id_surat.''); 
        return $sql->row_array();
    }
    
    function update($id_surat, $data){
        return $this->db
                ->where(['id_surat' => $id_surat])
                ->update('tb_suratkeluar',$data);
    }

    function lap($tgl_atas, $tgl_bawah){
        $sql = $this->db->query('SELECT * FROM view_suratkeluar WHERE tgl_surat BETWEEN "'.$tgl_atas.'" AND "'.$tgl_bawah.'" ORDER BY tgl_surat ASC'); 
        return $sql->result_array();
    }
}
