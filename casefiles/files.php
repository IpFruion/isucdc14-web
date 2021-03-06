<html ng-app="someLegalSite">
    <head>
        <title>Cache, Daemon, and Commit</title>
        <link rel='stylesheet' type='text/css' href='/css/primary.css'>
        <link href='/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <link href='/css/bootstrap-responsive.min.css' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                <header class="">
                    <h1 style='float:left'>Cache, Daemon, and Commit<small> Attourneys at Law</small></h1>
                    <img src='/img/justice.png' style='width:100px;float:right;'/>
                </header>
            </div>
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="nav">
                        <li class='nav-button'><a href="/">Home</a></li>
                        <li class='nav-button'><a href="/candc/candc.html">Clients and Cases</a></li>
                        <li class='nav-button active'><a href="">Casefiles</a></li>
                    </ul>
                </div>
            </div>
        
	<?php
	    header("Location: https://ftp.team7.isucdc.com");
	    die();
	?>
        <!--<iframe src="https://ftp.team7.isucdc.com" style="width:100%;height:100%;"></iframe>--!>
    </div>
        <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js'></script>
        <script src='/js/jquery.min.js' type='text/javascript'></script>
        <script src='/js/bootstrap.min.js' type='text/javascript'></script>
        <script src='/js/app.js'></script>
    </body>
</html>
