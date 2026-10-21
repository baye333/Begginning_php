
<?php
// 1. Stocker les noms et les notes de cinq etudiants
$etudiants = [
    ["nom" => "Lahad", "note" => 15],
    ["nom" => "Ndane", "note" => 12],
    ["nom" => "Lamma", "note" => 8],
    ["nom" => "Macoumba", "note" => 17],
    ["nom" => "Ibrahima", "note" => 9]
];

$totalNotes = 0;
$nombreReussis = 0;

// Initialiser le meilleur etudiant
$meilleurEtudiant = $etudiants[0];

// 2. Calculer le resultat de chaque etudiant
echo "<h2>Résultats des étudiants</h2>";

foreach ($etudiants as $etudiant) {
    $nom = $etudiant["nom"];
    $note = $etudiant["note"];

    // Ajouter la note au total
    $totalNotes += $note;

    // Verifier la reussite ou l'echec
    if ($note >= 10) {
        $resultat = "Réussite";
        $nombreReussis++;
    } else {
        $resultat = "Échec";
    }

    echo "Nom : $nom | Note : $note/20 | Résultat : $resultat<br>";

    // 5. Rechercher la meilleure note
    if ($note > $meilleurEtudiant["note"]) {
        $meilleurEtudiant = $etudiant;
    }
}

// 3. Calculer la moyenne de la classe
$moyenne = $totalNotes / count($etudiants);

// 4. Afficher le nombre d'etudiants qui ont reussi
echo "<h2>Bilan de la classe</h2>";
echo "Moyenne de la classe : " . number_format($moyenne, 2) . "/20<br>";
echo "Nombre d'etudiants ayant reussi : $nombreReussis<br>";

// 5. Afficher l'etudiant ayant la meilleure note
echo "Meilleur etudiant : " . $meilleurEtudiant["nom"];
echo " avec " . $meilleurEtudiant["note"] . "/20";
?>
