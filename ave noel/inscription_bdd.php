<?php
session_start();
if(isset($_POST['user']) && 
   isset($_POST['mail']) && 
   isset($_POST['nom']) && 
   isset($_POST['prenom']) && 
   isset($_POST['password']))
{
    // connexion à la base de données
    $user = 'root';
    $mdp = '';
    $bdd = 'avenoel';
    $serveur = 'localhost:3306';

    
    $db = mysqli_connect($serveur, $user, $mdp,$bdd)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $user = mysqli_real_escape_string($db,htmlspecialchars($_POST['user']));
    $mail = mysqli_real_escape_string($db,htmlspecialchars($_POST['mail'])); 
    $nom = mysqli_real_escape_string($db,htmlspecialchars($_POST['nom']));
    $prenom = mysqli_real_escape_string($db,htmlspecialchars($_POST['prenom']));
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    
        $requete = "INSERT into client values (null, '.$user.', '.$mail.', '.$nom.', '.$prenom.', '.$password.',0,null,null)";
        $exec_requete = mysqli_query($db,$requete);
        $_SESSION['mail'] = $mail;
           header('Location: index.php');
}
else
{
   header('Location: inscription.php');
}
mysqli_close($db); // fermer la connexion
?>
