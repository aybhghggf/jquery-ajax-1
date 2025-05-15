<?php 
try {
    $pdo= new PDO('mysql:host=localhost;dbname=js_php', 'root', 'ofppt2025');
} catch (\Throwable $pdo) {
    echo "Error: " ;  
}


?>