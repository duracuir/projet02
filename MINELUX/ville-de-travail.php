<?php
session_start();
require('connexionBD.php');
        $connection = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connection, 'myminette');
                    if (isset($_POST['Save'])) {
                        $username = $_SESSION['username'];
                        $ville = $_POST['ville'];
                        $secondlieu = $_POST['secondlieu'];
                        $incall = $_POST['incall'];
                        $outcall = $_POST['outcall'];
                        $recoit = $_POST['incall_type'];
                        $typehotel = $_POST['incall_hotel_room'];
                        $lieudeplace = $_POST['outcall_type'];
                        

                        $sql = $pdo->prepare("SELECT * FROM ville_travail WHERE username = :username");
                        $sql->execute(["username"=>$username]);
                        $results = $sql->fetchAll(PDO::FETCH_OBJ);
                        if(!$results){
                            if ($ville) {
                                    $statement = $pdo -> prepare( "INSERT INTO `ville_travail` (username, ville, secondlieu)
                                                    VALUES ('$username', '$ville', '$secondlieu')");
                                $statement->execute(['username'=> $username, 'ville' => $ville, 'secondlieu'=> $secondlieu]);
                                echo "<p style='color: green; background-color: lightgreen;'>Vos données ont été enregistrées avec succès</p>";

                            } else {
                                echo "<p style='color: red;background-color: pink;'> Veuillez renseigner les champs vides </p>";
                            }
                    }else{
                        $query = "UPDATE ville_travail SET ville='$_POST[ville]',secondlieu='$_POST[secondlieu]' WHERE username='$_SESSION[username]'";
                        $query_run = mysqli_query($connection, $query);
                        if($query_run) {
                                echo '<script type="text/javascript"> alert("Vos données ont été modifiées avec succès") </script>';
                            } else {
                                echo '<script type="text/javascript"> alert("Echecs de modification de vos donnees") </script>';
                            }
                    }    
                               
                   $sql = $pdo->prepare("SELECT * FROM rendezvous WHERE username = :username");
                        $sql->execute(["username"=>$username]);
                        $results = $sql->fetchAll(PDO::FETCH_OBJ);
                        if(!$results){
                            if ($ville) {
                                    $statement = $pdo -> prepare( "INSERT INTO `rendezvous` (username, incall, outcall, recoit, typehotel, lieudeplace)
                                                    VALUES ('$username', '$incall', '$outcall', '$recoit', '$typehotel', '$lieudeplace')");
                                $statement->execute(['username'=> $username, 'incall' => $incall, 'outcall'=> $outcall,'recoit'=> $recoit, 'typehotel'=> $typehotel, 'lieudeplace'=> $lieudeplace ]);
                                echo "<p style='color: green; background-color: lightgreen;'>Vos données ont été enregistrées avec succès</p>";

                            } else {
                                echo "<p style='color: red;background-color: pink;'> Veuillez renseigner les champs vides </p>";
                            }
                    }else{
                        $query = "UPDATE rendezvous SET incall='$_POST[incall]',outcall='$_POST[outcall]',recoit='$_POST[incall_type]' ,typehotel='$_POST[incall_hotel_room]' ,lieudeplace='$_POST[outcall_type]' WHERE username='$_SESSION[username]'";
                        $query_run = mysqli_query($connection, $query);
                        if($query_run) {
                                echo '<script type="text/javascript"> alert("Vos données ont été modifiées avec succès") </script>';
                            } else {
                                echo '<script type="text/javascript"> alert("Echecs de modification de vos donnees") </script>';
                            }
                    }         
             }
    if (isset($_SESSION["username"])) {
  $username = $_SESSION["username"];
  try {
    $statement = $pdo->prepare(
      'SELECT * FROM ville_travail WHERE username = :username;'
    );
    $statement->execute(["username" => $username]);
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
  } catch (PDOException $e) {
      echo "<h4 style='color: red;'>".$e->getMessage(). "</h4>";
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<tilte></tilte>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=1200, initial-scale=0">
      <title >Escorts Girl au Cameroun</title>
      <link href="fond/favicon.png" rel="icon" type="fond/png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/ville-de-travail.css">
        <script src="js/script.js"></script>
        <script type="application/javascript">
                var user_info = { 'logged_in':false, 'user_id': null, 'user_type': null };
                var signon_link = "signup.html";
        var env = 'production';
        </script>
</head>
    <body id="edit-profile">
        <svg id="svg-source" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <filter id="filter-shadow" x="0" y="0" width="100%" height="100%">
            <feGaussianBlur in="SourceAlpha" stdDeviation="3"></feGaussianBlur>
            <feOffset dx="1" dy="1"></feOffset>
            <feComponentTransfer>
                <feFuncA type="linear" slope="0.3"></feFuncA>
            </feComponentTransfer>
            <feMerge>
                <feMergeNode></feMergeNode>
                <feMergeNode in="SourceGraphic"></feMergeNode>
            </feMerge>
        </filter>
    </defs>
    
    
    
    
    <g id="icon-real-photos">
        <polygon points="16.67,4 13.85,20 16.89,20 19.1,7.48 56.52,14.07 52.18,38.69 48,37.96 48,50.14 53.05,51.03 60,11.64"></polygon>
        <path d="M4,20v40h44V20H4z M45,48H7V23h38V48z M41,45H11l5-7l5,4l5-7l5,5l5-8L41,45z M15,28c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3 c1.66,0,3-1.34,3-3C18,29.34,16.66,28,15,28z"></path>
    </g>
    <g id="icon-discretion-guaranteed">
        <path d="M50,28v-6c0-9.93-8.08-18-18-18c-9.93,0-18,8.07-18,18v6H8v32h48V28H50z M34,42.45V51c0,1.1-0.9,2-2,2s-2-0.9-2-2v-8.55 c-1.19-0.69-2-1.97-2-3.45c0-2.21,1.79-4,4-4s4,1.79,4,4C36,40.48,35.19,41.75,34,42.45z M18,28v-6c0-7.72,6.28-14,14-14 s14,6.28,14,14v6H18z"></path>
    </g>
    <g id="icon-trusted-website">
        <path d="M49.97,19.19L49.32,14l-4.17-3.15L42,6.68l-5.19-0.65L32,4l-4.81,2.03L22,6.68l-3.15,4.17L14.68,14l-0.65,5.19L12,24 l2.03,4.81L14.68,34l4.17,3.16L22,41.32l5.19,0.65L32,44l4.81-2.03L42,41.32l3.15-4.17L49.32,34l0.65-5.19L52,24L49.97,19.19z M34.5,32.54h-4v-11.5l-3,1.5v-4l4-2h3V32.54z"></path>
        <path d="M56,54l-7.7-1.33L45.61,60l-8.58-14.86l0.57-0.24l4.77-0.6l1.25-0.16l0.76-1.01l2.9-3.83l0.15-0.11L56,54z M26.4,44.89 l-4.77-0.6l-1.26-0.16l-0.76-1.01l-2.9-3.83l-0.15-0.11L8,54l7.7-1.33l2.7,7.33l8.58-14.86L26.4,44.89z"></path>
    </g>
    
</svg>
        <header>
        	
                <div class="top-nav">
                <div class="container clearfix">
                    <ul class="nav navbar-nav">
                        <li><a href="#top recherche">Top Recherché</a></li>
                        <li><a href="#top favorites">Top Favorites</a></li>
                        <li><a href="#nouvelles">Nouvelles</a></li>
                    </ul>

                    <div class="pull-left"></div>
                    <div class="pull-right">
                        <span class="usermessage">
                         Bienvenue:
                        <a class="username" href="login.html">
                             <?php 
                       
                                if(!isset($_SESSION['username'])){
                                   echo "Vous n'êtes pas connecté!";
                                }else{
                                    echo $_SESSION['username'];
                                
                                }
                     ?>
                        </a>
                        </span>   
                        <a class="btn btn-tertiary" href="login2.php">Espace Privé</a>
                        <a class="btn btn-secondary" href="deconnexion.php">Deconnexion</a>
                    </div>
            
                </div>

                </div>
                </div>
                <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="logo" href=""><img src="logo/main-logo.png" class="img-responsive" alt="Cameroun Escortes"></a>
                    </div>
                    <div id="navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="nouvelles.html">Nouvelle</a></li>
                    <li class="nav-item"><a class="nav-link" href="filles.html">Filles</a></li>
                    <li class="nav-item"><a class="nav-link" href="garcon.html">Hommes</a></li>
                    <li class="nav-item"><a class="nav-link" href="vip.html">VIP</a></li>
                    <li class="nav-item"><a class="nav-link" href="toursdeville.html">Tournées de Ville</a></li>

                    
            </div>
                </div>
                
            </div>
<div class="page-heading">
            <div class="container">
            <div class="row">
                <div class="col-xs-4 back"></div>
                <a href="/" class="btn btn-black">Retour</a>
                <div class="col-xs-4">
                    <h1 class="page-title">éditer profil de minette</h1>
                </div>
            </div>
            </div>
            </div>
		</header>
           <main class="container">
            <form action="ville-de-travail.php?username=<?php echo $results[0]->username;?>" id="bio_submit" class="submit_profile" method="post">
             <ul class="steps">
                            <li class="active"><a href="biographie.php">Step 1:<br> Biographie</a></li>
                            <li class=""><a href="aproposdemoi.php">Step 2:<br>A propos de moi</a></li>
                            <li class=""><a href="langue.php">Step 3:<br>Langues</a></li>
                            <li class=""><a href="#">Step 4:<br>Villes de travail</a></li>
                            <li class=""><a href="services.php">Step 5:<br>Service</a></li>
                            <li class=""><a href="mon-cadeau.php">Step 6:<br>Mon Cadeau</a></li>
                            <li class=""><a href="coordonnees.php">Step 7:<br>Coordonnées</a></li>
                    </ul>

                    <style>
                        .city-clear {
                            display: inline-block;
                            cursor: pointer;
                            color: #fff;
                            background: black;
                            padding: 5px 10px;
                            position: absolute;
                            right: -15px;
                            bottom: 0;
                            height: 33px;
                            z-index: 42;
                        }

                        #edit-profile .box .addon {
                            margin-left: 9px;
                        }
                    </style>
                    <script type="text/javascript">
                            var get_cityzones = '/panel/get_cityzones/';
                            var cityzones = [];
                                $(document).ready(function(){
                                $( "#incall_type" ).on( "click", "#incall", function(e) {
                                    if($(this).is(":checked")){
                                        $('#incall_type input.incall_type_class').prop('disabled', false);
                                        $('input[name="incall_type"]:checked').change();
                                    }else{
                                        $('input.incall_hotel_room').prop('disabled', true);
                                        $('#incall_type input.incall_type_class').prop('disabled', true);
                                        $('input#incall_other').prop('disabled', true);
                                    }
                                });
                                $( "#outcall_type" ).on( "click", "#outcall", function(e) {
                                    if($(this).is(":checked")){
                                        $('#outcall_type input.outcall_type_class').prop('disabled', false);
                                        $('input[name="outcall_type"]:checked').change();
                                    }else{
                                        $('#outcall_type input.outcall_type_class').prop('disabled', true);
                                        $('input#outcall_other').prop('disabled', true);
                                    }
                                });
                                $('input[name="incall_type"]').change(function(e) {
                                    var temp_it = $(this);
                                    $('.incall_type_class').each(function(){
                                        var temp_itin = $(this);
                                        if(temp_it.val()!=temp_itin.val()){
                                            temp_itin.prop("checked", false);
                                        }
                                    });
                                    temp_it.prop("checked", true);

                                    if($(this).val()=='2'){
                                        $('input.incall_hotel_room').prop('disabled', false);
                                    }else if($(this).val()=='4'){
                                        $('input#incall_other').prop('disabled', false);
                                    }else{
                                        $('input.incall_hotel_room').prop('disabled', true);
                                        $('input#incall_other').prop('disabled', true);
                                    }
                                });
                                $('input[name="outcall_type"]').change(function(e) {
                                    var temp_it = $(this);
                                    $('.outcall_type_class').each(function(){
                                        var temp_itin = $(this);
                                        if(temp_it.val()!=temp_itin.val()){
                                            temp_itin.prop("checked", false);
                                        }
                                    });
                                    temp_it.prop("checked", true);

                                    if($(this).val()=='4'){
                                        $('input#outcall_other').prop('disabled', false);
                                    }else{
                                        $('input#outcall_other').prop('disabled', true);
                                    }
                                });
                            });
                        </script>
                        <div class="row row-17 flex-row">
                            <div class="col-xs-6">
                                <div class="box">
                                    <h3 class="heading heading2">LIEUX DE TRAVAIL</h3>
                                        <div class="row">
                                            <div class="col-xs-3 grp">
                                                <label for="defaultcity">Ville de base</label>
                                            </div>
                                            <div class="col-xs-5 grp">
                                                <div class="bloc">
                                                      <div class="select">
                                                        <select name="ville">
                                                        <option value=<?php echo $results[0]->ville;?>><?php echo $results[0]->ville;?></option>
                                                          <option value="Douala"> Douala </option>
                                                          <option value="Yaounde">Yaounde</option>
                                                          <option value="Garoua">Garoua</option>
                                                          <option value="Bamenda">Bamenda</option>
                                                          <option value="Kribi">Kribi</option>
                                                          <option value="limbe">limbe</option>
                                                          <option value="Bafoussam">Bafoussam</option>
                                                          <option value="Dschang">Dschang</option>
                                                          <option value="Kumba">Kumba</option>
                                                          <option value="Buea">Buea</option>
                                                          <option value="Ngaoundéré">Ngaoundéré</option>
                                                          <option value="Autre à préciser">Autre à préciser</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                            <div class="box">
                                <h3 class="heading heading2">Un autre lieu de Travail (optionel)</h3>
                                <div class="row">
                                    <div class="col-xs-3 grp">
                                        <label class="city2nd">Second lieu:</label>
                                    </div>
                                    <div class="col-xs-5 grp">
                                                <div class="bloc">
                                                      <div class="select">
                                                        <select name="secondlieu">
                                                          <option value="0">Autre à préciser</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                </div>
                                             </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-xs-6">
        <div class="box" id="incall_type">
            <h3 class="heading">Incall</h3>
            <div class="custom-checkbox grp">
                <input type="checkbox" id="incall" name="incall" value="Incall" checked="checked">              <label for="incall">Incall</label>
                                </div><br>
                                <div class="p-l-25">
                     <div class="grp">
                         <div class="radio">
                            <label for="in-appartement-prive">
                                <input type="radio" id="in-appartement-prive" name="incall_type" value="Appartement privé" class="incall_type_class" checked="checked"><span>Appartement privé</span>
                            </label>
                        </div><br>
                        <div class="radio">
                            <label for="in-chambre-d-hotel">
                                <input type="radio" id="in-chambre-d-hotel" name="incall_type" value="Chambre d'hôtel" class="incall_type_class incall_hotel">                                <span>Chambre d'hôtel</span>
                            </label>
                        </div><br>
                        <div class="p-l-25">
                            <div class="radio">
                                        <label for="5-star">
                                    <input id="5-star" class="incall_hotel_room" type="radio" checked="checked" name="incall_hotel_room" value="5" disabled="disabled"><p class="etoiles"><b>5<span class="glyphicon glyphicon-star"></span></p>
                                    <p class="etoiles">4<span class="glyphicon glyphicon-star"></span></p>
                                    <p class="etoiles">3<span class="glyphicon glyphicon-star"></span></p>
                                    <p class="etoiles">2<span class="glyphicon glyphicon-star"></span></p>
                                    <p class="etoiles"><span class="glyphicon glyphicon-star"></span></p>
                                            <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg> <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg> <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg> <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg> <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg>
                                        </label>
                                    </div><br>
                                        <div class="radio">
                                            <label for="4-star">
                                                <input id="4-star" class="incall_hotel_room" type="radio" name="incall_hotel_room" value="4" disabled="disabled">
                                                <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg> <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg> <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg> <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg>
                                            </label>
                                    </div><br>
                                    <div class="radio">
                                            <label for="3-star">
                                                <input id="3-star" class="incall_hotel_room" type="radio" name="incall_hotel_room" value="3" disabled="disabled">
                                                <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg> <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg> <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg>
                                            </label>
                                    </div><br>
                                     <div class="radio">
                                            <label for="2-star">
                                                <input id="2-star" class="incall_hotel_room" type="radio" name="incall_hotel_room" value="2" disabled="disabled">
                                                <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg> <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg>                                         
                                            </label>
                                    </div><br>
                                     <div class="radio">
                                            <label for="1-star">
                                                <input id="1-star" class="incall_hotel_room" type="radio" name="incall_hotel_room" value="1" disabled="disabled">
                                                <svg viewBox="0 0 64 64"><use xlink:href="#icon-star"></use></svg>                                         
                                            </label>
                                        </div><br>
                                    </div>
                                    <div class="radio">
                            <label for="in-club-studio">
                                <input type="radio" id="in-club-studio" name="incall_hotel_room" value="3" class="incall_type_class"><span>Club/Studio</span>
                            </label>
                        </div><br>
                                    <div class="radio">
                                            <label for="in-autres-veuillez-fournir-des-details">
                                                <input type="radio" id="in-autres-veuillez-fournir-des-details" name="incall_type" value="4" class="incall_type_class"><span>Autres ( veuillez fournir des détails)</span>
                                            </label>
                        </div><br>
                                    <div class="row">
                                <div class="col-xs-9">
                                    <input type="text" id="incall_other" name="incall_other" value="" class="txt" placeholder="Incall Autres ( veuillez fournir des détails)" size="25" disabled="disabled">                               
                                </div>
                            </div>
                        </div>
                     </div>
                  </div>
             </div>
             <div class="col-xs-6">
        <div class="box" id="outcall_type">
            <h3 class="heading">Outcall</h3>
            <div class="custom-checkbox grp">
                <input type="checkbox" id="outcall" name="outcall" value="Outcall">          
                 <label for="outcall">Outcall</label>
            </div><br>
            <div class="p-l-25">
                <div class="grp">
                    <div class="radio">
                            <label for="out-uniquement-visites-a-l-hotel">
                                <input type="radio" id="out-uniquement-visites-a-l-hotel" name="outcall_type" value="Uniquement visites à l'hôtel" class="outcall_type_class" disabled="disabled">   
                                <span>Uniquement visites à l'hôtel</span>
                            </label>
                        </div><br>
                        <div class="radio">
                            <label for="out-uniquement-visites-a-la-maison">
                                <input type="radio" id="out-uniquement-visites-a-la-maison" name="outcall_type" value="Uniquement visites à la maison" class="outcall_type_class" disabled="disabled">  
                                <span>Uniquement visites à la maison</span>
                            </label>
                        </div><br>
                        <div class="radio">
                            <label for="out-visites-a-l-hotel-et-a-la-maison">
                                <input type="radio" id="out-visites-a-l-hotel-et-a-la-maison" name="outcall_type" value="Visites à l'hôtel et à la maison" class="outcall_type_class" disabled="disabled">   
                                <span>Visites à l'hôtel et à la maison</span>
                            </label>
                        </div><br>
                        <div class="radio">
                            <label for="out-autres-veuillez-fournir-des-details">
                                <input type="radio" id="out-autres-veuillez-fournir-des-details" name="outcall_type" value="Autres ( veuillez fournir des détails)" class="outcall_type_class" disabled="disabled">  
                                <span>Autres ( veuillez fournir des détails)</span>
                            </label>
                        </div><br>
                            <div class="row">
                                <div class="col-xs-9">
                                    <input type="text" id="outcall_other" name="outcall_other" value="" class="txt" placeholder="Outcall Autres ( veuillez fournir des détails)" size="25" disabled="disabled">                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
                        

                <div class="col-xs-12">
                     <div class="nextandbackBtns">
                     <button type="submit" class="btn btn-primary save" name="Save">Enregistrer</button>
                      <!-- <a href="javascript:void(0);" onclick="doSave();" class="btn btn-primary save">Enregistrer</a> -->
                     </div>
                    </div>
            </div>
        </form>
        </main>
        <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <svg viewBox="0 0 64 64">
                        <use xlink:href="#icon-real-photos"></use>
                        </svg>
                        <h4 class="line">Photo des Minettes réelles</h4>
                    </div>
                    <div class="col-xs-4">
                        <svg viewBox="0 0 64 64">
                        <use xlink:href="#icon-discretion-guaranteed"></use>
                        </svg>
                        <h4 class="line">Discretion assurée</h4>
                    </div>
                    <div>
                        <div class="col-xs-4">
                            <svg viewBox="0 0 64 64">
                            <use xlink:href="#icon-trusted-website"></use>
                            </svg>
                            <h4 class="line">Minette girl Cameroun</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy"><small>© MINELUX 2020 Copyrigth All rigths reserved. V1.0 </small></div>
    </footer>
</body>
</html>