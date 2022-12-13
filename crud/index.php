<?php require_once("partials/_header.php"); ?>

    <div class="card container mt-4">
        <div class="card-body">
            <h4 class="card-title bg-info text-white text-center p-4">Formulaire d'ajout de personnes</h4>
            <div>
                <form action="" method="POST">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="text-bold">Prenom</label>
                            <input type="text" name="prenom" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="text-bold">Nom</label>
                            <input type="text" name="prenom" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="text-bold">Adresse</label>
                            <input type="text" name="adresse" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label >Tel</label>
                            <input type="text" name="tel" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6 d-flex mt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexe" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Masculin
                                </label>
                            </div>&nbsp; &nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexe" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Feminin
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label >Date de naissance</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                    </div>
                    <button type="submit" name="valider" class="btn btn-success">Envoyer</button>
                    <button type="reset" class="btn btn-warning">Annuler</button>
                </form>
            </div>
        </div>
    </div>
<?php require_once("partials/_footer.php"); ?>