<?PHP
include "../entities/clientf.php";
include "../cores/clientfC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['sexe']) ){
$clientf1=new clientf($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['sexe']);

$clientf1C=new clientfC();
$clientf1C->ajouterclientf($clientf1);
header('Location: ZINK_FI/index.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>