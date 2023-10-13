<?php require '../view/affiche.html.php' ?>


<?= $data['idClasse']?>
<div class="container " style="padding:1%">
    <div  style="text-align:center;">
        <div>    <?php
        echo '<pre>';
        print_r($data);
        echo '</pre>';

                foreach ($data['disciplines'] as $discipline) { ?>
                        <?= $discipline->nom?>
                <?php }?>(<?php echo $_SESSION['annee']?>)</div>
        <div>effectif:32</div>
        <div>Moyenne classe:13</div>
    </div>
    <h1 style="position:absolute; right:18%; bottom:65%">+</h1>
    <div style="padding:2%; border:2px solid red">
        <div class="d-flex">
            <div class="d-flex">
                <div><a href="http://localhost:8081/niveau/classe/1?>"
                        style="text-decoration:none; color:black; border:1px solid red">Retour</a></div>
                <div><a href="http://localhost:8081/classe/coef/<?= $GLOBALS['id'] ?>"
                        style="text-decoration:none; color:black; border:1px solid red; margin-left:1rem">Coefficient</a>
                </div>
            </div>
            <div class="d-flex w-95;"   style="margin-left:20%; justify-content:space-between;text-align:center; gap:1rem">
                <div class="col-4">
                    <label for="exampleInputPassword1" class="form-label">Discipline</label></br>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="groupe-discipline">
                        <option value="">Choisir</option>
                        <?php
                    var_dump($data['disciplines']);
                foreach ($data['disciplines'] as $discipline) { ?>
                
                        <option value="<?=$discipline-> id_discipline?>"><?= $discipline->libelle ?></option>
                        
                
                    </select>
                </div>
                <div class="col-4">
                    <label for="exampleInputPassword1" class="form-label">Semestre</label></br>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="groupe">
                        <option value="">Choisir</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="exampleInputPassword1" class="form-label">Note De</label></br>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="groupe-note">
                        <option value="">Choisir</option>
                        <option value="<?=$discipline-> ressource?>">ressource</option>
                        <option value="<?=$discipline-> examen?>">examen</option>
                    </select>
                </div>
                <?php } ?>
            </div>
        </div>
        <i class="fa-solid fa-plus-large"></i>

        <table class="table table-hover" border="1">
            <thead>
                <tr>
                    <th scope="col">
                        <?php
                    // var_dump($data['disciplines']);
                foreach ($data['disciplines'] as $discipline) { ?>
                
                        <option value=""><?= $discipline->nom ?></option>
                        
                <?php } ?></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data['control'] as $eleve) { ?>
                  

                    <tr>

                        <td>
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/5.webp" class="rounded-3"
                                style="width: 40px;" alt="Avatar" style="border-radius:100%"/>
                            <?php echo "  " . $eleve->nom . "   " ?>
                            <?php echo $eleve->prenom ?>
                        </td>
                        <td>
                        <div class="d-flex" style="justify-content:end; visibility:hidden" >
                                <input  type="number" style="width:5rem;">
                                <span></span>
                        </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            
        </table>
        <div class="d-flex" style="justify-content:end">
            <button type="button" class="btn btn-primary" id="save" class="d-flex" style="justify-content:end">Enregistrer</button>
    </div>
    </div>
    </div>
</div>
<script src="http://localhost:8081/script1.js"></script>