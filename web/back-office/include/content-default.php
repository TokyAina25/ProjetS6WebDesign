<?php
    $listes = getAllPieces();
?>
    <div class="section__content section__content--p50">
        <div class="container-fluid">   
            <div class="col-lg-12">
                <div class="table-data__tool">
                <div class="table-data__tool-right">
                <button data-toggle="modal" data-target="#mediumModal" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Ajouter
                </button>
                </div>
                </div>
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                    <h3 class="title-5 m-b-35">Listes des objets</h3>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th class="text-right">Notes</th>
                                <th class="text-right">Nouveau</th>
                                <th class="text-right">Matieres</th>
                                <th class="text-right">Modifier</th>
                                <th class="text-right">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $modal = null;
                            $ind = 0;
                                    if($listes->num_rows > 0) {
                                        while($row = $listes->fetch_assoc()) {
                                            $modal = '#mediumModal'.$row['IDPIECES'];
                                            $ind = $row['IDPIECES'];
                            ?>
                            <tr>
                                <td><?php echo $row['IDPIECES']; ?></td>
                                <td><?php echo $row['NOMPIECES']; ?></td>
                                <td class="text-right"><?php echo $row['NOTES']; ?></td>
                                <td class="text-right"><?php echo $row['NOUVEAU']; ?></td>
                                <td class="text-right"><?php echo $row['MATIERES']; ?></td>
                                <td class="text-right">
                                <button data-toggle="modal" data-target=<?php echo $modal; ?> class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    Modifier
                                </button>
                                </td>
                                <td><a href="traitement/supprimer.php?id=<?php echo $row['IDPIECES']; ?>" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                            <?php
                                        }
                                    }                                   
                            ?>
                        </tbody>
                    </table>
                </div>

              
            </div>
        </div>
    </div>

    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Insertion nouveau objet</h5>
                                        <div class="card-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>    
                                    </div>
                                    <div class="modal-body">
                                    <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Formulaire</strong>
                                    </div>
                                    <form action="traitement/insertion.php" method="POST">
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Categorie</label>
                                            <input type="text" id="categorie" name="categorie" placeholder="Categorie" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Nom du produit</label>
                                            <input type="text" id="nom" name="nom" placeholder="Nom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class="form-control-label">Description</label>
                                            <textarea rows="6" id="textarea-input" id="desc" name="desc" placeholder="Saisir la description" class="form-control"></textarea>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="notes" class=" form-control-label">Notes</label>
                                                    <input type="text" id="notes" name="notes" placeholder="Notes par defaut" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Nouveau</label>
                                                    <input type="text" id="nouveau" name="nouveau" placeholder="Nouveauté" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Matiere</label>
                                            <input type="text" id="matiere" name="matiere" placeholder="Matière" class="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                    </form>
                                </div>
                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                                
                            </div>
                </div>

                <?php
                    $rep = null;
                      if($listes->num_rows > 0) {
                        while($row = $listes->fetch_assoc()) {
                            $rep = $row['IDPIECES'];
                            if($ind==$rep){
                                $rep = 'mediumModal'.$rep;
                ?>

                <div class="modal fade" id="<?php echo $rep; ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Insertion nouveau objet</h5>
                                        <div class="card-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>    
                                    </div>
                                    <div class="modal-body">
                                    <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Formulaire(Modifier)</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Categorie</label>
                                            <input value="<?php $row['IDCATEGORIE']; ?>" type="text" id="categorie" name="categorie" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Nom du produit</label>
                                            <input value="<?php $row['NOMPIECES']; ?>" type="text" id="nom" name="nom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class="form-control-label">Description</label>
                                            <textarea rows="8" id="textarea-input" value="<?php $row['DESCRIPTIONS']; ?>" id="desc" name="desc" class="form-control">
                                            </textarea>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="notes" class=" form-control-label">Notes</label>
                                                    <input type="text" value="<?php $row['NOTES']; ?>" id="notes" name="notes" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Nouveau</label>
                                                    <input type="text" value="<?php $row['NOUVEAU']; ?>" id="nouveau" name="nouveau" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Matiere</label>
                                            <input type="text" value="<?php $row['MATIERES']; ?>" id="matiere" name="matiere" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Confirm</button>
                                    </div>
                                </div>
                            </div>
                </div>
             <?php
                            }
             }
            }
            ?>   

