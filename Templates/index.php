<?php
// Demarrage de la temporisation (rien de s'affichera)
ob_start() ;

// On teste si un paramètre qui s'appelle "page" est présent dans l'URL

if(isset($_GET['page'])){
	// Si cela existe on recupere sa valeur
	$page = $_GET['page'] ;
} 
// Si le parametre n'existe pas    
else { 
	// On donne une valeur par defaut à $page
	$page = 'accueil';
}


// Switch va tester la valeur de $page et le code correspondand au "cas"
switch($page) :

	// Si $page est égal à "accueil"
	case 'accueil' :
   		// On ajoute une variable pour le tite de la page accueil
   		$title = "Site perso :: Accueil" ;
		// On integre le contenu de la page
		include 'pages/accueil.php' ;
	break;
   
   	// On ajoute le code nécessaire pour la nouvelle page 
   	// Si $page est égal à "test"
	case 'test' :
   		// On ajoute une variable pour le tite de la page test
   		$title = "Site perso :: Page de test" ;
		include 'pages/test.php' ;
	break;
  
    // Si aucun "cas" ne correspond à la valeur de $page
	default :
   		// On ajoute une variable pour le tite de la page par defaut
   		$title = "Site perso :: Accueil" ;
		// On intégrer une page par defaut...
   		// Nous  pouvons integrer la page d'accueil ou bien creer une page d'erreur specifique 
   		include 'pages/accueil.php' ; 
	break;

endswitch ;


// On recupere dans une variable le contenu du tampon 
$contenu = ob_get_clean() ;

// On intégre le template qui utilise la variable $contenu 
include 'template/template.php' ;
