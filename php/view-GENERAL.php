<?php
    require('db.php');
    include("auth.php");
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/index.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<head>
    <meta charset="utf-8">
    <title>View Records</title>
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
                        <li class="active"><a href="view-GENERAL.php"><i class="fa fa-dashboard" aria-hidden="true"></i><span class="hidden-xs hidden-sm">View Record General</span></a></li>
                        <li><a href="insert-GENERAL.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Insert Record General</span></a></li>
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
                <div class="form">
                    <h2>View Records for General</h2>
                    <br><br>
                    <table class="table table-sm table-dark" width="100%" border="1" style="border-collapse:collapse;">
                        <thead>
                            <tr class="bg-primary">
                                <th><strong>S.No</strong></th>
                                <th><strong>Category</strong></th>
                                <th><strong>Section</strong></th>
                                <th><strong>Person in Charge</strong></th>
                                <th><strong>Year of Experiences</strong></th>
                                <th><strong>Description</strong></th>
                                <th><strong>File</strong></th>
                                <th><strong>Edit</strong></th>
                                <th><strong>Delete</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $count=1;
                                $sel_query="Select * from general_record ORDER BY id desc;";
                                $result = mysqli_query($con,$sel_query);
                                while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td align="center"><?php echo $count; ?></td>
                                <td align="center"><?php echo $row["categorygeneral"]; ?></td>
                                <td align="center"><?php echo $row["section"]; ?></td>
                                <td align="center"><?php echo $row["personincharge"]; ?></td>
                                <td align="center"><?php echo $row["yearsofexperiences"]; ?></td>
                                <td align="center"><?php echo $row["descriptiongeneral"]; ?></td>
                                 <td align="center">
                                    <?php if($row["file_path"] != ''){ ?>
                                    <a href="<?php echo $row["file_path"]; ?>" download>Download</a>
                                    <?php } ?>
                                </td>
                                <td align="center">
                                    <a href="edit-GENERAL.php?id=<?php echo $row["id"]; ?>">Edit</a>
                                </td>
                                <td align="center">
                                    <a href="delete-GENERAL.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                </td>
                            </tr>
                            <?php $count++; } ?>
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-primary" href="index.php" role="button">Back</a>
            </div>
        </div>
    </div>
</body>