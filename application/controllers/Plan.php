<?php

class Plan extends CI_Controller {

 public function index(){
 $this->load->model('plan_model');
 $data['plan_list'] = $this->plan_model->list_plan();
 $data['title'] = "Planes";
 $this->load->view('plan_list',$data);
 }
 
 public function add()
 {
 $this->load->view('plan_form');
 }
 
 public function save()
 {
 $array_item = array(
 'proveedor' => $this->input->post('proveedor'),
 'velocidad' => $this->input->post('velocidad'),
 'calidad' => $this->input->post('calidad'),
 'precio' => $this->input->post('precio'),

 );
 $this->load->model('plan_model');
 $save = $this->plan_model->save($array_item);
 redirect('plan');
 }
 
 public function save_edit()
 {
 $array_item = array(
    'Id' => $this->input->post('Id'),
    'proveedor' => $this->input->post('proveedor'),
    'velocidad' => $this->input->post('velocidad'),
    'calidad' => $this->input->post('calidad'),
    'precio' => $this->input->post('precio'),
 );
 $this->load->model('plan_model');
 $this->plan_model->update($array_item);
 redirect('plan');
 }
 
 public function edit(){
 $this->load->model('plan_model');
 $data['plan'] = $this->plan_model->plan($this->uri->segment(3))[0];
 $this->load->view('plan_edit',$data);
 }
 
 public function delete()
 {
 $id = $this->uri->segment(3);
 $this->load->model('plan_model');
 $this->plan_model->delete($id);
 redirect('plan');
 }
}