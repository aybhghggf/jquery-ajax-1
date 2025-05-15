<?php
require_once 'config.php';

if (isset($_POST['id'])) {
    $categorie_id = $_POST['id'];
    $stmt = $pdo->prepare("SELECT id, nom FROM categorie WHERE id_filière = ?");
    $stmt->execute([$categorie_id]);
    $options = '';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $options .= '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['nom']) . '</option>';
    }
    echo $options;
}
?>
