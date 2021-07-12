<?php

require_once ("Model.php"); 

class ModelTasks extends Model{

  private $tasks_id;
  private $tasks_client_cin;
  private $tasks_type;
  private $tasks_number;
  private $tasks_date;
  private $tasks_adress;
  protected static $table = 'tasks';
  protected static $primary = 'tasks_id';
   
  public function __construct($tasks_id = NULL, $tasks_client_cin= NULL, $tasks_type= NULL,$tasks_number= NULL,  $tasks_date = NULL, $tasks_adress= NULL) {
    if (!is_null($tasks_id) && !is_null($tasks_client_cin) && !is_null($tasks_type)&& !is_null($tasks_number) && !is_null($tasks_date) && !is_null($tasks_adress)) {
      $this->tasks_id = $tasks_id;
      $this->tasks_client_cin = $tasks_client_cin;
      $this->tasks_type= $tasks_type;
      $this->tasks_number= $tasks_number;
      $this->tasks_date = $tasks_date;
      $this->tasks_adress = $tasks_adress;
     }
  } 
 public function getTasks_id() {
       return $this->tasks_id;  
  }
public function getTasks_client_cin() {
       return $this->tasks_client_cin;  
  }
 public function getTasks_type() {
       return $this->tasks_type;  
  }
public function getTasks_number() {
       return $this->tasks_number;  
  }
 public function getTasks_date() {
       return $this->tasks_date;  
  }
public function getTasks_adress() {
       return $this->tasks_adress;  
  }
}
?>
