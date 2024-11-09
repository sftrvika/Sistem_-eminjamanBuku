<?php

class Galeri_model extends CI_Model{

  function get_galeri_db(){
    $this->db->select('*');
      $this->db->from('galeri');
      return $this->db->get();
    }
    function input_db($data){
      $this->db->insert('galeri', $data);
  }
  function hapus_db($id){
    //delete from pelanggan where no_pelanggan=$id
    $this->db->where('id_galeri',$id);
    $this->db->delete('Galeri');
  }
  function get_by_id_db($id_galeri){
    $this->db->where('id_galeri',$id_galeri);
    $this->db->select('*');
      $this->db->from('galeri');
      return $this->db->get();
  }
  function update_db($data,$id){
    $this->db->where('id_galeri',$id);
    $this->db->update('galeri',$data);
  }
 }
