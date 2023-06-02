<?php require('./header.php'); ?>

<body class="bg-secondary">
    <?php
    require('../Connexion/conn.php');
    $produit = htmlspecialchars($_POST['produit']);
    $prix = htmlspecialchars($_POST['prix']);
    $marque = htmlspecialchars($_POST['marque']);
    $couleur = htmlspecialchars($_POST['couleur']);
    $type = htmlspecialchars($_POST['type']);
    $capacite = htmlspecialchars($_POST['capacite']);
    $sql = $conn->prepare("INSERT INTO produit VALUES(?,?,?,?,?,?,?)");
    ?>
    <?php if ($sql->execute(array(NULL, $produit, $prix, $marque, $couleur, $type, $capacite))) : ?>
        <?php require('./navbar.php') ?>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal"><?= $produit ?></h4>
                    </div>
                    <div class="card-body">
                        <h1 class="">$<?= $prix ?></h1>
                        <ul class="list-unstyled">
                            <li><?= $marque ?></li>
                            <li><?= $couleur ?></li>
                            <li><?= $type ?></li>
                            <li><?= $capacite ?></li>
                        </ul>
                        <a href="./index.php"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Vendre</button></a>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <p>Erreur de vente</p>
    <?php endif; ?>
    <?php require('./footer.php'); ?>
</body>

</html>