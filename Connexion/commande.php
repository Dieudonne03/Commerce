<?php
require('../Connexion/conn.php');
$req = $conn->prepare('SELECT * FROM produit');
$req->execute();
$comm = $req->fetchAll(PDO::FETCH_OBJ);
