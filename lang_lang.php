<?php
$fichier = "index.php";


$contenu = file_get_contents($fichier);

if ($contenu !== false) {
    echo "Contenu du fichier :<br>";
    echo nl2br($contenu); // Affiche les sauts de ligne HTML
} else {
    echo "Erreur lors de la lecture du fichier.";
}
?>
