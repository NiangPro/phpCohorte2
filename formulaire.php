 <?php 
    include_once('partials/header.php');

       
    
    ?>
    <div class="container col-md-4 mt-3 border border-danger rounded card">
        <div class="card-header bg-warning">

            <h3 class="text-center">Formulaire</h3>
        </div>
       <div class="card-body">
       <form action="traitement.php" method="POST">
            <div class="form-group">
                <label for="">Prenom</label>
                <input type="text" name="prenom" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="nom" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="mdp" class="form-control">
            </div>
            <button type="submit" class="btn btn-outline-success" name="envoyer">Envoyer</button>
            <button type="reset" class="btn btn-outline-danger" name="annuler">Annuler</button>
        </form>
       </div>
    </div>
   
    <?php require_once('partials/footer.php'); ?>