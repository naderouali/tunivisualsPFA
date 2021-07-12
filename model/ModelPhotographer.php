<?php

require_once ("Model.php"); 

class ModelPhotographer extends Model{

  private $code;
  private $photographername;
  private $photographerlastname;
  private $salary;
  private $expyear;
  private $code_admin ;
  protected static $table = 'photographer';
  protected static $primary = 'code';
   
  public function __construct($code = NULL, $photographername = NULL, $photographerlastname= NULL,  $salary = NULL,
  $expyear= NULL, $code_admin =NULL) {
    if (!is_null($code) && !is_null($photographername) && !is_null($photographerlastname) && !is_null($salary) 
		&& !is_null($expyear)&& !is_null($code_admin)) {
      $this->code = $code;
      $this->photographername = $photographername;
      $this->photographerlastname= $photographerlastname;
      $this->salary = $salary;
      $this->expyear = $expyear;
	   $this->expyear = $code_admin;
     }
  } 
 public function getCode() {
       return $this->code;  
  }
 public function getPhotographername() {
       return $this->photographername;  
  }
 public function getPhotographerlastname() {
       return $this->photographerlastname;  
  }
  public function getSalary() {
       return $this->salary;  
  }
public function getExpyear() {
       return $this->expyear;  
  }
  public function getcodeadmin() {
       return $this->code_admin;  
  }
}
?>
