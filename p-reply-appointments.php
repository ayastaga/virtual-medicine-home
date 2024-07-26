<?php
require_once "importance.php";

if (!Patient::isPatientIn()) {
	Config::redir("login.php");
}
?>

<html>

<head>
    <title>Replied Appointments<?php echo CONFIG::SYSTEM_NAME; ?></title>
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
                        Sent Appointments <small>View your sent appointments</small>
                    </div>
                    <div class='content-body'>
                        <?php Appointment::loadPatientRepliedAppointment();  ?>
                    </div><!-- end of the content area -->
                </div>

            </div><!-- col-md-7 -->

            <div class='col-md-3' style="background-color: white;">
                <h1 style='color: white; background-color: #f5a606; padding: 20px;'>TurnerCare Hospital<br></h1>
                <h1 style='color: #1fa8d6; font-size: 90px; padding: 10px;'>A Doctor in Your Pocket!</h1>
                <hr>
                <p style="font-size: 25px; margin-left: 5px; ">
                    Book an appointment, get your test results, review your medical history, and more. Download our VMH
                    TurnerCare App now.
                </p>
            </div>

        </div>
    </div>
</body>

</html>