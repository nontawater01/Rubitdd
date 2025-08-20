<?php
session_start();
include("condb.php");



if (isset($_POST['loginad'])) {




     $qureid = "SELECT * FROM admintb WHERE adname = '" . $_POST['adid'] . "' AND adpass = '" . $_POST['adpass'] . "'";
     $result = mysqli_query($condb, $qureid);

     if (mysqli_num_rows($result) == 1) {
          $_SESSION['adid'] = $_POST['adid'];
          header("location: skedit.php");
     } else {
          header("location: skedit.php");
     }
}
