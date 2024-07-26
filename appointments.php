<?php
require_once "importance.php";

if (!User::loggedIn()) {
    Config::redir("login.php");
}
?>

<html>

<head>
    <title>Appointments <?php echo CONFIG::SYSTEM_NAME; ?></title>
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
                        Dashboard <small>View your dashboard</small>
                    </div>
                    <?php require_once "inc/alerts.inc.php";  ?>
                    <div class='content-body'>
                        <?php Appointment::loadDoctorAppointMents(); ?>

                        <hr />
                        <h3 style="background-color: rgba(255, 255, 255, 0.877); color: #207FDD; padding: 10px;">
                            Replied Appointments</h3>
                        <?php Appointment::loadDoctorRepliedAppointMents(); ?>
                    </div><!-- end of the content area -->
                </div>

            </div><!-- col-md-7 -->


            <div class='col-md-3' style="background-color: white;">
                <h1 style="margin-left: 5px;">Dates to
                    Remember<br>
                </h1>
                <h4 class="bg-info" style="margin-left: 5px;">Posted by admin for doctors and staff
                </h4>
                <p style="margin-left: 5px; ">
                    <b>July 27, 2024: New Patient Registration Drive</b>
                    <br>
                    Aimed at streamlining the registration process and ensuring all new patients have their information
                    accurately entered into the system.
                    <br><br>
                    <b>August 1, 2024: Staff Training on Updated Protocols</b>
                    <br>
                    A mandatory training session covering new hospital protocols and procedures, including updates on
                    patient data management and security measures.
                    <br><br>
                    <b>August 15, 2024: Annual Health Fair</b>
                    <br>
                    A community outreach event where doctors and staff provide free health screenings, consultations,
                    and educational workshops.
                    <br><br>
                    <b>September 5, 2024: Medical Records Audit</b>
                    <br>
                    A thorough review of patient records to ensure compliance with legal standards and internal
                    policies.
                    <br><br>
                    <b>September 20, 2024: Specialist Consultation Day</b>
                    <br>
                    Coordinated day for in-house specialists to see patients, aimed at reducing wait times and improving
                    patient care coordination.
                </p>
            </div> <!-- this should be a sidebar -->

        </div>
    </div>
</body>

</html>