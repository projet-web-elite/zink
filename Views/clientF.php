<!DOCTYPE html>
<html lang="en-FR">
<head>
    <meta charset="utf-8">


<center>




<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Foodmin : Widget</title>
	
	<!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon--> 
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon--> 
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
	
	<!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

 





<title> ZINK </title>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
<link href="assets/css/style.css" rel="stylesheet">
</head>



<body  style="background-color:#000000">
    <form method="POST" action="ajoutclient.php" id="connexion">

    <!--<h1>ZINK</h1>-->    <div class="content">
            <!--<h1>Connexion </h1>-->    <div class="row">
                <div class="unix-login">




    <div class="col-lg-6 col-lg-offset-3">
                                                
                                                    <div class="card-header">
                                                        <h4><center><strong>Register Client Fidèle</strong> </center></h4>
                                                    </div>
                                                </br>
                                                    <div >
                                                        <form style="color:red" action="ajoutclient.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                                 <div  class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">nom</label></div>
                                                                <div class="col-12 col-md-9"><input type="nom" id="nom" name="nom" placeholder="nom" class="form-control" required><small class="form-text text-muted">veuillez entrer votre nom </small><span id="missing_nom"></span></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">prenom</label></div>
                                                                <div class="col-12 col-md-9"><input type="prenom" id="prenom" name="prenom" placeholder="prenom" class="form-control" required><small class="form-text text-muted">veuillez entrer votre prenom </small><span id="missing_prenom"></span></div>
                                                            </div>
                                                             
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">cin</label></div>
                                                                <div class="col-12 col-md-9"><input type="cin" id="cin" name="cin" placeholder="cin" class="form-control"required><small class="help-block form-text">veuillez enter votre cin</small><span id="missing_cin"></span></div>

                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">mail</label></div>
                                                                <div class="col-12 col-md-9"><input type="mail" id="mail" name="mail" placeholder="nour.trabelsi@esprit.tn" class="form-control" required><small class="help-block form-text">veuillez enter votre mail</small><span id="missing_mail"></span></div>
                                                            </div>
            
                                                      
                                                         </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="select" class=" form-contegotrol-label">sexe</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <select name="sexe" id="sexe" value="<?PHP echo $sexe?>"class="form-control">
                                                                            <option value="sexe">sexe</option>
                                                                            <option value="homme">homme</option>
                                                                            <option value="femme">femme</option>
                                                                            
                                                                        </select><span id="missing_sexe"></span>
                                                                    </div>
                                                                </div>
                                                                 

                                                        </form>
                                                    </div>




    <div class="form__group mb--20">
                                    <div class="elem-group">
                                        
                                        <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="material-icons"></i>
                                        
                                        <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}"> </br>
                                        <label for="captcha">Please Enter the Captcha Text</label> <br>
                                    </div>
                                    </div>
                     </br></br>

                                                   <div class="card-footer">



                                                    <button type="submit" id="ajouter" class="btn btn-warning " value="ajouter" onclick="myFunction()" >
                                                            <i class="fa fa-dot-circle-o"></i> Save
                                                        </button>

                                                       
                                               <!-- <button type="button" class="btn btn-primary btn-sm" value="ajouter" id="ajouter" onclick="myFunction()">Save</button>-->
                                                      </br> </br><li><a href="ZINK_FI/index.html" class="btn btn-danger " ><i class="fa fa-dot-circle-o"></i> Return</a></li>
                                                    </div>
                                                </div>
</div> </div>
    
   <script type="text/javascript" src="connexion.js">
      

  </script>
</body>


  </center>

</html>