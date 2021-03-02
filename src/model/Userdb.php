<?php
    require_once'db.php';
    
    function addUser($prenom,$nom,$email,$mdp,$etat)
    {
        $bdd=getConnection();
        $req=('INSERT INTO utilisateur (prenom,nom,email,etat,mdp) VALUES(:prenom,:nom,:email,:mdp,:etat)');   
        $req2=(array(
            'prenom'=>$prenom,
            'nom'=>$nom,
            'email'=>$email,
            'mdp'=>$mdp,
            'etat'=>$etat
                    ));
        return $bdd->prepare($req)->execute($req2); 
    }
    function verfierConnection($email,$mdp)
    {
        $bdd=getConnection();
        $req=("SELECT * FROM utilisateur WHERE email= '$email' AND mdp = '$mdp'");  
        return $bdd->query($req)->fetch(); 
    }

    
?>