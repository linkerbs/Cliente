<?php 
class Plan_model extends CI_Model {
 
 var $API ="";
 function __construct() {
 parent::__construct();
 $this->API="http://localhost/ApiInternet/index.php/";
 }
 
 function list_plan(){
 return json_decode($this->restclient->get());
 }
 
 function plan($id){
 $params = array('Id'=>  $id);
 return json_decode($this->restclient->get($params),true);
 }
 
 function save($array)
 {
 $this->restclient->post($array);
 }
 
 function update($array)
 {
 $this->restclient->put($array);
 }
 
 function delete($id)
 {
 $this->restclient->delete($id);
 }
}
?>