<?php
require_once "importance.php";

if (User::loggedIn()) {
    Config::redir("index.php");
}
?>

<html>

<head>
    <title>LOGIN - <?php echo CONFIG::SYSTEM_NAME; ?> </title>
    <?php require_once "inc/head.inc.php";  ?>
</head>

<body>
    <?php require_once "inc/header.inc.php"; ?>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-3' style="background-color: white;">
                <img src='images/norovirus.jpg' style="width: 700px; border: 1px solid black;" class='img-responsive' />
                <h1 style="margin-left: 5px;">Latest News<br>
                </h1>
                <h4 class="bg-info" style="margin-left: 5px">The Temporary Norovirus Outburst</h4>
                <p style="font-size: 16px; margin-left: 5px; text-align: justify; ">
                    TurnerCare is alerting the community to a recent outbreak of Norovirus, a highly
                    contagious virus that causes sudden onset of severe vomiting and diarrhea.<br><br>We are
                    collaborating with
                    public health officials to contain the spread and are implementing strict safety measures to protect
                    our patients, staff, and visitors.<br><br>We urge everyone to practice good hygiene, including
                    frequent
                    handwashing with soap and water, and to stay home if experiencing symptoms such as nausea, vomiting,
                    or diarrhea. If symptoms are severe or persistent, please seek medical attention promptly.
                    <br><br>TurnerCare is committed to providing the latest updates and support during this time.
                    TurnerCare will always be here for you, open
                    for every patient.For
                    more information, please contact our helpline.<br><br>
                </p>
            </div> <!-- this should be a sidebar -->
            <div class='col-md-9'>
                <div class='content-area'>
                    <div class='content-header'>
                        Login <small>Login to access the system</small>
                    </div>
                    <div class='content-body' style="padding-bottom: 37px;">

                        <?php
                        if (isset($_GET['attempt'])) {
                            // STARTING THE LOGIN AREA 

                            $status = $_GET['attempt'];

                            if ($status == 1) {
                                $header = "Login as an Admin";
                            } else {
                                $header = "Login as a Doctor";
                            }

                            echo "<center><div class='badge-header'>$header</div></center>";

                            // we created a method for creating forms

                            if (isset($_POST['login-email'])) {
                                $email = $_POST['login-email'];
                                $password = $_POST['login-password'];

                                if ($email == "" || $password == "") {
                                    Messages::error("You must fill in all the fields");
                                } else {
                                    User::login($email, $password, $status);
                                }
                            }

                        ?>
                        <div class='row'>
                            <div class='col-md-3'></div>
                            <div class='col-md-6'>
                                <div class='form-holder' style="padding-bottom:66px;">
                                    <?php Db::form(array("Email", "Password"), 3, array("login-email", "login-password"), array("text", "password"), "Login"); ?>
                                </div>
                            </div>
                            <div class='col-md-3'></div>
                        </div>
                        <?php
                            // ENDNG TGHE LOGIN AREA
                        } else {

                        ?>

                        <center>
                            <div class='badge-header'>Login As:</div>
                        </center>
                        <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-8'>
                                <div class='row' style='margin-top: 70px;'>
                                    <div class='col-md-4'>
                                        <center>
                                            <div class='img-login-icons'>
                                                <img class='img-responsive'
                                                    src='images/3678411 - hospital medical nurse.png'
                                                    alt='login as a doctor' />
                                            </div>
                                            <center><a href='login.php?attempt=1'>
                                                    <div class='badge-header'>Admin</div>
                                                </a></center>

                                        </center>
                                    </div>
                                    <div class='col-md-4'>

                                        <center>
                                            <div class='img-login-icons'>
                                                <img class='img-responsive'
                                                    src='images/3678412 - doctor medical care medical help stethoscope.png'
                                                    alt='login as a doctor' />
                                            </div>
                                            <center><a href='login.php?attempt=2'>
                                                    <div class='badge-header'>Doctor</div>
                                                </a></center>
                                        </center>
                                    </div>

                                    <div class='col-md-4'>

                                        <center>
                                            <div class='img-login-icons'>
                                                <img class='img-responsive'
                                                    src='images/3678443 - ambulance fast fast hospital.png'
                                                    alt='login as a doctor' />
                                            </div>
                                            <center><a href='login-patient.php'>
                                                    <div class='badge-header'>Patient</div>
                                                </a></center>
                                        </center>
                                    </div>

                                </div>
                            </div>
                            <div class='col-md-2'></div>
                            <?php } ?>
                        </div><!-- end of the content area -->
                    </div>
                </div>
            </div>
            <div class='col-md-9'>
                <div class="row">
                    <div class="col-md-8">
                        <div class="content-area" style="width: 73.5vw">
                            <hr>
                            <h1>About VMH TurnerCare</h1>
                            <p
                                style="font-size: 16px; text-align: justify; margin-bottom: 15px; padding-right: 45%; color: #38b6ff;">
                                The Virtual Medical Home
                            </p>
                            <p style="font-size: 16px; text-align: justify; margin-bottom: 15px; margin-right: 35%;">
                                TurnerCare is a leading healthcare facility and IT solution
                                provider
                                dedicated to providing exceptional
                                medical care and compassionate service to our community. With a rich history of
                                excellence, we offer a wide range of medical services, from primary care and specialized
                                treatments to advanced surgical procedures. Our team of highly skilled physicians,
                                nurses, and support staff is committed to delivering patient-centered care in a
                                welcoming and supportive environment. <br><br>At TurnerCare, we prioritize innovation
                                and
                                continuous improvement, ensuring that our patients receive the latest in medical
                                technology and evidence-based treatments. Our mission is to enhance the health and
                                well-being of our patients through a holistic approach that combines state-of-the-art
                                medical care with a personal touch. Whether you are seeking routine check-ups or complex
                                medical treatments, TurnerCare Hospital is here to provide the highest standard of care.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- hey babe don't forget to add a media query here -->
                        <img src="images/homepage_doctor.jpg" class="img-responsive"
                            style='margin-top: 25%; padding-right: 10%'>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>