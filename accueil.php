<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME SHAKE</title>
    <link rel="shortcut icon" href="images/logo.avif" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/accueil.css">
</head>
<body>
    <?php
        require_once 'base.php'
    ?>
    <!-- fin -->
    <!-- continuer ici -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active data-bs-interval=3 banner">
                <img src="images/carousel/1.jpg" class="d-block w-100" alt="image1">
            </div>
        <div class="carousel-item data-bs-interval=3 banner ">
            <img src="images/carousel/2.jpeg " class="d-block w-100" alt="image2">
        </div>
        <div class="carousel-item data-bs-interval=3 banner">
            <img src="images/carousel/3.jpeg" class="d-block w-100" alt="image3">
        </div>
        <div class="carousel-item data-bs-interval=3 banner">
            <img src="images/carousel/4.jpg" class="d-block w-100" alt="image4">
        </div>
        <div class="carousel-item data-bs-interval=3 banner">
            <img src="images/carousel/5.png" class="d-block w-100" alt="image5">
        </div>
    </div>
    <!-- continuer ici -->
    <br>
    <div class="principale">
        <label style="font-weight: bold;"><stong style="color: white;">PC Game</stong></label>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="space_game">
                        <?php $fichiers="images".DIRECTORY_SEPARATOR."pc_game";
                        $fichiers=scandir($fichiers);?>
                        <?php foreach($fichiers as $fichier) :?> 
                            <?php if($fichier == '.' || $fichier=='..'):?>
                            <?php else : ?>                       
                                <img src="images/pc_game/<?= $fichier ?>"  class="game">
                            <?php endif?>    
                        <?php endforeach?>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <label style="font-weight: bold;"><stong style="color: white;">Meilleurs Ventes</stong></label>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="space_game">
                        <?php $fichiers="images".DIRECTORY_SEPARATOR."meilleur_vente";
                        $fichiers=scandir($fichiers);?>
                        <?php foreach($fichiers as $fichier) :?> 
                            <?php if($fichier == '.' || $fichier=='..'):?>
                            <?php else : ?>                       
                                <img src="images/meilleur_vente/<?= $fichier ?>"  class="game">
                            <?php endif?>    
                        <?php endforeach?>

                    </div>
                </div>
            </div>
        </div>
        <!-- end page -->
        <br>
        <br>
        <label style="font-weight: bold;"><stong style="color: white;">Genre</stong></label>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="end">
                    <?php
                        $names = ['Tous jeux','Action','Aventure','Arcade','Casual','Demo','Familial','jeu de combat','Gratuit','Independant','Massivement multijoueur','Moba','Plateformes','Puzzel','Course','jeude role','Tir','Simulation','Sport','Strategie','Demos techniques'];
                        $index = 0;
                    ?>
                        <?php foreach( ['1.txt','2.txt','3.txt','4.txt','5.txt','6.txt','7.txt','8.txt','9.txt','10.txt','11.txt','12.txt','13.txt','14.txt','15.txt','16.txt','17.txt','18.txt','19.txt','20.txt','21.txt'] as $fichier) :?>
                            <div class="endpage">
                                <img src="<?=file_get_contents("images".DIRECTORY_SEPARATOR."icon".DIRECTORY_SEPARATOR.$fichier);?>" class="icon">
                                <p><stong style="color: white;"><?= $names[$index] ?></stong></p>
                            </div>
                            <?php $index+=1 ?>                       
                        <?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
</html>
