<?php
require_once 'config.php';
$categorie = getFilieres();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="jquery-3.7.1.min.js"></script>
    <meta charset="UTF-8">
    <title>Select Cascade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-5">

    <div class="container">
        <h2 class="mb-4">Sélection en Cascade</h2>

        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie</label>
            <select class="form-select" id="categorie" name="categorie">
                <option value="">-- Choisissez une catégorie --</option>
                <?php
                foreach ($categorie as $cate):
                ?>
                    <option value="<?= htmlspecialchars($cate['id']) ?>"><?= htmlspecialchars($cate['nom']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="filiere" class="form-label">Filière</label>
            <label for="filiere" class="form-label">Filière</label>
            <select class="form-select" id="filiere" name="filiere" disabled>
                <option value="">-- Choisissez une filière --</option>
            </select>
        </div>


    </div>

</body>
<script>
    $(document).ready(() => {
        $('#categorie').change(() => {
            let id = $('#categorie').val();
            $.ajax({
                method: 'POST',
                url: 'getfil.php',
                dataType: 'html',
                data: {
                    id: id
                },
                success: (response) => {
                    $('#filiere').html('<option value="">-- Choisissez une filière --</option>' + response);
                    $('#filiere').prop('disabled', false); 
                },

                error: (error) => {
                    console.log("Erreur f l'AJAX:", error);
                }
            });

        })
    })
</script>

</html>