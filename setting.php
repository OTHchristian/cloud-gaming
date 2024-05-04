<?php
    $texts= [
        " - Profiter des performances de GAME SHAKE RTX 4080 ",
        " - Diffuser en continu jusqu'à 1440p, et à des résolutions ultra-larges ",
        " - Diffuser en continu jusqu’à 120 FPS ",
        " - Bénéficier d'un accès exclusif aux serveurs les plus rapides ",
        " - Allonger les longueurs de sessions jusqu'à 8 heures ",
        " - Enregistrer dans les paramètres graphiques du jeu d'une session à l'autre ",
    ];
?>
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
    <link rel="stylesheet" href="css/setting.css">
</head>
<body>
    <?php
        require_once 'base.php'
    ?>
    <di class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="p1">
                    <div class="box">
                        <label style="color:white;padding-left:20px;font-size:14px;padding-top:10px">A PROPOS DE</label>
                        <br>
                        <br>
                        <div>
                            <div style="padding-left:20px;float:left"><img src="images/logo.avif" width="68px" height="68px"></div>
                            <div style="float:left">
                                <li><label style="color:rgba(255, 255, 255, 0.61);font-size:16px">GAME SHAKE MAINTENANT</label></li>
                                <li><label style="color:rgba(255, 255, 255, 0.61);font-size:14px">Version 1.0.0/ro CM/fr_FR</label></li>
                                <li><label style="color:rgba(255, 255, 255, 0.61);font-size:12px">2024 GAME SHAKER coporation. tous droits reserves</label></li>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="container"><div class="container"><hr style="color:rgba(255, 255, 255, 0.61);"></div></div>
                        <br>
                        <div>
                            <li><a href="#">Points cles de la version</a></li>
                            <li><a href="#">Conditions d'utilisation de GAME SHAKE</a></li>
                            <li><a href="#">Conditions d'utilisation du compte GAME SHAKE</a></li>
                            <li><a href="#">Politique de confidentialite</a></li>
                            <li><a href="#">Licenses open source</a></li>
                        </div>
                        <br>  
                    </div>
                </div>
                <div class="p11">
                    <div class="box">
                        <label style="color:white;padding-left:20px;font-size:14px;padding-top:10px">ABONNEMENT ACTUEL</label>
                        <div style="float:right;padding-top:10px;padding-right:20px;align-items: center;text-align:center;">
                            <label style="color:rgba(255, 255, 255, 0.61);font-size:12px;float:left">Derniere mise a jour : il y'a une heure</label>
                            <div style="float:left;width:10px;height:10px"></div>
                            <div class="reload">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-repeat reload" viewBox="0 0 16 16">
                                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9"/>
                                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
                                </svg>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div>
                            <label style="color:white;padding-left:20px;font-size:16px;">Abonnement a GAME SHAKE GRATUIT</label>
                            <div style="float:right;padding-right: 20px;">
                                <a href="compte.php"><label class="cmp">AFFiCHER LE COMPTE</label></a>
                            </div>
                        </div>
                        <div class="container"><div class="container"><hr style="color:rgba(255, 255, 255, 0.61);"></div></div>
                        <label style="color:white;padding-left:20px;font-size:14px;padding-top:10px">Passez a des performances plus rapides que jamais! Passez au statut de membre pour :</label>
                        <div>
                            <?php foreach($texts as $text ):?>
                                <li><label style="color:rgba(255, 255, 255, 0.61);padding-left:20px;font-size:14px;padding-top:10px"><?=$text?></label></li>
                            <?php endforeach?>
                        </div>
                        <br>
                        <div style="float:right;padding-right:20px">
                            <a href="#"><label class="cmp">METTRE A NIVEAU</label></a>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="p11">
                    <div class="box">
                        <label style="color:white;padding-left:20px;font-size:14px;padding-top:10px">ACTIVER LE CODE</label>
                        <div style="float:right;padding-right:20px;padding-top:10px"><a href="#"><label class="cmp">ACTIVER</label></a></div>
                        <br>
                        <br>
                        <label style="color:rgba(255, 255, 255, 0.61);padding-left:20px;font-size:14px;">Avez-vous une carte cadeau ou un code promotionnel ? Activer maintenant pour profiter des avantages disponibles.</label>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="p11">
                    <div class="box">
                        <label style="color:white;padding-left:20px;font-size:14px;padding-top:10px">ETAT DU RESEAU</label>
                        <div style="float:right;padding-right:20px;padding-top:10px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi bi-toggle-on toggle" viewBox="0 0 16 16"><path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8"/></svg>
                        </div>
                        <br>
                        <br>
                        <label style="color:rgba(255, 255, 255, 0.61);padding-left:20px;font-size:14px;">Affiche les indicateurs d'état du réseau en jeu.Ce paramètre prendra effet au prochain</label>
                        <label style="color:rgba(255, 255, 255, 0.61);padding-left:20px;font-size:14px;"> lancementd'un jeu.</label>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="p11">
                    <div class="box"></div>
                </div>
                <div class="p11">
                    <div class="box"></div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="p2">
                    <div class="box"></div>
                </div>
                <div class="p22">
                    <div class="box"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>