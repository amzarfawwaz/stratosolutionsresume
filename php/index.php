<?php
    //include auth.php file on all secure pages
    include("auth.php");
?>

<html>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/index.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<head>
    <meta charset="utf-8">
    <title>Welcome to Database HR Strato Solution</title>
</head>

<!--
<body>
    <div class="form">
        <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
        <p>This is secure area.</p>
        <p><a href="../php/dashboard.php">Dashboard</a></p>
        <a href="../php/logout.php">Logout</a>
    </div>
</body>
-->

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="index.php"><img src="../img/StratoLogo.png" alt="StratoSolutionsLogo" class="hidden-xs hidden-sm">
                        <img src="../img/StratoLogo.png" alt="StratoSolutionsLogo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <!----------------------------------- navigation bar--------------------->
                <div class="navi">
                    <ul>
                        <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="dashboard.php"><i class="fa fa-dashboard" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
                <!------------------------------END of navigation bar--------------------->
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">

                                    <!-- Add Folder -->
                                    <li class="hidden-xs"><a href="../Database_Resume/Add-Folder.html" class="add-project" data-toggle="modal" data-target="#add_folder">Add Folder</a></li>

                                    <!--Log Out button -->
                                   <li class="hidden-xs"><a href="logout.php" class="add-project" data-toggle="modal">Logout</a></li>

                                    <!--Dropdown Button -->
                                    <li class="dropdown">  
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../img/admin.png" alt="user">
                                        <b class="caret"></b></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1>Hello, <?php echo $_SESSION['username']; ?>!</h1>
                    <p> Select the Category of Employee you want to hire</p>
                </div>
                <hr>
                <a href="insert-SAP.php" class="btn btn-primary btn-lg btn-block " role="button" aria-pressed="true">SAP</a>
                <a href="insert-GIS.php" class="btn btn-primary btn-lg btn-block " role="button" aria-pressed="true">GIS</a>
                <a href="insert-MM.php" class="btn btn-primary btn-lg btn-block " role="button" aria-pressed="true">MAXIMO / MICROSOFT</a>
                <a href="insert-PROGRAMMER.php" class="btn btn-primary btn-lg btn-block " role="button" aria-pressed="true">PROGRAMMER</a>
                <a href="insert-IT.php" class="btn btn-primary btn-lg btn-block " role="button" aria-pressed="true">IT</a>
                <a href="insert-GENERAL.php" class="btn btn-primary btn-lg btn-block " role="button" aria-pressed="true">GENERAL</a>
            </div>
        </div>
    </div>
</body>
</html>