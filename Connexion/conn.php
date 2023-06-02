<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=e-commerce", "root", "");
} catch (PDOException $e) {
    echo "Errreur de connexion " . $e->getMessage();
}
