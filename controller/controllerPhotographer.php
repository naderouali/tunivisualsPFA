<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelPhotographer.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelAdmin.php"); 
if(isset($_REQUEST['action']))	

	$action = $_REQUEST['action'];

	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "photographer management ";
        $view = "readAll";
       	$tab_u = ModelPhotographer::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "read":	
		if(isset($_REQUEST['code'])){
			$code = $_REQUEST['code'];
			$u = ModelPhotographer::select($code);
				if($u!=null){
					$pagetitle = " photographer info ";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['code'])){
			$code = $_REQUEST['code'];
			$del = ModelPhotographer::select($code);
			if($del!=null){
			$del->delete($code);
			header('Location: index.php?controller=photographer&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Add a photographer ";
		$view = "create";
		$admin=ModelAdmin::getAll();
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['code']) && isset($_REQUEST['cn']) && isset($_REQUEST['cln'])&& isset($_REQUEST['s'])
			&& isset($_REQUEST['exp'])&& isset($_REQUEST['cd'])){
			$code = $_REQUEST["code"];
			$cn = $_REQUEST["cn"];
            $cln = $_REQUEST["cln"];
			$s = $_REQUEST["s"];
            $exp = $_REQUEST["exp"];
			$cd = $_REQUEST["cd"];

			
			$recherche = ModelPhotographer::select($code);
			if($recherche==null){
				$u = new ModelPhotographer($code, $cn, $cln, $s, $exp,$cd);	
				$tab = array(
				"code" => $code,
				"photographername" => $cn,
                "photographerlastname" => $cln,
				"salary" => $s,
                "expyear" => $exp,
				"code_admin"=>$cd
				);				
				$u->insert($tab);
				$pagetitle = "photographer added";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
             else{
                header('Location: index.php?controller=photographer&action=create');}
		}
		break;
	
	case "update":
		if(isset($_REQUEST['code'])){
			$code = $_REQUEST['code'];
			$up = ModelPhotographer::select($code);
			if($up!=null){
				$pagetitle = "edit photographer info";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if(isset($_REQUEST['code']) && isset($_REQUEST['cn'])&& isset($_REQUEST['cln']) && isset($_REQUEST['s'])
			&& isset($_REQUEST['exp']) && isset($_REQUEST['cd'])){
			$oldcode = $_REQUEST['code'];
			$tab = array(
   			 "code" => $_REQUEST["code"],
   			 "photographername" => $_REQUEST["cn"],
   			 "photographerlastname" => $_REQUEST["cln"],
             "salary" => $_REQUEST["s"],
             "expyear" => $_REQUEST["exp"],
			 "code_admin" => $_REQUEST["cd"]


   			 );
			$o = ModelPhotographer::select($oldcode);
			if($o!=null){
				$u = $o->update($tab, $oldcode);		
				$pagetitle = "photographer info edited";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>
