<div class="container col-md-10 mt-3 card">
    <div class="card-header">
        <h2>Liste des personnes</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Telephone</th>
                    <th>Adresse</th>
                    <th>Sexe</th>
                    <th>Date de naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listes as $p){ ?>
                <tr>
                    <td scope="row"><?php echo $p['prenom']; ?></td>
                    <td><?= $p['nom'] ?></td>
                    <td><?= $p['tel'] ?></td>
                    <td><?= $p['adresse'] ?></td>
                    <td><?= $p['sexe'] ?></td>
                    <td><?= date("d/m/Y", strtotime($p['datenais']))  ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>