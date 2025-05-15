<?php
require_once 'db.php';

function getFilieres() {
    global $pdo;
    $req = "SELECT * FROM filière";
    $stm = $pdo->prepare($req);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
}

function getCategoriesByFiliere($filiere_id) {
    global $pdo;
    $req = "SELECT * FROM categorie WHERE id_filière = ?";
    $stm = $pdo->prepare($req);
    $stm->execute([$filiere_id]);
    return $stm->fetchAll(PDO::FETCH_ASSOC);
}
?>
