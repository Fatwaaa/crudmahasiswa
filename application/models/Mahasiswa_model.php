<?php
defined("BASEPATH") OR exit("No direct script access allowed"); 

class Mahasiswa_model extends CI_Model {

    public function getMahasiswa($id = null){
    {   
        if($id == NULL){
        return $this->db->get('mahasiswa')->result_array();
    }
    else{
        return $this->db->get_where('mahasiswa', ['id_mhs'=> $id])->result_array();
     }
     
    }
}
}