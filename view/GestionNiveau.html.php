  <?php require '../view/affiche.html.php'?>

    <div class="container " style="padding:5%" wi>
        <h1 style="position:absolute; right:15%;" class="niveau" data-bs-toggle="modal" data-bs-target="#exampleModal">+
        </h1>
        <div style="padding:7%; border:2px solid red" width="15%">
            <table class="table table-hover" border="1">
                <thead>
                    <tr>
                        <th scope="col">Niveaux</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $niveau) { ?>
                        <tr>
                            <td>
                                <a style="text-decoration:none; color:black"
                                    href="http://localhost:8081/niveau/classe/<?= $niveau->id_niveau ?>">

                                    <?php echo $niveau->libelle ?> </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <form action="http://localhost:8081/Niveau/addNiveau" method="POST">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajout niveau</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="niveau">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                            <button type="submit" class="btn btn-primary" name="save">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
