<?php
require_once "importance.php";

if (!User::loggedIn()) {
    Config::redir("login.php");
}
?>

<html>

<head>
    <title><?php echo CONFIG::SYSTEM_NAME; ?></title>
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
                        <?php echo "$userFirstName $userSecondName"; ?> <small><?php echo $userRole; ?></small>
                    </div>
                    <div class='content-body'>

                        <?php $token = $_GET['token'];
                        User::profile($token);  ?>
                    </div><!-- end of the content area -->
                </div>

            </div><!-- col-md-7 -->

            <div class='col-md-3' style="background-color: white;">
                <img src='images/norovirus.jpg' style="width: 700px; border: 1px solid black;" class='img-responsive' />
                <h1 style="margin-left: 5px;">
                    <?php echo "$userFirstName $userSecondName"; ?><br>
                </h1>
                <h4 class="bg-success" style="margin-left: 5px">About your career so far</h4>
                <p style="font-size: 16px; margin-left: 5px; text-align: justify; ">
                    i gotta add this to the sql database; for now pretend there is a description here lol
                </p>
            </div> <!-- this should be a sidebar -->

        </div>
    </div>
</body>

</html>