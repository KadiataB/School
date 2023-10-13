<?php require '../view/affiche.html.php' ?>


<div style="padding:6%">
<input id="idClasse" type="hidden" value="<?= $data['idClasse'] ?>">
    <div class="container" style="padding:3%; border:1px solid red">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Disciplines</th>
                    <th scope="col">Ressource</th>
                    <th scope="col">Examen</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data['disciplines'] as $discipline) { ?>
                    <tr>
                        <td>
                            <?php echo $discipline->libelle ?>
                        </td>
                        <td><input oninput="recup(this)" class="input ressource" type-ressource="ressource"
                                data="<?= $discipline->id_discipline."_"."r" ?>"
                                type="number" value="<?= $discipline->ressource ?>"></td>
                        <td><input oninput="recup(this)" data="<?= $discipline->id_discipline."_"."e" ?>" class="input examen" type-examen="examen"
                                idclasse="<?= $discipline->id_classe ?>"
                                type="number" value="<?= $discipline->examen ?>"></td>
                        <td> <i class="fa-solid fa-xmark button-delete" style="margin-left:40%; color:red " name="delete" data-id="<?=$discipline->id?>"></i></td>
                    </tr>
                <?php } ?>

            </tbody>

        </table>
        <button style="margin-left:86%; margin-top:2%;" type="button" class="btn btn-primary" id="update"
            name="update">Mettre à
            jour</button>
    </div>
    <script src="http://localhost:8081/script1.js"></script>
</div>
