<?php
    include("auth.php");
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'stratodatabaseresume');
    
    if(isset($_POST['submit'])){
        $trn_date = date("Y-m-d H:i:s");
        $categoryit = $_POST['categoryit'];
        $section = $_POST['section'];
        $personincharge = $_POST['personincharge'];
        $yearsofexperiences = $_POST['yearsofexperiences'];
        $descriptionit = $_POST['descriptionit'];
        $uploadfile = $_FILES["uploadfile"]["name"];
        
        $target_dir = "../uploadfileit/";
        $path = pathinfo($uploadfile);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES["uploadfile"]["tmp_name"];
        $path_filename_ext = $target_dir.$filename.".".$ext;
        
        move_uploaded_file($temp_name,$path_filename_ext);
        
        $submittedby = $_SESSION["username"];
        
        
        $query = "INSERT INTO `it_record`(`trn_date`,`categoryit`,`section`,`personincharge`,`yearsofexperiences`,`descriptionit`,`file_path`,`submittedby`)VALUES ('$trn_date','$categoryit','$section','$personincharge','$yearsofexperiences','$descriptionit','$path_filename_ext','$submittedby')";
        
        $query_run = mysqli_query($connection, $query);
        
        if($query_run){
            echo '<script type = text/javascript"> alert("Data Saved")</script>';
        }
        else{
            echo '<script type = text/javascript"> alert("Data NOT Saved")</script>';
        }
    }

?>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/index.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<head>
    <meta charset="utf-8">
    <title>Database IT</title>
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
                        <li><a href="view-IT.php"><i class="fa fa-dashboard" aria-hidden="true"></i><span class="hidden-xs hidden-sm">View Record IT</span></a></li>
                        <li class="active"><a href="insert-IT.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Insert Record IT</span></a></li>
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
                    <h1>Database IT</h1>
                    <p>Fill up the form below</p>
                    <hr>

                    <!----------------------------------- FORM START------------------------------------->
                    <form  action="" method="POST" enctype="multipart/form-data">
                        <!----------------------CATEGORY---------------------------->
                        <div class="form-group">
                            <label>Categorization </label>
                            <select name="categoryit" class="form-control" required>
                                <option selected hidden value=""> --Select Category-- </option>
                                <option value="IT">IT</option>
                            </select>
                        </div>
                        <!-----------------------SECTION---------------------------->
                        <div class="form-group">
                            <label>Section </label>
                            <select name="section" class="form-control" required>
                                <option selected hidden value=""> --Select Section-- </option>
                                <option value="Creative Designer">Creative Designer</option>
                                <option value="Data Analyst">Data Analyst</option>
                                <option value="Network Engineer">Network Engineer</option>
                                <option value="Infrastructure Architect">Infrastructure Architect</option>
                                <option value="LINUX Administrator">LINUX Administrator</option>
                                <option value="UNIX Administrator">UNIX Administrator</option>
                                <option value="IT Access Admin Analyst">IT Access Admin Analyst</option>
                                <option value="IT Security and Governance Analyst">IT Security and Governance Analyst</option>
                                <option value="IT Helpdesk 1st Level Technical Support">IT Helpdesk 1st Level Technical Support</option>
                                <option value="IT Helpdesk 1st Level Technical Support SAP">IT Helpdesk 1st Level Technical Support SAP</option>
                                <option value="IT Helpdesk 2nd Level Technical Support">IT Helpdesk 2nd Level Technical Support</option>
                                <option value="IT Helpdesk 2nd Level Technical Support SAP">IT Helpdesk 2nd Level Technical Support SAP</option>
                                <option value="Helpdesk Manager">Helpdesk Manager</option>
                                <option value="System Analyst with shift work schedule">System Analyst with shift work schedule</option>
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
                            <textarea class="form-control" name="descriptionit" required></textarea>
                        </div>
                        <!-----------------------DROP RESUME---------------------------->
                        <div class="form-group">
                            <label>Drop Resume</label>
                            <input type="file" name="uploadfile" class="form-control-file" id="uploadfile">
                        </div>
                        <br>
                        <!-----------------------SUBMIT BUTTON---------------------------->
                        <button class="btn btn-primary" name="submit" id="done" type="submit" value="Submit">Submit</button>
                        <a class="btn btn-outline-warning" href="index.php" role="button">Back</a>
                    </form>
<!--                    <p style="color:#FF0000;"><?php echo $status; ?></p>-->
                    <br>
                </div>
            </div>
        </div>
    </div>
     <script type="text/javascript">
        $(function(){
            $('#done').click(function(){
            swal("Done!", "You clicked the button!", "success");
            });
        });
    </script>
</body>


