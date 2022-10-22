<?php
require "bdd.php";

if(isset($_POST['valide'])) {

$titre  = $_POST['titre'];
$syn    = $_POST['synopsis'];

   $sql = "INSERT INTO Livre(`titre`, `synopsis`, `id_auteur`)VALUES('$titre', '$syn', 1)";

   echo $sql;
   $requete = $bdd->query($sql);

} else {
?>
<div>
    <form  method="post" action="index.php">
        <input placeholder="TITRE" type="text" name="titre" id="titre">
        <textarea placeholder="SYNOPSIS" name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
        <input value="Submit" type="submit" name="valide">
    </form>
</div>
<?php
} 
?>