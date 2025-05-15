<?php 
try {
    $pdo= new PDO('mysql:host=localhost;dbname=js_php', 'root', '');
} catch (\Throwable $pdo) {
    echo "Error: " ;  
}


?>