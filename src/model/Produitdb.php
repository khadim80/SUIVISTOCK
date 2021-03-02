<?php
    require_once'db.php';
    
    function addProduit($ref,$nom,$stock)
    {
        $bdd=getConnection();
        $req=('INSERT INTO produit(ref,nom,qtStock) VALUES(:ref,:nom,:stock)');   
        $req2=(array(
            'ref'=>$ref,
            'nom'=>$nom,
            'stock'=>$stock,
                    ));
        return $bdd->prepare($req)->execute($req2); 
    }

    function listProduit()
    {
        $bdd=getConnection();
        $req=("SELECT * FROM produit /*ORDER BY nomProduit*/");

          return $bdd->query($req)->fetchAll();
    }

    function getNomProduit()
    {
        $bdd=getConnection();
        $req=("SELECT nom FROM produit /*ORDER BY nomProduit*/");

          return $bdd->query($req)->fetchAll();
    }

    function getStockProduit()
    {
        $bdd=getConnection();
        $req=("SELECT qtStock FROM produit /*ORDER BY nomProduit*/");

          return $bdd->query($req)->fetchAll();
    }

    function deleteProduit($id)
    {
        $bdd=getConnection();
        $req=("DELETE FROM produit WHERE id = $id");
        return $bdd->exec($req);
    }

    function getProduitById($id){
        $bdd=getConnection();
        $req ="SELECT * FROM produit WHERE idProduit = '$id' ";
        return $bdd->query($req)->fetch();
    }

    function editProduit($id,$ref,$nom,$stock){
        $bdd=getConnection();
        $req = "UPDATE produit SET nom='$nom',ref='$ref',qtStock='$stock' WHERE idProduit = $id";
        return $bdd->exec($req);
    }
    function getProduitByName($nom){
        $bdd=getConnection();
        $req ="SELECT * FROM produit WHERE nom= '$nom' ";
        return $bdd->query($req)->fetch();
    }
?>