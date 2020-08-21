<?php
    //include auth.php file on all secure pages
    include("auth.php");
    require('db.php');
  
?>

<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/index.css" rel="stylesheet">
<link href="../css/dashboard1.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<head>
    <meta charset="utf-8">
    <title>Welcome to Database HR Strato Solution</title>
 <!--   <script>
        window.onload = function() {

            var dps = []; // dataPoints
            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "List of People Hired in Strato"
                },
                axisY: {
                    includeZero: false
                },
                data: [{
                    type: "line",
                    dataPoints: dps
                }]
            });

            var xVal = 0;
            var yVal = 100;
            var updateInterval = 1000;
            var dataLength = 20; // number of dataPoints visible at any point

            var updateChart = function(count) {

                count = count || 1;

                for (var j = 0; j < count; j++) {
                    yVal = yVal + Math.round(5 + Math.random() * (-5 - 5));
                    dps.push({
                        x: xVal,
                        y: yVal
                    });
                    xVal++;
                }

                if (dps.length > dataLength) {
                    dps.shift();
                }

                chart.render();
            };

            updateChart(dataLength);
            setInterval(function() {
                updateChart()
            }, updateInterval);

        }
    </script> -->
    
    
</head>


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
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
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
                <!--------------------------------------WELCOME--------------------------------------------->
                <div class="user-dashboard">
                    <h1>Welcome to Dashboard, <?php echo $_SESSION['username']; ?>!</h1>
                </div>
                <!--------------------------------------END OF WELCOME--------------------------------------------->
                <hr>
                <!--------------------------------------LIST OF NUMBER HIRED--------------------------------------------->
                
                <div class="container bootstrap snippet">
                    <div class="row">
                        <!-----------------SAP------------->
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile ">
                                <a href="#">
                                    <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
                                </a>
                                <div class="circle-tile-content dark-blue">
                                    <div class="circle-tile-description text-faded"> SAP</div>
                                    <div class="circle-tile-number text-faded "><?php echo $_SESSION['username']; ?></div> 
                                    <div class="circle-tile-number text-faded ">
                                    <?php
                                    $sql = "SELECT count(id) AS total FROM sap_record";
                                    $result = mysqli_query($con,$sql);
                                    $values = mysqli_fetch_assoc($result);
                                    $sap_rows = $values['total'];
                                    echo $sap_rows;
                                    ?>
                                    </div>
                                    <a class="circle-tile-footer" href="view-SAP.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-----------------SECOND------------->
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile ">
                                <a href="#">
                                    <div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div>
                                </a>
                                <div class="circle-tile-content red">
                                    <div class="circle-tile-description text-faded"> GIS </div>
                                    <div class="circle-tile-number text-faded "><?php echo $_SESSION['username']; ?></div>
                                    <div class="circle-tile-number text-faded ">
                                    <?php
                                    $sql = "SELECT count(id) AS total FROM gis_record";
                                    $result = mysqli_query($con,$sql);
                                    $values = mysqli_fetch_assoc($result);
                                    $gis_rows = $values['total'];
                                    echo $gis_rows;
                                    ?>
                                    </div>
                                    <a class="circle-tile-footer" href="view-GIS.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-----------------THIRD------------->
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile ">
                                <a href="#">
                                    <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
                                </a>
                                <div class="circle-tile-content dark-blue">
                                    <div class="circle-tile-description text-faded"> MAXIMO/MICROSOFT</div>
                                    <div class="circle-tile-number text-faded "><?php echo $_SESSION['username']; ?></div>
                                    <div class="circle-tile-number text-faded ">
                                    <?php
                                    $sql = "SELECT count(id) AS total FROM mm_record";
                                    $result = mysqli_query($con,$sql);
                                    $values = mysqli_fetch_assoc($result);
                                    $mm_rows = $values['total'];
                                    echo $mm_rows;
                                    ?>
                                    </div>
                                    <a class="circle-tile-footer" href="view-MM.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-----------------FOURTH------------->
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile ">
                                <a href="#">
                                    <div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div>
                                </a>
                                <div class="circle-tile-content red">
                                    <div class="circle-tile-description text-faded"> PROGRAMMER </div>
                                    <div class="circle-tile-number text-faded "><?php echo $_SESSION['username']; ?></div>
                                    <div class="circle-tile-number text-faded ">
                                    <?php
                                    $sql = "SELECT count(id) AS total FROM programmer_record";
                                    $result = mysqli_query($con,$sql);
                                    $values = mysqli_fetch_assoc($result);
                                    $programmer_rows = $values['total'];
                                    echo $programmer_rows;
                                    ?>
                                    </div>
                                    <a class="circle-tile-footer" href="view-PROGRAMMER.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-----------------FIFTH------------->
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile ">
                                <a href="#">
                                    <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
                                </a>
                                <div class="circle-tile-content dark-blue">
                                    <div class="circle-tile-description text-faded"> IT</div>
                                    <div class="circle-tile-number text-faded "><?php echo $_SESSION['username']; ?></div>
                                    <div class="circle-tile-number text-faded ">
                                    <?php
                                    $sql = "SELECT count(id) AS total FROM it_record";
                                    $result = mysqli_query($con,$sql);
                                    $values = mysqli_fetch_assoc($result);
                                    $it_rows = $values['total'];
                                    echo $it_rows;
                                    ?>
                                    </div>
                                    <a class="circle-tile-footer" href="view-IT.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-----------------SIXTH------------->
                        <div class="col-lg-2 col-sm-6">
                            <div class="circle-tile ">
                                <a href="#">
                                    <div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div>
                                </a>
                                <div class="circle-tile-content red">
                                    <div class="circle-tile-description text-faded"> GENERAL </div>
                                    <div class="circle-tile-number text-faded "><?php echo $_SESSION['username']; ?></div>
                                    <div class="circle-tile-number text-faded ">
                                    <?php
                                    $sql = "SELECT count(id) AS total FROM general_record";
                                    $result = mysqli_query($con,$sql);
                                    $values = mysqli_fetch_assoc($result);
                                    $general_rows = $values['total'];
                                    echo $general_rows;
                                    ?>
                                    </div>
                                    <a class="circle-tile-footer" href="view-GENERAL.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-------------------------------------- END LIST OF NUMBER HIRED--------------------------------------------->
                <br><br><br>
                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                <script type="text/javascript">
                  window.onload = function () {

                  var chart = new CanvasJS.Chart("chartContainer", {
                  theme: "light1", // "light2", "dark1", "dark2"
                  animationEnabled: false, // change to true		
	              title:{
		                  text: "List of People Hired in Strato"
	              },
	              data: [
	              {
	           	  // Change type to "bar", "area", "spline", "pie",etc.
		          type: "column",
		          dataPoints: [
		                    	{ label: "SAP",  y: $sap_rows },
		                      	{ label: "GIS", y: 15  },
			                    { label: "MM", y: 25  },
			                    { label: "PROGRAMMER",  y: 30  },
			                    { label: "IT",  y: 28  },
                                { label: "GENERAL",  y: 28  }
		                      ]
	             }
	             ]
                 });
                 chart.render();

                 }
                 </script>
                <br><br><br><br><br><br>
            </div>
        </div>
    </div>
</body>

</html>