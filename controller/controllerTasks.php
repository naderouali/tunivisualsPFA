<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelTasks.php");


if(isset($_REQUEST['action']))	
	$action = $_REQUEST['action'];

	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "tasks management";
        $view = "readAll";
       	$tab_u = ModelTasks::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
    case "readbyadmin":	
		if(isset($_REQUEST['tasks_id'])){
			$tasks_id = $_REQUEST['tasks_id'];
			$u = ModelTasks::select($tasks_id);
				if($u!=null){
					$pagetitle = " tasks info ";
					$view = "readbyadmin";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
	case "read":	
		if(isset($_REQUEST['tasks_id'])){
			$tasks_id = $_REQUEST['tasks_id'];
			$u = ModelTasks::select($tasks_id);
				if($u!=null){
					$pagetitle = " tasks info ";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['tasks_id'])){
			$tasks_id = $_REQUEST['tasks_id'];
			$del = ModelTasks::select($tasks_id);
			if($del!=null){
			$del->delete($tasks_id);
			header('Location: index.php?controller=tasks&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "pass an tasks ";
		$view = "create";
       
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if( isset($_REQUEST['oc']) && isset($_REQUEST['ock']) &&isset($_REQUEST['om'])&& isset($_REQUEST['od'])&& isset($_REQUEST['add'])){
			$tasks_id = mt_rand(1,9999);
			$oc = $_REQUEST["oc"];
            $ock= $_REQUEST["ock"];
            $om= $_REQUEST["om"];
			$od = $_REQUEST["od"];
            $add = $_REQUEST["add"];

			
			$recherche = ModelTasks::select($tasks_id);
			if($recherche==null){
				$u = new ModelTasks($tasks_id,$oc,$ock,$om,$od,$add);	
				$tab = array(
				"tasks_id" => $tasks_id,
				"tasks_client_cin" => $oc,
                "tasks_type" => $ock,
                "tasks_number" => $om,
				"tasks_date" => $od,
                "tasks_adress" => $add
				);				
				$u->insert($tab);
				$pagetitle = "tasks passed";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
		break;
	case "update":
		if(isset($_REQUEST['tasks_id'])){
			$tasks_id = $_REQUEST['tasks_id'];
			$up = ModelTasks::select($tasks_id);
			if($up!=null){
				$pagetitle = "edit your tasks";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if( isset($_REQUEST['oc']) && isset($_REQUEST['ock']) &&isset($_REQUEST['om'])&& isset($_REQUEST['od'])&& isset($_REQUEST['add'])){
			$oldtasks_id = $_REQUEST['task_id'];
			$tab = array(
   			 "tasks_id" => $_REQUEST["task_id"],
   			 "tasks_client_cin" => $_REQUEST["oc"],
   			 "tasks_type" => $_REQUEST["ock"],
             "tasks_number" => $_REQUEST["om"],
             "tasks_date" => $_REQUEST["od"],
             "tasks_adress" => $_REQUEST["add"]


   			 );
			$o = ModelTasks::select($oldtasks_id);
			if($o!=null){
				$u = $o->update($tab, $oldtasks_id);		
				$pagetitle = "task edited";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>
