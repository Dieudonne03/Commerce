<?php require('../Connexion/commande.php'); ?>
<?php require('header.php'); ?>

<body class="bg-secondary">
    <?php require('navbar.php'); ?>
    <div class="container py-3">
        <div class="text-center">
            <h1 class="display-4 fw-normal">E-commerce</h1>
            <p class="fs-5 text-body-secondary">Inscrivez vous dans notre site pour y profiter d'une offre
                qui n' est pas trop chèr comme les autres vente en ligne dans le
                domaine informatique.</p>
        </div>
        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <?php foreach ($comm as $vente) : ?>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal"><?= $vente->Produit ?></h4>
                            </div>
                            <div class="card-body">
                                <h1 class="">$<?= $vente->Prix ?></h1>
                                <ul class="list-unstyled">
                                    <li><?= $vente->Marque ?></li>
                                    <li><?= $vente->Description1 ?></li>
                                    <li><?= $vente->Description2 ?></li>
                                    <li><?= $vente->Description3 ?></li>
                                </ul>
                                <a href="./acheter.php?id=<?= $vente->id ?>"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Acheter</button></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Modal vendre -->
            <div class="modal fade" id="vendre" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">Vendre une produit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form action="./vendre.php" method="POST">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="produit" placeholder="Nom du produit">
                                        <label for="nom">Nom du produit</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="prix" placeholder="Prix">
                                        <label for="prix">Prix</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="marque" placeholder="Marque">
                                        <label for="marque">Marque</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="couleur" placeholder="Description 1">
                                        <label for="fabricateur">Description 1</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="type" placeholder="Description 2">
                                        <label for="couleur">Description 2</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="capacite" placeholder="Description 3">
                                        <label for="capacite">Description 3</label>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Vendre</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php require('footer.php'); ?>


</body>

</html>