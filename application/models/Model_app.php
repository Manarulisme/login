<?php 
class Model_app extends CI_model{
    public function view($table){
        return $this->db->get($table);
    }

    public function pencarian($cari){
        return $this->db->query("SELECT * FROM biodata_identitas where MATCH (nama_lengkap, lulusan) against ('$cari' IN BOOLEAN MODE)"); 
    }
}