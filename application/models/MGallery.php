<?php
 class MGallery extends Model{
 
var $gallery_path;
 
function MGallery(){
 parent::Model();
 
$this->gallery_path = realpath(APPPATH . '../images');
 }
 
function do_upload(){
 $config = array(
 'allowed_types'=>'jpg|jpeg|gif|png',
 'upload_path' => $this->gallery_path,
 'max_size' => 2000
 );
 
$this->load->library('upload',$config);
 $this->upload->do_upload();
 $image_data = $this->upload->data();
 
$config = array(
 'source_image'=> $image_data['full_path'],
 'new_image'=>$this->gallery_path . '/thumbs',
 'maintain_ration'=>true,
 'width'=>160,
 'height'=>120
 );
 
$this->load->library('image_lib', $config);
 $this->image_lib->resize();
 }
 }