<?php
session_start();
if(isset($_POST['mail']) && isset($_POST['password']))
{
    // connexion à la base de données
    $user = 'eviatar';
    $mdp = 'eviatar';
    $bdd = 'avenoel';
    $serveur = 'localhost:8889';

    
    $db = mysqli_connect($serveur, $user, $mdp,$bdd)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $mail = mysqli_real_escape_string($db,htmlspecialchars($_POST['mail'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($mail !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM client where 
              mail = '".$mail."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['mail'] = $mail;
           header('Location: index.php');
        }
        else
        {
           header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: connexion.php');
}
mysqli_close($db); // fermer la connexion
?>