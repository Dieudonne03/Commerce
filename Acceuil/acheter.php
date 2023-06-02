<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require('../Connexion/conn.php');

    $id = htmlspecialchars($_GET['id']);
    $sql = $conn->prepare("DELETE FROM produit WHERE id = ? LIMIT 1");
    $sup = $sql->execute(array($id));

    if ($sup) {
        require('./index.php');
    } else {
        echo '  <div class="container" id="modifier">
                    <h4><i>Erreur de suppression</i></h4>
                    <a href="../index.php"><boutton class="btn btn-danger" id="retour">Retour</boutton></a>
                </div>';
    }
    ?>
</body>

</html>