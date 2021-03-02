<?php
    require_once'../model/Userdb.php';
    extract($_POST);
    session_start();
    if(isset($_POST['btnConnect']))
    {
        $email=htmlentities(trim($_POST['email']));
        $mdp=htmlentities(trim($_POST['mdp']));
            $user=verfierConnection($email,$mdp);
            if($user!=null)
            {
                $_SESSION['user'] =$user;
                header('Location:accueil');
            }
            else{
                header('Location:index?erreur');
            }        
    }
    if(isset($_POST['btnInscrire']))
    {
        if($mdp==$mdp1)
        {    if(addUser($prenom,$nom,$email,$etat,$mdp)==1)
            {
                header('Location:index');
            }
            
        }
        else{
            header('Location:inscription?erreurmdp');
        }
    }
?>