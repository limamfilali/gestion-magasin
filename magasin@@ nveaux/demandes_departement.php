<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>demandes des agents</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">


    
    <?php
        include('navbar_departement.php');
    ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Demandes des agents</h4>
                                <p class="category">chef de département</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Nom</th>
                                    	<th>Prénom</th>
                                    	<th>CIN</th>
                                    	<th>Département</th>
                                        <th>Consulter</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>mohamed</td>
                                        	<td>rigati</td>
                                        	<td>sh123</td>
                                        	<td>informatique</td>
                                            <td><a href="description_demande_departement.php"><i class="pe-7s-ticket"></i></a></td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>limame</td>
                                        	<td>lfilali</td>
                                        	<td>sh456</td>
                                        	<td>équipement</td>
                                            <td><a href="description_demande_departement.php"><i class="pe-7s-ticket"></i></a></td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>nafaa</td>
                                        	<td>bougraine</td>
                                        	<td>sh789</td>
                                        	<td>juridique</td>                                            <td><a href="description_demande_departement.php"><i class="pe-7s-ticket"></i></a></td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>said</td>
                                        	<td>hagouni</td>
                                        	<td>sh147</td>
                                        	<td>topologique</td>
                                            <td><a href="description_demande_departement.php"><i class="pe-7s-ticket"></i></a></td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>mansor</td>
                                        	<td>lmkaiti</td>
                                        	<td>sh258</td>
                                        	<td>informatique</td> 
                                            <td><a href="description_demande_departement.php"><i class="pe-7s-ticket"></i></a></td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>youssef</td>
                                        	<td>ettafssaoui</td>
                                        	<td>sh369</td>
                                        	<td>juridique</td>
                                            <td><a href="#description_demande_departement.php"><i class="pe-7s-ticket"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <?php
        include('footer.php');
        ?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
