<?php
// __DIR__ est une constante "magique" de PHP qui contient le chemin du dossier courant
$ROOT = __DIR__;
//echo '$ROOT= '.$ROOT;
// DS contient le slash des chemins de fichiers, c'est-à-dire '/' sur Linux et '\' sur Windows
$DS = DIRECTORY_SEPARATOR;

$controleur_default = "staticpages" ;

if(!isset($_REQUEST['controller']))
				//$controller récupère $controller_default;
				$controller=$controleur_default;
			else 
				// recupère l'action passée dans l'URL
				$controller = $_REQUEST['controller'];

/*if(!isset($_REQUEST['action']))
		$_REQUEST['action'] = "readAll";
*/					
switch ($controller) {
			case "photographer" :
				require ("{$ROOT}{$DS}controller{$DS}controllerPhotographer.php");
				break;
        case "staticpages" :
				require ("{$ROOT}{$DS}controller{$DS}controllerStaticpages.php");
				break;
        case "tasks" :
				require ("{$ROOT}{$DS}controller{$DS}controllerTasks.php");
				break;
           case "feedback" :
				require ("{$ROOT}{$DS}controller{$DS}controllerFeedback.php");
				break;
				
			case "client" :
				require ("{$ROOT}{$DS}controller{$DS}controllerClient.php");
				break;	
					
			
            case "admin" :
				require ("{$ROOT}{$DS}controller{$DS}controllerAdmin.php");
				break;
			case "default" :
				require ("{$ROOT}{$DS}controller{$DS}controllerClient.php");
				break;
}
?>
