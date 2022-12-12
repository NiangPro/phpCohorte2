<?php require_once('partials/header.php'); ?>
    
    <div class="container col-sm-10 mt-2">

        <div class="card">
            <div class="card-header bg-warning ">
            <div class="h3 text-center text-info">Formulaire d'inscription</div>

            </div>
            <div class="card-body">
            <form action="" method="" autocompletion="off">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="">Prenom</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-6 form-group">
                     <label for="">Nom</label>
                     <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="">Mot de passe</label>
                    <input type="password" class="form-control">
                </div>
            </div>

            <button type="reset" class="btn btn-outline-danger btn-sm">Annuler</button>
            <button type="submit" class="btn btn-success btn-sm">S'inscrire</button>
        </form>
            </div>
        </div>
        
    </div>

   <?php require_once('partials/footer.php'); ?>