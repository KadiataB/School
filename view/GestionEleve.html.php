<?php require '../view/affiche.html.php'?>

    <div style="padding:1%">

        <div class="container" style="border:1px solid red">
            <div style="padding:2%">
                <center>
                    <h2> Formulaire d'Ajout Elève</h2>
                </center>
                <center>
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/5.webp" class="rounded-3" style="width: 120px;"
                        alt="Avatar" style="border-radius:100%" />
                </center>
                <center>
                    <h6>Kadiata Ba</h6>
                </center>
                <form>
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleInputEmail1" class="form-label">Prénom</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="prenom">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="col-6">
                            <label for="exampleInputEmail1" class="form-label">Nom</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="nom">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Date de naissance</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" name="ddn">
                        </div>
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Lieu de naissance</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="ldn">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Numéro</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="numero">
                        </div>
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">sexe</label><br>
                            <input type="radio" name="garçon"> Garçon
                            <input type="radio" name="fille"> Fille
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Niveau</label>
                            <select name="" id="select-niveau" class="form-control">>

                            </select><br>
                        </div>
                        <div class="col-6">
                            <label for="exampleInputPassword1" class="form-label">Classe</label>
                            <select name="" id="select-classe" class="form-control" name="idclasse">
                                <option value="">Choisir</option>
                            </select><br>
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary">Inscrire</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="http://localhost:8081/script.js"></script>

    

