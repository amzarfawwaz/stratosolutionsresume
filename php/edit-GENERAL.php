<?php
    require('db.php');
    include("auth.php");

    $id=$_REQUEST['id'];
    $query = "SELECT * from general_record where id='".$id."'"; 
    $result = mysqli_query($con, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/index.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<head>
    <meta charset="utf-8">
    <title>Update Record</title>
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
                <!------------------------- NAVIGATION BAR -------------------------------------->
                <div class="navi">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="view-GENERAL.php"><i class="fa fa-dashboard" aria-hidden="true"></i><span class="hidden-xs hidden-sm">View Record GENERAL</span></a></li>
                        <li class="active"><a href="insert-GENERAL.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Insert Record GENERAL</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                    </button>
                                </div>
                            </nav>
                            <!------------ SEARCH--------------->
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search ..." id="search">
                            </div>
                        </div>
                        <!----------- ADMIN PICTURE ---------------->
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../img/admin.png" alt="user"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1>Update Record</h1>

                    <?php
                        $status = "";
                        if(isset($_POST['submit'])){
                            $trn_date = date("Y-m-d H:i:s");
                            $categorygeneral = $_POST['categorygeneral'];
                            $section = $_POST['section'];
                            $personincharge = $_POST['personincharge'];
                            $yearsofexperiences = $_POST['yearsofexperiences'];
                            $descriptiongeneral = $_POST['descriptiongeneral'];
                            $submittedby = $_SESSION["username"];
                
            $update="update general_record set trn_date='".$trn_date."',categorygeneral='".$categorygeneral."', section='".$section."',personincharge='".$personincharge."',yearsofexperiences='".$yearsofexperiences."',descriptiongeneral='".$descriptiongeneral."',submittedby='".$submittedby."' where id='".$id."'";
                
            mysqli_query($con, $update) or die(mysqli_error());
                
            $status = "Record Updated Successfully. </br></br><a href='view-GENERAL.php'>View Updated Record</a>";
                
                echo '<p style="color:#FF0000;">'.$status.'</p>';
                
            }
        else {
            ?>

                    <!----------------------------------- FORM START------------------------------------->
                    <form  action="" method="POST">
                        <!----------------------CATEGORY---------------------------->
                        <div class="form-group">
                            <label>Categorization </label>
                            <select name="categorygeneral" class="form-control" required>
                                <option selected hidden value=""> --Select Category-- </option>
                                <option value="GENERAL">GENERAL</option>
                            </select>
                        </div>
                        <!-----------------------SECTION---------------------------->
                        <div class="form-group">
                            <label>Section </label>
                            <select name="section" class="form-control" required>
                                <option selected hidden value=""> --Select Section-- </option>
                                <option value="Project Manager (Non-SAP)">Project Manager (Non-SAP)</option>
                                <option value="SOA Consultant">SOA Consultant</option>
                                <option value="SOA Technical">SOA Technical</option>
                                <option value="Contact Center Quality Assurance">Contact Center Quality Assurance</option>
                                <option value="Call Center Operator">Call Center Operator</option>
                                <option value="SQL Developer">SQL Developer</option>
                                <option value="Big Data Administrator and Developer (cloudera hadoop)">Big Data Administrator and Developer (cloudera hadoop)</option>
                                <option value="Fibre Optic Engineer">Fibre Optic Engineer</option>
                                <option value="Telecommunication Engineer">Telecommunication Engineer</option>
                            </select>
                        </div>
                        <!-----------------------PERSON IN CHARGE---------------------------->
                        <div class="form-group">
                            <label>Person In Charge </label>
                            <select name="personincharge" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected hidden value=""> --Select Person in Charge-- </option>
                                <option value="Wan Siti Norainul Busyra">Wan Siti Norainul Busyra</option>
                            </select>
                        </div>
                        <!-----------------------YEARS OF EXPERIENCE------------------------->
                        <div class="form-group">
                            <label>Years of Experiences </label>
                            <select name="yearsofexperiences" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected hidden value=""> --Select years of experience-- </option>
                                <option value="0-3years">0 - 3 years</option>
                                <option value="3-5years">3 - 5 years</option>
                                <option value="5-7years">5 - 7 years</option>
                                <option value="7-10years">7 - 10 years</option>
                            </select>
                        </div>
                        <!-----------------------DESCRIPTIONS---------------------------->
                        <div class="form-group">
                            <label>Descriptions</label>
                            <textarea class="form-control" name="descriptiongeneral" required></textarea>
                        </div>
                        <!-----------------------DROP RESUME---------------------------->
                        <div class="form-group">
                            <label>Drop Resume</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <br>
                        <!-----------------------SUBMIT BUTTON---------------------------->
                        <button class="btn btn-primary" name="submit" type="submit" value="Update">Update</button>
                        <a class="btn btn-outline-warning" href="index.php" role="button">Back</a>
                    </form>
                    <!--                    <p style="color:#FF0000;"><?php echo $status; ?></p>-->
                    <?php } ?>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>