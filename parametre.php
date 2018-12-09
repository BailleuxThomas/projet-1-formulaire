<?php
$options = array(
    'first_name' => FILTER_SANITIZE_STRING,
    'last_Name' => FILTER_SANITIZE_STRING,
    'mail' => FILTER_SANITIZE_EMAIL,
    'pays' => FILTER_SANITIZE_STRING,
    'sexe' => FILTER_SANITIZE_STRING,
    'subject' => FILTER_SANITIZE_STRING,
    'message' => FILTER_SANITIZE_STRING);

$result = filter_input_array(INPUT_POST, $options);

// NOM


echo "<h2>Nom:</h2>";
echo $result[first_name];

// PRENOM

echo "<h2>Prenom:</h2>";
echo $result[last_Name];

// EMAIL
echo "<h2>Mail:</h2>";
echo $result[mail];

// GENRE

echo "<h2>Genre</h2>";

if ($result[sexe] == 1) {
    $result[sexe] = "Homme";
    echo "Homme";
} elseif ($result[sexe] == 2) {
    $result[sexe] = "Femme";
    echo "Femme";
} else {
    $result[sexe] = null;
    echo "Il a essayé de changer le code";
}

// PAYS

echo "<h2>Pays</h2>";

if ($result[pays] == BE) {
    $result[pays] = "Belgique";
    echo "Belgique";
} elseif ($result[pays] == FR) {
    $result[pays] = "France";
    echo "France";
} elseif ($result[pays] == DE) {
    $result[pays] = "Allemagne";
    echo "Allemagne";
} else {
    $result[pays] = null;
    echo "Il a essayé de changer le code";
}

// SUJETS

echo "<h2>Sujet:</h2>";
if (!empty($_POST['subject'])) {
    // Loop to store and display values of individual checked checkbox.
    foreach ($_POST['subject'] as $subject) {
        if ($subject == 1) {
            echo "<p>Hardware</p>";
        } else if ($subject == 2) {
            echo "<p>Logiciel</p>";
        } else if ($subject == 3) {
            echo "<p>Prix</p>";
        } else if ($subject == 4) {
            echo "<p>Autre</p>";
        }
    }
} else {
    echo "<p>Autre</p>";
}
echo "<br>";


// MESSAGE

echo "<h2>Le corps du message</h2>";
echo $result[message];

echo "<br><br><br>";
// FIN

if ($result != null and $result != false) {

    echo "Tous les champs ont été nettoyés !";

} else {

    echo "Un champ est vide ou n'est pas correct!";

}

foreach ($options as $key => $value) {
    $result[$key] = trim($result[$key]);
}
echo"<br>";
echo '<a method="post" href="index.php"> Revenir en arrière</a>';


// // To
// $to = 'thomasbailleux3@hotmail.com';
 

// // Function mail()
// mail($to, $subject, $msg);


?>