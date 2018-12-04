<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" media="screen and (max-width: 630px)" href="assets/test/css/style2.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulaire</title>
</head>

<body>

    <?php

$options = array(
    'first_name' 	=> FILTER_SANITIZE_STRING,
    'last_Name' 	=> FILTER_SANITIZE_STRING,
    'mail' 		=> FILTER_VALIDATE_EMAIL,
    'phone' 		=> FILTER_SANITIZE_NUMBER_INT,
    'url' 		=> FILTER_SANITIZE_URL,
    'subject' 		=> FILTER_SANITIZE_STRING,
    'message' 		=> FILTER_SANITIZE_STRING);



    $result = filter_input_array(INPUT_POST, $options);  
?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
    <form class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" action="#">
                <div class="row input-group">
                    <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label alt="Votre nom"> Nom: </label>
                </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control" type="text" name="nom"
                        required>
                </div>
            </div>

        <div class="row input-group">
            <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <label alt="Votre prénom"> Prénom: </label>
        </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <input class="form-control" type="text" name="prenom" required>
        </div>
    </div>
        <div class="row row input-group">
                <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <label alt="Votre email"> Email: </label>
        </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <input class="form-control" type="email" name="email" required>
        </div>
    </div>

    <!-- // image // -->


        <img class="logo" src="assets/logo.png" alt="Logo Hackers Poulette">

        <div class="row input-group marginpadding">
                <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <label alt="Votre pays"> Pays: </label>
        </div>
        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <?php include("pays.php");?>
        </div>
        </div>


        <div class="row input-group">
                <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <label alt="Votre civilité">Civilité: </label></div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <select class="form-control" name="sexe" size="1" required>
                <option disabled selected value></option>
                <option alt="Monsieur">Monsieur</option>
                <option alt="Madame">Madame</option>
            </select>
        </div>
        </div>

        <div class="row">
                <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <label alt="Votre numéro de téléphone"> Numéro téléphone: </label>
        </div>
        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <input class="form-control" type="tel" name="Autre" required>
        </div>
    </div>
        <div class="row input-group">
                <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <label alt="Votre modèle"> Le modèle: </label>
        </div>
        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <input class="form-control" type="text" name="Autre" required>
        </div>
    </div>
    
        <div class="row input-group">
                <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <label alt="Votre sujets, veuillez selectionner un sujets">Sujets: </label>
                </div>
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <input class="choixmultiple" alt="Choix numéro 1 Candidature" type="checkbox" name="Candidature" value="1">Candidature
            <input class="choixmultiple" alt="Choix numéro 2 Problème techinque" type="checkbox" name="Problème technique"
                value="2">Problème technique
            <input class="choixmultiple" alt="Choix numéro 3 Soucis de livraison" type="checkbox" name="Soucis de livraison"
                value="3" checked>Soucis de livraison
            <input class="choixmultiple" alt="Choix numéro 4 Autre" type="checkbox" name="Autre" value="4">Autre




            <!-- <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Candidature</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Problème technique</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
  <label class="form-check-label" for="inlineCheckbox3">Soucis de livraison</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
  <label class="form-check-label" for="inlineCheckbox3">Autre</label> -->
        </div>
    </div>





        <div class="row input-group">
                <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <label alt="Votre message"> Message: </label>
        </div>
        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <textarea class="form-control backgroundtext" rows="5" id="comment" required></textarea>
        </div>
    </div>

        <div class="php">
            <?php
        if ($result != null AND $result != FALSE) {

    echo "Tous les champs ont été nettoyés !";

    } else {

    echo "Un champ est vide ou n'est pas correct!";
    }
    ?>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
</div>
</div>
</div>

</body>

</html>