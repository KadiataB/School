<?php require '../view/affiche.html.php'?>

    <div class="container " style="padding:5%" wi>
    <h1 style="position:absolute; right:15%">+</h1>
        <div style="padding:7%; border:2px solid red" width="15%">
            <i class="fa-solid fa-plus-large"></i>
            <table class="table table-hover" border="1">
                <thead>
                    <tr>
                        <th scope="col">Les classes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $classe) { ?>
                        <tr>
                            <td>
                            <a  style="text-decoration:none; color:black" href="http://localhost:8081/Classe/liste/<?= $classe->id_classe?>">
                                <?php echo $classe->nom ?></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
