<?php require '../view/affiche.html.php'?>

  <div class="container col-6" style="padding:3%">
    <div class="row align-items-center" style="border:1px solid red;padding:7%;">
      <form action="http://localhost:8081/Annee/addAnnee" method="POST">
        <div class="container">
        </div>
        <div class="scolaire">
          <label for="">
            <h4>Année scolaire</h4>
          </label>
          <input type="text" name="annee" placeholder='XXXX-YYYY'>
          
          <button name="ok">OK</button>
        </div>
      </form>

      <table class="table table-hover" border="1">
        <thead>
          <tr>
            <th scope="col">années scolaires</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($data as $annee) { ?>
            <tr>

              <td>
                <?php echo $annee->libelle ?>
              </td>
              <td>
                <a href="http://localhost:8081/Annee/suppAnnee?id=<?php echo $annee->id_AnneeScolaire ?>"
                  class="btn  btn-sm me-2"><i class="fa-solid fa-trash trash" data-bs-toggle="modal" data-bs-target="#exampleModal"></i></a>
                <a href="" class="btn  btn-sm me-2"></a><i class="fa-solid fa-edit edit"
                  data-id=<?= $annee->id_AnneeScolaire ?>></i>
                <a href="#" class="btn  btn-sm me-2">
                  <?php if ($annee->status) { ?>
                    <i class="fa-solid fa-check"></i>
                  </a>
                  <a style="text-decoration:none" href="http://localhost:8081/Annee/desactiAnnee?id=<?= urlencode($annee->id_AnneeScolaire) ?>">désactiver</a>
                <?php } else { ?>
                  <a  style="text-decoration:none; color:black"href="http://localhost:8081/Annee/actiAnnee?id=<?= urlencode($annee->id_AnneeScolaire) ?>">activer</a>
                <?php } ?>
              <td></td>
              </td>

            </tr>
          <?php } ?>
        </tbody>
      </table>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajout année</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="text">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- <script src="script.js"></script> -->
