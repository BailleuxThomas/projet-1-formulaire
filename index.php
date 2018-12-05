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

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <form class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" method="post" action="parametre.php">
                    <div class="row input-group">
                        <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <label alt="Votre nom"> Nom: </label>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <input class="form-control" type="text" name="first_name" required>
                        </div>
                    </div>

                    <div class="row input-group">
                        <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <label alt="Votre prénom"> Prénom: </label>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <input class="form-control" type="text" name="last_Name" required>
                        </div>
                    </div>
                    <div class="row row input-group">
                        <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <label alt="Votre email"> Email: </label>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <input class="form-control" type="email" name="mail" required>
                        </div>
                    </div>

                    <!-- // image // -->



                    <div class="row input-group marginpadding">
                        <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <label alt="Votre pays"> Pays: </label>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <?php require("pays.php");?>
                        </div>
                    </div>


                    <div class="row input-group">
                        <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <label alt="Votre civilité">Civilité: </label></div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <select class="form-control" name="sexe" size="1" required>
                                <option disabled selected value>Veuillez indiquer votre sexe</option>
                                <option alt="Homme" name="sexe" value="1">Homme</option>
                                <option alt="Femme" name="sexe" value="2">Femme</option>
                            </select>
                        </div>
                    </div>
                    <div class="row input-group">
                        <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <label alt="Votre sujets, veuillez selectionner un sujets">Sujets: </label>
                        </div>
                        <div class="titlesujets col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <input name="subject[]" class="choixmultiple" alt="Choix numéro 1 Candidature" type="checkbox"
                                name="Candidature" value="1">Candidature
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <input name="subject[]" class="choixmultiple" alt="Choix numéro 3 Problème techinque" type="checkbox"
                                name="Problème technique" value="2">Problème technique
                        </div>
                        <div class="offset-4"></div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <input name="subject[]" class="choixmultiple" alt="Choix numéro 3 Soucis de livraison" type="checkbox"
                                name="Soucis de livraison" value="3">Soucis de livraison
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <input name="subject[]" class="choixmultiple" alt="Choix numéro 4 Autre" type="checkbox"
                                name="Autre" value="4">Autre
                        </div>
                    </div>
                    <div class="row input-group">
                        <div class="d-flex justify-content-center text-align-center m-auto col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <label alt="Votre message"> Message: </label>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <textarea name="message" class="form-control backgroundtext" rows="5" id="comment" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>