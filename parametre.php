<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

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

if (!empty(trim($_POST['first_name']))) {
echo $result['first_name'];
}
else {
    echo 'Veuillez insérrer un nom';
}
// PRENOM

echo "<h2>Prenom:</h2>";
if (!empty(trim(($_POST['last_Name'])))) {
echo $result['last_Name'];
}
else {
    echo 'Veuillez insérrer un prénom';
}

// EMAIL
echo "<h2>Mail:</h2>";
if (!empty(trim(($_POST['mail'])))) {
echo $result['mail'];
}
else {
    echo 'Veuillez insérrer un email valide!';
}

// GENRE

if (!empty(trim(($_POST['sexe'])))) {
echo "<h2>Genre</h2>";
}
else {
    echo 'Veuillez insérrer un sexe';
}

if ($result['sexe'] == 1) {
    $result['sexe'] = "Homme";
    echo "Homme";
} elseif ($result['sexe'] == 2) {
    $result['sexe'] = "Femme";
    echo "Femme";
} else {
    $result['sexe'] = null;
    echo "Il a essayé de changer le code";
}

// PAYS

if (!empty(trim(($_POST['pays'])))) {
echo "<h2>Pays</h2>";

if ($result['pays'] == 'BE') {
    $result['pays'] = "Belgique";
    echo "Belgique";
} elseif ($result['pays'] == 'FR') {
    $result['pays'] = "France";
    echo "France";
} elseif ($result['pays'] == 'DE') {
    $result['pays'] = "Allemagne";
    echo "Allemagne";
} else {
    $result['pays'] = null;
    echo "Il a essayé de changer le code";
}
}
echo "<br><br><br>";
// SUJETS
if (!empty($_POST['subject'])) {
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
}

// MESSAGE
if (!empty(trim(($_POST['message'])))) {
echo "<h2>Le corps du message</h2>";
echo $result['message'];

echo "<br><br><br>";

}
else {
    echo "<h2>Le corps du message</h2>";
    echo "Il faut écrire un message";
    echo "<br><br><br>";
}

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