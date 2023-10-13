<?php session_start()?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger text-center">
        <div class="container-fluid">
            <img src="https://thumbs.dreamstime.com/b/bsc-letter-initial-logo-design-vector-illustration-letter-initial-logo-design-vector-illustration-bsc-letter-initial-logo-design-236622278.jpg"
                alt="" class="img" width="5%" heigth="5%" style="border-radius:50%">
            <div class="col-1">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-lg-0 col-6" style="position:absolute; left:15%; top:25%">
                        <li class="nav-item">
                            <a class="nav-link active" href="http://localhost:8081/eleve/afficheEleve">Gestion Elève</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link active" href="http://localhost:8081/classe/coef/">Gestion Classe</a>
                        </li> -->
                        <li class="nav-item active">
                            <a class="nav-link active" href="http://localhost:8081/niveau/afficheNiveau"> Gestion
                                Niveau</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" href="http://localhost:8081/annee/affichAnnee"> Gestion Année</a>
                        </li>

                    </ul>
                </div>
                <div style="border:1px solid black; position:absolute; left:55%; top:29%"><?php echo $_SESSION['annee']?></div>
                <div class="col-10 d-flex ">
                    <h5 style="position:absolute;right:10%;top:33%"><?php echo $_SESSION['username']?></h5>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a style="text-decoration:none ; color:black" href="http://localhost:8081/connexion/logOut"><i
                            class="fa-solid fa-power-off"></i></a>
                </div>
            </div>
    </nav>