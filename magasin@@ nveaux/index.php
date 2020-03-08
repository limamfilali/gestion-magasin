<!DOCTYPE html>
<?php
op_start();
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/css/styles.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/my_style.css"/>
    <link rel="stylesheet" href="../team_profile/css/my_style.css"/>
    
    <script src="js/jquery-3.3.1.min (1).js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/responsiv.js"></script>
</head>

<body>
    <!-- Start: Navigation with Search -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="#">Agence urbaine laayounne</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
               
               </div>
        </div>
    </nav>
    <section class="row justify-content-center form_login">
                <div class="col-lg-4">
                    <header class="container-fluid">
                        <img src="assets2/fonts/11.png" class="profile-img-card">
                    </header>
                    <section class="container-fluid">
                        <form method="POST" action="">
                            <div>
                                <div class="tiltle" style="text-align: center;margin-bottom: 25px;color:green">
                                    <strong>
                                       
                                        <b>Agent</b>
                                        
                                    </strong>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <img src="img/name_user_3716.png"/>
                                        </span>
                                    </div>

                                    <input type="text" class="form-control" placeholder="login" name="login" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <img src="img/lock-padlock-symbol-for-protect_icon-icons.com_56926.png"/>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="mot_passe" name="pass" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div style="text-align: center;margin-bottom: 25px;margin-top: 25px">
                                    <a href="acceuil_magasinier.php" style="color: #554c4c;font-weight: bold">
                                        Mot_Passe Oublié?
                                    </a>
                                </div>
                                <input  type="submit" value="CONNEXION" name="submit" class="btn"/>
                            </div>
                        </form>
                    </section>

                               
    <!-- End: Navigation with Search -->
    <script src="assets2/js/jquery.min.js"></script>
    <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php   

if (isset($_POST['submit'])) {
           $dbh = mysqli_connect('localhost','root','','gestion_de_magasin2');
           $query="SELECT login,motpasse FROM administrateur WHERE login='".$_POST['login']."' and motpasse='".$_POST['pass']."'";
             $result=mysqli_query($dbh,$query);
        if(mysqli_fetch_assoc($result)){
            $_SESSION['User']=$_POST['login'];
            header("Location: information_magasinier.php");
            ob_end_flish();
        }
 
         else{
            echo "<script>alert('login ou mot de passe est incorrect');</script>";
        }
       
  }
 
  ?>
}


?>