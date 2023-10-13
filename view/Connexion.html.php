<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container py-4">
        <div class="row d-flex justify-content-center align-items-center h-80">
            <div class="col-10  col-xl-5">
                <div class="card  text-white" style="border-radius: 1rem;" style="border:1px solid red;padding:2%;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <img src="https://thumbs.dreamstime.com/b/bsc-letter-initial-logo-design-vector-illustration-letter-initial-logo-design-vector-illustration-bsc-letter-initial-logo-design-236622278.jpg"
                                alt="" class="img bg-red" width="25%" heigth="20%" style="border-radius:50%"><br>
                            <form action="/connexion/connecte" method="post">
                                <h4 class="fw-bold mb-2 text-black">Connexion</h4><br>
                                <p class="text-black-50 mb-5">Veuillez entrer votre email et votre mot de passe!</p>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" name="username" >
                                    <label for="floatingInput">Username</label>
                                </div><br>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password" name="password" >
                                    <label for="floatingPassword">Password</label>
                                </div>


                                    <button type="submit" class="btn btn-primary" name="connect" style="margin-top:6%">Se connecter</button>


                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>