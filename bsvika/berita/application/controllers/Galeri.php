<?php
class Galeri extends CI_Controller{
 
  function get_galeri(){
  $data['list_galeri'] = $this->Galeri_model->get_galeri_db();
  $this->load->view('galeri/galeri_view',$data);
 }
 function input(){
   $this->load->view('galeri/galeri_input');
 }
 function input_proses() {
   $data  = array(
       'judul'=>$this->input->post('judul'),
   );
   $this->Galeri_model->input_db($data);
   header('location:'.site_url('galeri/get_galeri'));
 }
 function hapus($id){
   $this->Galeri_model->hapus_db($id);
     header('location:'.site_url('galeri/get_galeri'));
 }
 function get_by_id($id){
   $data['list_galeri'] = $this->Galeri_model->get_by_id_db($id);
   $this->load->view('galeri/galeri_edit',$data);

 }
 function update(){
   $id = $this->input->post('id_galeri');
   $data  = array(
       'judul'=>$this->input->post('judul'),
   );
   $this->Galeri_model->update_db($data,$id);
     header('location:'.site_url('galeri/get_galeri'));
 }
 }
