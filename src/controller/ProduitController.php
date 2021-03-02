<?php
    require_once'../model/Produitdb.php';
    extract($_POST);
    if(isset($_POST['btnAjout']))
    {
            if(addProduit($ref,$nom,$stock)==1)
            {
                echo "ok";
            }
            else
            echo 'ERreur';
        
        header('Location:accueil');
        exit;
    }
    if(isset($_GET['delete']))
    {
        if(deleteProduit($_GET['delete'])==1)
        {
            echo "ok";
        }
        else
        echo 'ERreur';
        header('Location:accueil?message="$info"');
    }
    if(isset($_POST['btnModifier']))
    {
        $id=htmlspecialchars(trim($_POST['id']));
        $ref1=htmlspecialchars(trim($_POST['ref1']));
        $nom1=htmlspecialchars(trim($_POST['nom1']));
        $stock1=htmlspecialchars(trim($_POST['stock1']));
        if (editProduit($id,$ref1,$nom1,$stock1) == 1){
            header('Location:accueil.php');
        }else{
           // echo '<div class="col-md-10 offset-2 red-text mt-2 h2">Erreur lors de l\'ajout !</div>';                                                                                                                                                                                                                                                                                                                                                                                             
        }
    }

    if(isset($_POST['btnRechercher']))
    {
        $idRecherche=htmlspecialchars(trim($_POST['idRecherche']));
        //$refRecherche=htmlspecialchars(trim($_POST['refRecherche']));
        $nomRecherche=htmlspecialchars(trim($_POST['nomRecherche']));
        $qtRecherche=htmlspecialchars(trim($_POST['qtRecherche']));
        if ($produits=getProduitByName($nomRecherche)){
            json_encode($produits);
            header('Location:rechercherProduit.php');
        }else{
           // echo '<div class="col-md-10 offset-2 red-text mt-2 h2">Erreur lors de l\'ajout !</div>';                                                                                                                                                                                                                                                                                                                                                                                             
        }
    }
    
?>