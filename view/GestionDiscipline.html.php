<?php require '../view/affiche.html.php'?>

  <div style="padding:6%">
    <div class="container" style="border:1px solid red">
      <div style="padding:2%">

        <h2 style="margin-left:37%"> Gestion des disciplines</h2>


      </div>

      <form>
        <div class="row">
          <div class="col-6">
            <label for="exampleInputEmail1" class="form-label">Choisir niveau</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="niveau">

            </select>

            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="col-6">
            <label for="exampleInputEmail1" class="form-label">Choisir classe</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="classe">

            </select>





          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <label for="exampleInputPassword1" class="form-label">Choisir discipline</label></br>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="groupe">
              <option value="">Choisir un groupe</option>
              <option value="1" >nouveau</option>

            </select>

          </div>
          <div class="col-6 ">
            <label for="exampleInputPassword1" class="form-label">Discipline</label>
            <div class="d-flex">
              <input type="text" class="form-control input" id="exampleInputPassword1"></br>
              <button type="button" class="btn btn-primary" id="button" style="margin-left:2%">Ajouter</button>
            </div></br>
          </div>
        </div>
        <h4 style="margin-left:37%"> Les disciplines de la classe </h4></br>
        <div style="color:red;">Décocher une discipline pour la supprimer de la classe</div>
        <div class="row" id="discipline">
        </div>


      </form>
      <button style="margin-left:86%; margin-top: -3%;" type="button" class="btn btn-primary" id="update">Mettre à
        jour</button>

    </div>

  </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouveau groupe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nouveau groupe</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  id="btn-close-modal" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save">Save</button>
      </div>
    </div>
  </div>
</div>

  <!-- <script>
    let codes=['ALI','TOT','TAT','ALIM','ALIMA'];
    let discipline='alimatou';
    let code=discipline.substr(0,3).toUpperCase();
    let i=1;
    codes.forEach( cod=> {
      console.log(cod);
       if (codes.includes (code)) {
         code=discipline.substr(0,3+i).toUpperCase();
        }
        i++;
      });
      console.log(code);
    codes.push(code);
  
      console.log(codes);
  </script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>

  <script src="http://localhost:8081/script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>




