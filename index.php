<link rel="stylesheet" href="style.css">

<body class="container_all">
<?php

require "bdd.php";
?>  
    <div class="container_table">
        <a href="create.php"><button>Create</button></a>
        <table>
            <thead>
                <tr>
                    <td>titre</td>
                    <td>synopsis</td>
                    <td>auteur</td>
                    <td>categorie</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $sql = 'SELECT * FROM Livre L LEFT JOIN Auteur A ON L.id_auteur = A.id
                    LEFT JOIN Link_C_L CL ON L.id = CL.id_livre
                    LEFT JOIN Categorie C ON CL.id_categorie = C.id';
                    
                    $requete = $bdd->query($sql);
                    
                    while($resultat = $requete->fetch()) {
                        echo "<tr>"."<td>".$resultat['titre']."</td>", "<td>".$resultat['synopsis']."</td>", 
                        "<td>".$resultat['nom']."</td>", "<td>".$resultat['libelle']."</td>", 
                        "<td><button>edit</button></td>", "<td><button>delete</button></td>"."</tr>";
                    }
                    
                    $requete->closeCursor();

                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>
