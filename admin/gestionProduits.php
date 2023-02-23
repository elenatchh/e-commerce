<?php
require_once '../include/init.php';

if (!isAuthUserAdmin()) {
    header('location:../index.php');
    exit();
}
$req = $db->("SELECT * FROM produit"); // on recup les produit de la base de donnée

$produit = $req->fetchAll(PDO::FETCH_ASSOC); // 
?>
<?php require_once 'common/foot.php'; ?>