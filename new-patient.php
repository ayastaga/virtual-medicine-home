<?php
require_once "importance.php";

if (!User::loggedIn()) {
    Config::redir("login.php");
}
?>

<html>

<head>
    <title>New Patient <?php echo CONFIG::SYSTEM_NAME; ?></title>
    <?php require_once "inc/head.inc.php";  ?>
</head>

<body>
    <?php require_once "inc/header.inc.php"; ?>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div> <!-- this should be a sidebar -->
            <div class='col-md-7'>
                <div class='content-area'>
                    <div class='content-header'>
                        Find Patient <small>Search for existing patient or add a new patient</small>
                    </div>
                    <div class='content-body'>
                        <div class='form-holder'> <br />
                            <?php
                            if (isset($_POST['p-number'])) {
                                $number = $_POST['p-number'];
                                Patient::checkPatient($number);
                            }
                            $form = new Form(2, "post");
                            $form->init();
                            $form->textBox("Patient Number", "p-number", "number",  "", "");
                            $form->close("Submit Number");
                            echo "
								<div class='row'>
									<div class='col-md-2'></div> 
									<div class='col-md-10'> 
										<h4><strong><a href='add-patient.php'>New Patient</a></strong></h4>
									</div>
								</div>
								";
                            ?>


                        </div>
                    </div>
                </div>

            </div>

            <div class='col-md-3' style="background-color: white;">
                <img src='images/new-patient.jpg' class='img-responsive'>
                <img src='images/new-patient-2.jpg' class='img-responsive'>
                <img src='images/new-patient-3.jpg' class='img-responsive'>
            </div>

        </div>
    </div>
</body>

</html>