<?php
require_once "importance.php";

?>

<html>

<head>
    <title>Book Appointment - <?php echo CONFIG::SYSTEM_NAME; ?></title>
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
                        Book Appointment <small>Book an appointment with a given doctor</small>
                    </div>
                    <div class='content-body'>
                        <div class='form-holder'><br /><br />
                            <?php

							if (isset($_POST['p-name'])) {
								$name = $_POST['p-name'];
								$number = $_POST['p-number'];
								$phone = $_POST['p-phone'];
								$message = $_POST['message'];
								$doctor = $_POST['a-doctor'];

								if ($message == "" || $doctor == "") {
									Messages::error("You must fill in all the fields");
								} else {
									Appointment::send($name, $number, $phone, $message, $doctor);
								}
							}

							$patient = $_SESSION['patient'];

							$form = new Form(2, "post");
							$form->init();
							$form->textBox("Full Name", "p-name", "text", Patient::getP($patient, "name"), array("readonly"));
							$form->textBox("Patient Number", "p-number", "number", Patient::getP($patient, "number"), array("readonly"));
							$form->textBox("Phone", "p-phone", "number", Patient::getP($patient, "phone"), array("readonly"));
							$form->textarea("Message", "message", "");
							Doctor::getArray("a-doctor", 2);
							$form->close("Book Appointment");
							?>
                        </div>
                    </div>
                </div>
            </div>

            <div class='col-md-3' style="background-color: white;">
                <h1 style="margin-left: 5px;">Things to Keep in
                    Mind<br>
                </h1>
                <h4 class="bg-info" style="margin-left: 5px; font-size: 14px;">Tips for patients booking an
                    appointment
                </h4>
                <p style="font-size: 13px; margin-left: 5px; text-align: justify; ">
                    <b>Provide Accurate Information</b>
                    <br>
                    Ensure that your personal details, including name, contact information, and medical history, are
                    correct and up-to-date.
                    <br><br>
                    <b>Verify Appointment Date and Time</b>
                    <br>
                    Double-check the date and time of your appointment to avoid any conflicts or missed visits.
                    <br><br>
                    <b>Prepare Required Documents</b>
                    <br>
                    Bring any necessary documents such as insurance information, identification, and previous medical
                    records.
                    <br><br>
                    <b>Check for Pre-Appointment Instructions</b>
                    <br>
                    Follow any specific instructions provided by the healthcare provider, such as fasting or medication
                    adjustments before the visit.
                    <br><br>
                    <b>Arrive Early</b>
                    <br>
                    Aim to arrive at least 15 minutes before your scheduled appointment to complete any necessary
                    paperwork.
                    <br><br>
                </p>
            </div> <!-- this should be a sidebar -->


        </div>
    </div>
</body>

</html>