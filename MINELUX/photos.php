<?php
session_start();
  // require('connexionBD.php');
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'myminette');
if(isset($_POST['Save'])) {
    // $name = $_GET["username"];
 
 $query = "UPDATE `membres` SET datenaiss = '$_POST[datenaiss]', slogan = '$_POST[slogan]', region = '$_POST[region]', nationality = $_POST[nationality], epilation = '$_POST[epilation]', piercing = '$_POST[piercing]', tattoo = '$_POST[tattoo]'  WHERE username = '$_SESSION[username]' ";
  $query_run = mysqli_query($connection, $query);
  if($query_run) {
    echo '<script type="text/javascript"> alert("Vos données ont été enregistrées avec succès") </script>';
  } else {
    echo '<script type="text/javascript"> alert("Echecs enregistrement de vos donnees") </script>';
  }
}

if(!isset($_SESSION['username'])) {
    header('location:connexion.php');
    exit;
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
        <link rel="stylesheet" href="css/photos.css">
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
                    <span class="usermessage">
                         Bienvenue:
                        <a class="username" href="panel.php">
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
                    <li class="nav-item active"><a class="nav-link" href="home.php">Accueil</a></li>
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
                    <h1 class="page-title">organiser les photos</h1>
                </div>
            </div>
            </div>
            </div>
        </header>
           <main class="container">
            <script>
                var pendingList = [];
                var jcrop_api = { };
                var fload = [];
                var sload = [];
            </script>
            <style>
                .dropzone {
                    border: 2px solid #ffffff;
                    background: #3a3a3a;
                    min-height: 218px;
                }

                .upload-msg {
                    color: #fff;
                    margin: 40px auto;
                    text-align: center;
                    cursor: pointer;
                }

                .upload-msg i {
                    font-size: 58px;
                    margin-bottom: 10px;
                }

                .dropzone .dz-preview {
                    margin: 15px;
                }

                .upload-msg .btn {
                    margin-top: 14px;
                }

                .dz-message {
                    margin-top: 39px;
                }

                .dropzone .dz-preview.dz-image-preview {
                    background: inherit!important;
                }
            </style>
            <script type="text/javascript">
    $(document).ready(function(){
        $('.cropimg').cropbox({
            width: 150,
            height: 205,
            showControls: 'never',
            result: { cropX:0, cropY:0, cropW:150, cropH:205 },
            controls: ''
        }, function(){
            var id = $(this.$image).attr('data-id');
            var pos_x = parseInt($(this.$image).attr('data-pos_x'));
            var pos_y = parseInt($(this.$image).attr('data-pos_y'));
            if(typeof fload[id]=='undefined'){
                this.setCrop({ cropX:pos_x, cropY:pos_y, cropW:150, cropH:205 });
            }
            fload[id] = 0;
            jcrop_api[id] = this;
        }).on('cropbox', function( event, results, img ) {
            var id = $(this).attr('data-id');
            if( typeof fload[id]!='undefined' || typeof sload[id]!='undefined' ) {
                $.get( '/panel/photos/refresh_photos/9024/'+id+'/'+results.cropX+'/'+results.cropY ).done(function(){
                    delete sload[id];
                });
            }
        });

        $('body').on('click', '.rotate_dir', function(e) {
            e.preventDefault();
            var direction = $(this).attr('data-dir');
            var image = $(this).closest('.sortable').find('.cropimg');
            var id = image.attr('data-id');
            $.get('/panel/photos/rotate_photo/9024/'+id+'/'+direction)
                .done(function( data ) {
                    image.attr('src', image.attr('src').split("?")[0]+'?refresh=1&rand='+Math.random());
                    sload[id] = 1;
                    jcrop_api[id].updateOptions({
                        width: 150,
                        height: 205,
                        result: { cropX: 0, cropY: 0, cropW: 150, cropH: 205 }
                    });
                });
        });

        $( ".public-photos" ).sortable({
            handle: ".sortablebtn",
            cancel: '',
            stop : function(event, ui) {
                var aa = { };
                $.each($('.frame img.cropimg'), function(index, event) {
                    var thisId = parseInt($(this).attr('data-id'));
                    aa[thisId] = parseInt(index, 10)+1;
                });

                $.ajax({
                    type: "POST",
                    url: "/panel/photos/save_order/9024",
                    data: aa,
                    async: false
                });
            }
        });

        $('body').on('click', '.set-as-profile', function(e){
            e.preventDefault();
            var $this = $(this);
            if(!$this.attr('disabled')){
                var status =  $this.closest('.sortable').find('.cropimg').attr('data-approved');
                if(status!=1){
                    alert("You can't set as main a photo in pending!");
                }else{
                    $.get( '/panel/photos/set_main/9024/'+$this.attr('data-id') )
                        .done(function( data ) {
                            $this.closest('.public-photos').find('.set-as-profile').attr('disabled', false);
                            $this.closest('.public-photos').find('.badge-profile-photo').remove();
                            $this.closest('.img').find('.frame').prepend('<h4 class="badge-profile-photo">Main</h4>');
                            $this.attr('disabled', true);
                        });
                }
            }
        });

        $('body').on('click', '.delete_pic', function(e){
            e.preventDefault();
            var $this = $(this);
            if(!$this.attr('disabled')){
                if(confirm('Vous êtes sure?')){
                    $.get( '/panel/photos/delete/9024/'+$this.attr('data-id') )
                        .done(function( data ) {
                            var imgdiv = $this.closest('.sortable');
                            var is_main = imgdiv.find('.badge-profile-photo').length;
                            if(is_main>0){
                                $this.closest('.public-photos').find('.frame:eq(1)').prepend('<h4 class="badge-profile-photo">Main</h4>');
                            }
                            $this.closest('.sortable').unbind().removeData().remove();
                        });
                }
            }
        });
    });
</script>
                    <div class="row row-17 flex-row">
    <div class="col-xs-6">
        <div class="box">
            <h3 class="heading heading2">RÈGLES DE PHOTO PUBLIC</h3>
            <p class="photosCtc">Les photos téléchargées doivent être acceptées par l'équipe de support et jusqu'à ce que l'approbation ne soit pas affichée sur le site. Nous suggérons donc de ne pas supprimer toutes les photos jusqu'à ce que les nouvelles soient approuvées. Aussi, nous aimerions nous rappeler:</p>
<p class="photosCtc"></p><li>Il n'est PAS PERMIS de télécharger des photos HARD ou PORNO;</li><p></p>
<p class="photosCtc"></p><li>Il n'est PAS PERMIS d'ajouter (tout type de texte) sur les photos;</li><p></p>
<p class="photosCtc red"></p><li>Attention, nouvelles dimensions minimales pour photos: Portrait 400x600, Paysage 500x375.</li><p></p>
<p class="photosCtc"></p><li>Si vous téléchargez une photo fausse, votre profil sera défini dans SUSPICIOUS et seule la procédure de vérification à 100% peut être réactivée à nouveau;</li><p></p>
<p class="photosCtc">Si vous ne respectez pas ces règles, le profil sera bloqué.</p>        </div>
    </div>
    <div class="col-xs-6">
        <div class="box">
            <h3 class="heading">Télécharger Photos</h3>
                            <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    Vous devez avoir au moins 3 photos approuvées pour que  votre profile soit activer!
                </div>
                        <div class="col-md-12 col-sm-12">
<?php if(isset($_SESSION['username']))
?>
                <form action="panel/photos/telecharger" method="post" class="dropzone dz-clickable" id="pictures" enctype="multipart/form-data">
                    <div class="upload-msg"><i class="fa fa-image"></i><br> Déposez des photos ici<br><a class="btn btn-success">Telecharger</a>
                
                    </div>
                <div class="dz-default dz-message"><span></span></div></form>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="box">
            <h3 class="heading"><?php  if(!isset($_SESSION['username'])){
                                   echo "Vous n'êtes pas connecté!";
                                }else{
                                    echo $_SESSION['username'];
                                
                                } ?></h3>
            <div class="row row-5 public-photos ui-sortable">
                            </div>
        </div>
    </div>
</div>

        <script>
    $('.upload-msg').on('click', function() {
        $('.dropzone').click();
    });

    Dropzone.options.pictures = {
        paramName: "files",
        dictDefaultMessage: '',
        accept: function (file, done) {
            if (file.type !== "image/jpeg" && file.type !== "image/png") {
                return done('Invalid file type.');
            }

            done();
        },
        success: function (e, data) {
            var that = this;

            $.each(data.files, function (index, file) {
                if (file.url) {
                    $.get('/panel/photos/render_photo/9024/' + file.photo_id + '/').done(function(data) {
                            $('.public-photos').append(data);
                            $('img[data-id="' + file.photo_id + '"]').cropbox({
                                width: 150,
                                height: 205,
                                showControls: 'never',
                                result: {cropX: 0, cropY: 0, cropW: 150, cropH: 205},
                                controls: ''
                            }, function () {
                                var id = $(this.$image).attr('data-id');
                                var pos_x = parseInt($(this.$image).attr('data-pos_x'));
                                var pos_y = parseInt($(this.$image).attr('data-pos_y'));
                                if (typeof fload[id] == 'undefined') {
                                    this.setCrop({cropX: pos_x, cropY: pos_y, cropW: 150, cropH: 205});
                                }
                                fload[id] = 0;
                                jcrop_api[id] = this;
                            }).on('cropbox', function (event, results, img) {
                                var id = $(this).attr('data-id');
                                if (typeof fload[id] != 'undefined' || typeof sload[id] != 'undefined') {
                                    $.get('/panel/photos/refresh_photos/9024/' + id + '/' + results.cropX + '/' + results.cropY).done(function () {
                                        delete sload[id];
                                    });
                                }
                            });

                            $('html, body').animate({
                                scrollTop: $('.img.sortable').last().offset().top
                            }, 2000);
                        });

                } else if (file.error) {

                }
            });
        }
    };
</script>
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